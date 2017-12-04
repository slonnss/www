<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
    <div class="contact-page">
        <div id="map"></div>
        <div class="wrap-lg ">
            <div class="contact-page__titleWrap">
                <h1 class="contact-page__title">ООО “Торгово-промышленная компания “Стенова”</h1>
                <p><b>ИНН:</b> 0123456789</p>
                <p><b>КПП:</b> 012345678900</p>
            </div>
            <div class="contact-page__wrap">
                <div class="contact-page__wrap__colLeft">
                    <div class="contact-page__wrap__colLeft__item">
                        <h3 class='contact-page__wrap__colLeft__title'>Юридический адрес</h3>
                        <div class="contact-page__wrap__colLeft__description">199034, Россия, г. Санкт-Петербург, 13-я
                            линия, д.6-8, литер А, оф. 32-Н
                            Номер телефона: <a href='tel:'>+7 (812) 313 66 72</a></div>
                    </div>
                    <div class="contact-page__wrap__colLeft__item">
                        <h3 class='contact-page__wrap__colLeft__title'>Фактический адрес</h3>
                        <div class="contact-page__wrap__colLeft__description">195067, Россия, Санкт-Петербург,
                            Волго-Донской пр., д. 1
                        </div>
                    </div>
                    <div class="contact-page__wrap__colLeft__itemBottom">
                        <div class="contact-page__wrap__colLeft__itemBottom__row">
                            <span class="contact-page__wrap__colLeft__itemBottom__row__left">Отдел продаж по РФ:</span>
                            <a class="contact-page__wrap__colLeft__itemBottom__row__right" href='#'>+7 (812) 320 02
                                77</a>
                        </div>
                        <div class="contact-page__wrap__colLeft__itemBottom__row">
                            <span class="contact-page__wrap__colLeft__itemBottom__row__left">Отдел продаж по СНГ:</span>
                            <a class="contact-page__wrap__colLeft__itemBottom__row__right" href='#'>+7 (812) 320 02
                                77</a>
                        </div>
                        <div class="contact-page__wrap__colLeft__itemBottom__row">
                            <span class="contact-page__wrap__colLeft__itemBottom__row__left">Отдел рекламы и PR:</span>
                            <a class="contact-page__wrap__colLeft__itemBottom__row__right" href='#'>+7 (812) 320 02
                                77</a>
                        </div>
                        <div class="contact-page__wrap__colLeft__itemBottom__row">
                            <span class="contact-page__wrap__colLeft__itemBottom__row__left">Отдел развития продаж через Интернет: </span>
                            <a class="contact-page__wrap__colLeft__itemBottom__row__right" href='#'>+7 (812) 320 02
                                77</a>
                        </div>
                        <div class="contact-page__wrap__colLeft__itemBottom__row">
                            <span class="contact-page__wrap__colLeft__itemBottom__row__left">По общим вопросам:</span>
                            <a class="contact-page__wrap__colLeft__itemBottom__row__right" href='#'>+7 (812) 320 02
                                77</a>
                        </div>
                        <br>
                        <br>
                        <div class="contact-page__wrap__colLeft__itemBottom__row">
                            <span class="contact-page__wrap__colLeft__itemBottom__row__left">Телефон: </span>
                            <a class="contact-page__wrap__colLeft__itemBottom__row__right" href='#'>+7 (812) 320 02
                                77</a>
                        </div>
                        <div class="contact-page__wrap__colLeft__itemBottom__row">
                            <span class="contact-page__wrap__colLeft__itemBottom__row__left">Email:</span>
                            <div class="contact-page__wrap__colLeft__itemBottom__row__right">
                                <a class="transparentLink" href="#">info@stenova.ru</a>
                            </div>
                        </div>
                        <div class="contact-page__wrap__colLeft__itemBottom__row">
                            <span class="contact-page__wrap__colLeft__itemBottom__row__left">Мы в соц.сетях:</span>
                            <div class="contact-page__wrap__colLeft__itemBottom__row__right">
                                <ul>
                                    <li><a href="#"><img src="/img/icons/svg/facebook.svg" alt=""></a></li>
                                    <li><a href="#"><img src="/img/icons/svg/vk.svg" alt=""></a></li>
                                    <li><a href="#"><img src="/img/icons/svg/insta.svg" alt=""></a></li>
                                    <li><a href="#"><img src="/img/icons/svg/ok.svg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-page__wrap__colRight">
                    <h3 class="contact-page__wrap__colRight__titleColumn">Свяжитесь с нами</h3>
                    <p class="contact-page__wrap__colRight__description">Мы ценим Ваш интерес к нашей продукции и
                        сделаем все возможное, чтобы помочь Вам!</p>
                    <form action="" class="returnsPage__form__wrapper">
                        <div class="returnsPage__form__input returnsPage__form__input--half">
                            <label for="second-name"><sup>*</sup>Фамилия</label>
                            <input type="text" name="second-name" value="">
                        </div>
                        <div class="returnsPage__form__input returnsPage__form__input--half">
                            <label for="first-name"><sup>*</sup>Имя</label>
                            <input type="text" name="first-name" value="">
                        </div>
                        <div class="returnsPage__form__input returnsPage__form__input--half">
                            <label for="phone">Телефон</label>
                            <input class="telMask" type="text" name="phone" value="">
                        </div>
                        <div class="returnsPage__form__input returnsPage__form__input--half">
                            <label for="attachment">Тема</label>
                            <select name="" class="returnsPage__form__contactSelect">
                                <option value="">Отдел продаж по РФ</option>
                                <option value="">Отдел продаж по РФ</option>
                                <option value="">Отдел продаж по РФ</option>
                            </select>
                        </div>
                        <div class="returnsPage__form__input returnsPage__form__input--half">
                            <label for="mail">E-mail</label>
                            <input type="text" name="mail" value="">
                        </div>
                        <div class="returnsPage__form__input returnsPage__form__input--full">
                            <label for="message">Текст</label>
                            <textarea name="message"></textarea>
                        </div>
                        <div class="returnsPage__form__input returnsPage__form__input--full buttonBlock">
                            <input type="submit" name="" value="Отправить">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--google Map config-->
    <script>
        function initMap() {
            var uluru = {lat: 59.935315, lng: 30.268019};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 14,
                center: uluru
            });
            // show only icon
            var marker = new google.maps.Marker({
                position: uluru,
                map: map,
                icon: "/img/small-pages/map-mark.png"
            });
            // open marker width text
            var marker = new google.maps.Marker({
                position: uluru,
                map: map,
                position: {
                    lat: 59.934115,
                    lng: 30.220000
                },
                // hide icon
                icon: "/"
            });
            var contentString = '<div class="mapInfowindow">' +
                '<img src="/img/small-pages/map-logo.png" alt="">' +
                '<p>ООО "ТПК "Стенова" 195067, Россия, г. Санкт-Петербург,Волго-Донской пр., д. 1.</p>' +
                '</div>';
            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });
            infowindow.open(map, marker);
        }
    </script>
    <script async
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1rVVnOHKlMHWtuyHA8USQ2SGWspaoLTQ&callback=initMap"></script>
    <!-- end google map -->


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>