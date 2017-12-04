<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("География продаж");
?>

    <div class="wrap-lg sales ">
        <span class="tabletTitle">География продаж</span>
        <div class="sales__colRight__topPart sales__colRight__topPart--tablet"><!--2 раза выводиться-->
            <div class="sales__colRight__topPart__leftLinkCont">
                <a href="#" class="blueLink">Обои Stenova</a>
                <a href="#" class="blueLink">Stenova Home</a>
            </div>
            <a class="sales__colRight__topPart__addToCard" href="#">Добавить магазин</a>
        </div>
        <div class="sales__colLeft ">
            <h1 class="sales__colLeft__title">География продаж</h1><!--и здесь -->
            <div class="sales__colLeft__filter  filterBlock">
                <span class="sales__colLeft__filter__name"></span>
                <div class="salesMobile">
                    <div class="sales__colRight__topPart__leftLinkCont">
                        <a href="#" class="blueLink">Обои Stenova</a><br>
                        <a href="#" class="blueLink">Stenova Home</a>
                    </div>
                    <a class="sales__colRight__topPart__addToCard" href="#">Добавить магазин</a>
                </div>
                <div class="checkboxArea ">
                    <input id="cfirst" type="checkbox" name="first" hidden/>
                    <label for="cfirst">Дилеры</label>
                    <input id="cfirst2" type="checkbox" name="first" hidden/>
                    <label for="cfirst2">Магазины</label>
                </div>
                <select name="" class="returnsPage__form__contactSelect">
                    <option value="">Российская Федерация</option>
                    <option value="">Российская Федерация</option>
                    <option value="">Российская Федерация</option>
                </select>
                <select name="" class="returnsPage__form__contactSelect">
                    <option value="">Регион</option>
                    <option value="">Регион</option>
                    <option value="">Регион</option>
                </select>
                <select name="" class="returnsPage__form__contactSelect">
                    <option value="">Выберите город</option>
                    <option value="">Выберите город</option>
                    <option value="">Выберите город</option>
                </select>
                <div class="filterBlock">
                    <a href="#" class="clearFilter">Сбросить фильтр</a>
                </div>

            </div>

        </div>
        <div class="mobileShow">
            <label>Где купить</label>
            <select class="casromSelect">
                <option>Выберите из списка</option>
                <option>Обои Stenova</option>
                <option>Stenova Home</option>
                <option>Добавить в магазин</option>
            </select>
        </div>
        <div class="sales__colRight">
            <div class="sales__colRight__topPart">
                <div class="sales__colRight__topPart__leftLinkCont">
                    <a href="#" class="blueLink">Обои Stenova</a>
                    <a href="#" class="blueLink">Stenova Home</a>
                </div>
                <a class="sales__colRight__topPart__addToCard" href="#">Добавить магазин</a>
            </div><!--end-->
            <div id="mapSales"></div>
            <div class="sales__colRight__titleBottom">
                <b>г. Киров</b><br>
                ул. Карла Маркса, 49<br>
                Россия, 610020
            </div>
            <div class="sales__colRight__adressCont">
                <div class="sales__colRight__adressCont__item">
                    <div class="sales__colRight__adressCont__item__map">
                        <iframe src="https://www.google.com/maps/embed?key=AIzaSyBjSH_EkvCFvra5Aqdj42HKHqfNICp-OtY&pb=!1m14!1m12!1m3!1d14550601.266713813!2d53.92211922548963!3d55.26352842766121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1511780841644" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="sales__colRight__adressCont__item__content">
                        <h6 class="sales__colRight__adressCont__item__content__title">Северо-Западный ФО ООО ВВП</h6>
                        <div class="sales__colRight__adressCont__item__content__adressCont">
                            <div class="sales__colRight__adressCont__item__content__adressCont__colLeft">
                                <p>Адрес: ул. Карла Маркса, 49</p>
                                <p>Телефон: <a href="tel:">+7 812 325-78-78</a></p>
                            </div>
                            <div class="sales__colRight__adressCont__item__content__adressCont__colLeft">
                                <p>Сайт:<a href="#">www.vvp.ru</a></p>
                                <p>Email адрес: <a href="tel:">vvp@mail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sales__colRight__adressCont__item">
                    <div class="sales__colRight__adressCont__item__map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d341855.6138824752!2d37.333874077105385!3d55.744229243445375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54afc73d4b0c9%3A0x3d44d6cc5757cf4c!2z0JzQvtGB0LrQstCwLCDQoNC-0YHRgdC40Y8!5e0!3m2!1sru!2sua!4v1504531383581" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="sales__colRight__adressCont__item__content">
                        <h6 class="sales__colRight__adressCont__item__content__title">Центральный ФО ООО Компания МПК</h6>
                        <div class="sales__colRight__adressCont__item__content__adressCont">
                            <div class="sales__colRight__adressCont__item__content__adressCont__colLeft">
                                <p>Адрес: ул. Карла Маркса, 49</p>
                                <p>Телефон: <a href="tel:">+7 812 325-78-78</a></p>
                            </div>
                            <div class="sales__colRight__adressCont__item__content__adressCont__colLeft">
                                <p>Сайт:<a href="#">www.vvp.ru</a></p>
                                <p>Email адрес: <a href="tel:">vvp@mail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sales__colRight__adressCont__item">
                    <div class="sales__colRight__adressCont__item__map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d341855.6138824752!2d37.333874077105385!3d55.744229243445375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54afc73d4b0c9%3A0x3d44d6cc5757cf4c!2z0JzQvtGB0LrQstCwLCDQoNC-0YHRgdC40Y8!5e0!3m2!1sru!2sua!4v1504531383581" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="sales__colRight__adressCont__item__content">
                        <h6 class="sales__colRight__adressCont__item__content__title">Центральный ФО ООО Компания МПК</h6>
                        <div class="sales__colRight__adressCont__item__content__adressCont">
                            <div class="sales__colRight__adressCont__item__content__adressCont__colLeft">
                                <p>Адрес: ул. Карла Маркса, 49</p>
                                <p>Телефон: <a href="tel:">+7 812 325-78-78</a></p>
                            </div>
                            <div class="sales__colRight__adressCont__item__content__adressCont__colLeft">
                                <p>Сайт:<a href="#">www.vvp.ru</a></p>
                                <p>Email адрес: <a href="tel:">vvp@mail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tablet version-->
        <div class="sales__colRight__titleBottom sales__colRight__titleBottom--tablet">
            <b>г. Киров</b><br>
            ул. Карла Маркса, 49<br>
            Россия, 610020
        </div>
        <div class="sales__colRight__adressCont sales__colRight__adressCont--tablet">
            <div class="sales__colRight__adressCont__item">
                <div class="sales__colRight__adressCont__item__map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d341855.6138824752!2d37.333874077105385!3d55.744229243445375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54afc73d4b0c9%3A0x3d44d6cc5757cf4c!2z0JzQvtGB0LrQstCwLCDQoNC-0YHRgdC40Y8!5e0!3m2!1sru!2sua!4v1504531383581" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="sales__colRight__adressCont__item__content">
                    <h6 class="sales__colRight__adressCont__item__content__title">Северо-Западный ФО ООО ВВП</h6>
                    <div class="sales__colRight__adressCont__item__content__adressCont">
                        <div class="sales__colRight__adressCont__item__content__adressCont__colLeft">
                            <p>Адрес: ул. Карла Маркса, 49</p>
                            <p>Телефон: <a href="tel:">+7 812 325-78-78</a></p>
                        </div>
                        <div class="sales__colRight__adressCont__item__content__adressCont__colLeft">
                            <p>Сайт:<a href="#">www.vvp.ru</a></p>
                            <p>Email адрес: <a href="tel:">vvp@mail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sales__colRight__adressCont__item">
                <div class="sales__colRight__adressCont__item__map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d341855.6138824752!2d37.333874077105385!3d55.744229243445375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54afc73d4b0c9%3A0x3d44d6cc5757cf4c!2z0JzQvtGB0LrQstCwLCDQoNC-0YHRgdC40Y8!5e0!3m2!1sru!2sua!4v1504531383581" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="sales__colRight__adressCont__item__content">
                    <h6 class="sales__colRight__adressCont__item__content__title">Центральный ФО ООО Компания МПК</h6>
                    <div class="sales__colRight__adressCont__item__content__adressCont">
                        <div class="sales__colRight__adressCont__item__content__adressCont__colLeft">
                            <p>Адрес: ул. Карла Маркса, 49</p>
                            <p>Телефон: <a href="tel:">+7 812 325-78-78</a></p>
                        </div>
                        <div class="sales__colRight__adressCont__item__content__adressCont__colLeft">
                            <p>Сайт:<a href="#">www.vvp.ru</a></p>
                            <p>Email адрес: <a href="tel:">vvp@mail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sales__colRight__adressCont__item">
                <div class="sales__colRight__adressCont__item__map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d341855.6138824752!2d37.333874077105385!3d55.744229243445375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54afc73d4b0c9%3A0x3d44d6cc5757cf4c!2z0JzQvtGB0LrQstCwLCDQoNC-0YHRgdC40Y8!5e0!3m2!1sru!2sua!4v1504531383581" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="sales__colRight__adressCont__item__content">
                    <h6 class="sales__colRight__adressCont__item__content__title">Центральный ФО ООО Компания МПК</h6>
                    <div class="sales__colRight__adressCont__item__content__adressCont">
                        <div class="sales__colRight__adressCont__item__content__adressCont__colLeft">
                            <p>Адрес: ул. Карла Маркса, 49</p>
                            <p>Телефон: <a href="tel:">+7 812 325-78-78</a></p>
                        </div>
                        <div class="sales__colRight__adressCont__item__content__adressCont__colLeft">
                            <p>Сайт:<a href="#">www.vvp.ru</a></p>
                            <p>Email адрес: <a href="tel:">vvp@mail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <script>
        function initMap() {
            var uluru = {lat: 59.935315, lng: 30.268019};
            var map = new google.maps.Map(document.getElementById('mapSales'), {
                zoom: 6,
                center: uluru
            });
            // show only icon
            var marker = new google.maps.Marker({
                position: uluru,
                map: map,
                icon: "/img/small-pages/map-mark.png"
            });
            var marker = new google.maps.Marker({
                map: map,
                position: {
                    lat: 59.934115,
                    lng: 35.220000
                },
                icon: "/img/small-pages/map-mark.png"
            });
            var marker = new google.maps.Marker({
                position: {
                    lat: 59.934115,
                    lng: 40.220000
                },
                map: map,
                icon: "/img/small-pages/map-mark.png"
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjSH_EkvCFvra5Aqdj42HKHqfNICp-OtY&callback=initMap"></script>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>