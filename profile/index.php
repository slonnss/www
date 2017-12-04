<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Профиль");

IncludeTemplateLangFile(__FILE__);

if(!$USER->IsAuthorized()){
    LocalRedirect("/login/");
}
?>

    <div class="wrap-lg profile">
    <h1 class="profile__title single-title"><?=GetMessage('TITLE');?></h1>

    <div class="tabs">
        <? $APPLICATION->IncludeComponent(
	"bitrix:main.profile", 
	"profile", 
	array(
		"CHECK_RIGHTS" => "Y",
		"SEND_INFO" => "N",
		"SET_TITLE" => "Y",
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
			10 => "UF_CONTRACT_USER",
			11 => "UF_PRICE_LIST_USER",
			12 => "UF_UF_CONTR_USER_DES",
			13 => "UF_PR_LIST_USER_DESC",
			14 => "UF_ITS_FACT_ADR",
			15 => "UF_ITS_POCHT_ADR",
			16 => "UF_FACT_ADRESS",
			17 => "UF_POST_ADRESS",
			18 => "UF_FIO_SEO",
			19 => "UF_FIO_WRITE",
			20 => "UF_POWER_ATTORNEY",
			21 => "UF_FILE_REQUISITES",
		),
		"USER_PROPERTY_NAME" => "",
		"COMPONENT_TEMPLATE" => "profile"
	),
	false
); ?>
    </div>


    <div class="profile__bottomText">
        <h2 class="profile__bottomText__title"><?=GetMessage('DESCRIPTION_TITLE');?></h2>
        <div class="profile__bottomText__description">
            <? $APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => "/include/profile/description.php",
                "EDIT_TEMPLATE" => ""
            ),
                false
            ); ?>
        </div>
    </div>
    </div><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>