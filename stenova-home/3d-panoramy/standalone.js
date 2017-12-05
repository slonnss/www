function anError(error) {
    var errorMsg = document.createElement('div');
    errorMsg.className = 'pnlm-info-box';
    errorMsg.innerHTML = '<p>' + error + '</p>';
    document.getElementById('container').appendChild(errorMsg);
}

function parseURLParameters() {
    var URL;
    if (window.location.hash.length > 0) {
        // Prefered method since parameters aren't sent to server
        URL = [window.location.hash.slice(1)];
    } else {
        URL = decodeURI(window.location.href).split('?');
        URL.shift();
    }
    if (URL.length < 1) {
        // Display error if no configuration parameters are specified
        anError('No configuration options were specified.');
        return;
    }
    URL = URL[0].split('&');
    var configFromURL = {};
    for (var i = 0; i < URL.length; i++) {
        var option = URL[i].split('=')[0];
        var value = URL[i].split('=')[1];
        if (value == '')
            continue; // Skip options with empty values in URL config
        switch(option) {
            case 'hfov': case 'pitch': case 'yaw': case 'haov': case 'vaov':
            case 'minHfov': case 'maxHfov': case 'minPitch': case 'maxPitch':
            case 'minYaw': case 'maxYaw': case 'vOffset': case 'autoRotate':
                configFromURL[option] = Number(value);
                break;
            case 'autoLoad': case 'ignoreGPanoXMP':
                configFromURL[option] = JSON.parse(value);
                break;
            case 'author': case 'title': case 'firstScene': case 'fallback':
            case 'preview': case 'panorama': case 'config':
                configFromURL[option] = decodeURIComponent(value);
                break;
            default:
                anError('An invalid configuration parameter was specified: ' + option);
                return;
        }
    }

    var request;

    // Check for JSON configuration file
    if (configFromURL.config) {
        // Get JSON configuration file
        request = new XMLHttpRequest();
        request.onload = function() {
            if (request.status != 200) {
                // Display error if JSON can't be loaded
                var a = document.createElement('a');
                a.href = configFromURL.config;
                a.innerHTML = a.href;
                anError('The file ' + a.outerHTML + ' could not be accessed.');
                return;
            }

            var responseMap = JSON.parse(request.responseText);

            // Set JSON file location
            if (responseMap.basePath === undefined)
                responseMap.basePath = configFromURL.config.substring(0, configFromURL.config.lastIndexOf('/')+1);

            // Merge options
            for (var key in responseMap) {
                if (configFromURL.hasOwnProperty(key)) {
                    continue;
                }
                configFromURL[key] = responseMap[key];
            }

            // Set title
            if ('title' in configFromURL)
                document.title = configFromURL.title;

            // Create viewer
            pannellum.viewer('container', configFromURL);
        };
        request.open('GET', configFromURL.config);
        request.send();
        return;
    }

    // Set title
    if ('title' in configFromURL)
        document.title = configFromURL.title;
      console.log(configFromURL);
    // Create viewer
    pannellum.viewer('container', configFromURL);
}

// Display error if opened from local file
if (window.location.protocol == 'file:') {
    anError('Due to browser security restrictions, Pannellum can\'t be run ' +
        'from the local filesystem; some sort of web server must be used.');
} else {
    // Initialize viewer
    //parseURLParameters();
}

/**
 * комната управления комнатой
 * @param PannelumManager pannellumManger
 * @param String xmlUrl ссылка на xml со сценами 
 * @return {ColorController}
 */
function ColorController(pannellumManger, xmlUrl)
{
  /**
   * список доступных цветов
   * @type {Array}
   */
  this.colors = [];
  /**
   * список кнопок
   * @type {Array}
   */
  this.buttons = [];
  
  var controller = this;
  
  /**
   * загрузка xml со цветами
   * @param string xmlUrl
   * @return {undefined}
   */
  this.loadXml = function(xmlUrl)
  {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       controller.setColors(this.responseText);
      }
    };
    xhttp.open("GET", xmlUrl, true);
    xhttp.send();
  };
  
  /**
   * парсинг и установка цветов из текста в формате xml
   * @param string xml
   * @return {undefined}
   */
  this.setColors =  function(xml)
  {
    if (window.DOMParser) {
      var parser = new DOMParser();
      var xmlDoc = parser.parseFromString(xml,"text/xml");
    } else {
      // code for old IE browsers
      var xmlDoc = new ActiveXObject("Microsoft.XMLDOM");
      xmlDoc.async = false;
      xmlDoc.loadXML(xml); 
    }
    let colors = xmlDoc.getElementsByTagName("color");
    controller.colors = [];
    for(var i = 0; i < colors.length; i++)
    {
      let color = colors[i];
      controller.colors.push({
        id: i,
        colorHex: color.getElementsByTagName("hex")[0].textContent,
        name: color.getElementsByTagName("name")[0].textContent,
        link: color.getElementsByTagName("link")[0].textContent
      });
    }
    controller.addButtons(controller.colors);
  };
  
  /**
   * добавление кнопок переключения цветов
   * @param {Array} colors массив с описанием сцен в формате {id, colorHex, name, link}
   * @return {undefined}
   */
  this.addButtons = function(colors)
  {
    if(document.getElementById('color-controllers'))
    {
      return;
    }
    let cntrlElem = document.createElement('div');
    cntrlElem.id = 'color-controllers';
    this.addLogo(cntrlElem);
    this.buttons = [];
    for(var i = 0; i < colors.length; i++)
    {
      this.buttons.push(this.addButton(cntrlElem, colors[i]));
    }
    pannellumManger.container.appendChild(cntrlElem);
  };
  
  this.addLogo = function(elem)
  {
    let div = document.createElement('div');
    div.className = 'logo';
    let img = document.createElement('img');
    img.src = 'images/logo.png';
    div.appendChild(img);
    elem.appendChild(div);
  }
  
  /**
   * добавдение кнопки
   * @param {Element} elem
   * @param {Array} params
   * @return {undefined}
   */
  this.addButton = function(elem, params)
  {
    var div = document.createElement('div');
    div.className = 'color-btn';
    div.style.background = '#' + params.colorHex;
    div.title = params.name;
    div.setAttribute('scene-id', params.id);
    div.onclick = function(){
      pannellumManger.changeScene(this.getAttribute('scene-id'));
    };
    pannellumManger.addScene(params);
    //div.onclick = 
    elem.appendChild(div);
    return div;
  };
  
  /**
   * обработка события загрузки сцены.
   * @return {undefined}
   */
  this.afterLoadEvent = function(){
    controller.setActiveButton(pannellumManger.viewer);
  };
  
  /**
   * установка активного цвета
   * @param {Viewer} viewer
   * @return {undefined}
   */
  this.setActiveButton = function(viewer){
    for(var i = 0; i < this.buttons.length; i++)
    {
      controller.buttons[i].className = this.buttons[i].className.replace(' active', '').replace('active ', '')
    }
    for(var i = 0; i < this.buttons.length; i++)
    {
      if(controller.buttons[i].getAttribute('scene-id') == viewer.getScene())
      {
        controller.buttons[i].className = this.buttons[i].className.replace(' active', '').replace('active ', '') + " active";
        return;
      }
    }
    this.buttons[0].className = this.buttons[0].className.replace(' active', '').replace('active ', '') + " active";
  };
  
  /**
   * загрузка информации о ценах или из параметра xml или по ссылке, которое было передано в конструктор
   * @param string xml
   * @return {undefined}
   */
  this.load = function(xml = undefined)
  {
    if(xml === undefined && xmlUrl === undefined)
    {
      alert('XMl not found');
      return;
    }
    if(xmlUrl !== undefined)
    {
      controller.loadXml(xmlUrl);
      return;
    }
    controller.setColors(xml);
  }
}

/**
 * объект управления комнатой
 * @param {type} pannellum
 * @param {Object} config
 * @param {String} elemId
 * @return {PannelumManager}
 */
function PannelumManager(pannellum, config, elemId)
{
  /**
   * 
   * @type {Viewer}
   */
  this.viewer = null;
  /**
   * список событий, который устнавливается при вызове init
   * @type {Array}
   */
  this.events = [];
  /**
   * @type {String}
   */
  this.container = document.getElementById(elemId);
  
  /**
   * инициализация комнаты
   * @param {type} pannellum
   * @param {Object} config
   * @return {undefined}
   */
  this.init = function(pannellum, config)
  {
    this.viewer = pannellum.viewer(elemId, config);
    for(var i = 0; i < this.events.length; i++)
    {
      this.viewer.on(this.events[i].type, this.events[i].listener);
    }
    this.viewer.loadScene(0);
  };
  /**
   * изменение комнаты
   * @param {type} id
   * @return {undefined}
   */
  this.changeScene = function(id){
    if(this.viewer.getScene() != id)
    {
      this.viewer.loadScene(id, this.viewer.getPitch(), this.viewer.getYaw(), this.viewer.getHfov());
    }
  };
  /**
   * добавление сцены
   * @param {Object} params
   * @return {undefined}
   */
  this.addScene = function(params){
    if(this.viewer === null)
    {
      var localConfig = {};
      localConfig.scenes = [];
      localConfig.scenes.push({panorama: params.link});
      localConfig.scenes.push({panorama: params.link});
      localConfig.autoLoad = true;
      localConfig.panorama = params.link;
      this.init(pannellum, localConfig);
      return;
    }
    this.viewer.addScene(params.id, {panorama: params.link});
  };
  
  /**
   * добавление события. Имеет смысл вызывать только до вызова init
   * @param {type} type
   * @param {type} listener
   * @return {undefined}
   */
  this.addEvent = function(type, listener)
  {
    this.events.push({type:type, listener:listener});
  }
}

