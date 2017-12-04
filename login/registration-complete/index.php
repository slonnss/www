<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
IncludeTemplateLangFile(__FILE__);
?>

    <div class="wrap-lg loginPage">
        <h1 class="loginPage__title single-title"><?= GetMessage("TITLE") ?></h1>
        <div class="loginPage__application__loginSystem"><? $APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => "/include/login/thankyou/index.php",
                "EDIT_TEMPLATE" => ""
            ),
                false
            ); ?></div>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>