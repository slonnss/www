<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

IncludeTemplateLangFile(__FILE__);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");

?>
    <div class="wrap-lg page404">
        <p class="page404__title"><?=GetMessage('ERROR404');?></p>
    </div>
<?php

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>