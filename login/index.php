<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
IncludeTemplateLangFile(__FILE__);
?>
    <div class="wrap-lg loginPage">
        <h1 class="loginPage__title single-title"><?= GetMessage("TITLE") ?></h1>
        <div class="loginPage__loginForm">
            <div class="loginPage__loginForm__colLeft">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:system.auth.form",
                    "login",
                    array(
                        "COMPONENT_TEMPLATE" => "login",
                        "REGISTER_URL" => "/register/",
                        "FORGOT_PASSWORD_URL" => "/forgot-password/",
                        "PROFILE_URL" => "/profile/",
                        "SHOW_ERRORS" => "N"
                    ),
                    false
                ); ?>
            </div>
            <div class="loginPage__loginForm__colRight">
                <p><? $APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/include/login/loginform-description.php",
                        "EDIT_TEMPLATE" => ""
                    ),
                        false
                    ); ?></p>
            </div>
        </div>

        <?php if (!$USER->IsAuthorized()) { ?>
            <h2 class="loginPage__BottomForm"><?= GetMessage("PROPOSAL") ?></h2>
        <?php } ?>

        <? $APPLICATION->IncludeComponent(
            "stenova:main.register",
            "full_register",
            array(
                "AUTH" => "N",
                "REQUIRED_FIELDS" => array(
                    "UF_COMPANY_NAME",
                    "UF_INN"
                ),
                "SET_TITLE" => "Y",
                "SHOW_FIELDS" => array(
                    0 => "EMAIL",
                    1 => "NAME",
                    2 => "LAST_NAME",
                    3 => "PERSONAL_WWW",
                    4 => "PERSONAL_PHONE",
                    5 => "PERSONAL_CITY",
                ),
                "SUCCESS_PAGE" => "/login/registration-complete/",
                "USER_PROPERTY" => array(
                    0 => "UF_NOTIF_NEW_COLLECT",
                    1 => "UF_COMPANY_FORM",
                    2 => "UF_COMPANY_NAME",
                    3 => "UF_INN",
                    4 => "UF_KPP",
                    5 => "UF_BANK_NAME",
                    6 => "UF_BIK",
                    7 => "UF_KORR_SHET",
                    8 => "UF_RASCH_SCHET",
                    9 => "UF_UR_ADRESS",
                    10 => "UF_ITS_FACT_ADR",
                    11 => "UF_ITS_POCHT_ADR",
                    12 => "UF_FACT_ADRESS",
                    13 => "UF_POST_ADRESS",
                    14 => "UF_FIO_SEO",
                    15 => "UF_FIO_WRITE",
                    16 => "UF_POWER_ATTORNEY",
                    17 => "UF_FILE_REQUISITES",
                ),
                "USER_PROPERTY_NAME" => "",
                "USE_BACKURL" => "Y",
                "COMPONENT_TEMPLATE" => "full_register"
            ),
            false
        ); ?>


    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>