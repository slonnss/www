<?php
header('Content-type: text/html; charset=' . 'UTF-8');
define('STOP_STATISTICS', true);
define('NOT_CHECK_PERMISSIONS', true);

require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

//if( !check_bitrix_sessid() ) die();

$APPLICATION->RestartBuffer();

IncludeTemplateLangFile(__FILE__);


class addReviews
{

    private $dataForm;

    public function __construct()
    {
        CModule::IncludeModule("iblock");

        mb_internal_encoding("cp1251");

        mb_parse_str($_POST["dataForm"], $this->dataForm);

    }

    public function init()
    {
        $el = new CIBlockElement;

        $PROP = array();
        $PROP[103] = $this->dataForm["site_lang"];
        $PROP[2] = $this->dataForm["city"];

        $arLoadProductArray = Array(
            "MODIFIED_BY" => 1,
            "IBLOCK_SECTION_ID" => false,
            "IBLOCK_ID" => 7,
            "PROPERTY_VALUES" => $PROP,
            "NAME" => $this->dataForm["fio"],
            "ACTIVE" => "N",
            "DETAIL_TEXT" => $this->dataForm["testimonials"]
        );

        if ($PRODUCT_ID = $el->Add($arLoadProductArray))
            return true;
        else
            return "Error: " . $el->LAST_ERROR;

    }


}

$testimotial = new addReviews;
echo $testimotial->init();
die();