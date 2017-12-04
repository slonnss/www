<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/online/([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#",
		"RULE" => "alias=\$1",
		"ID" => "",
		"PATH" => "/desktop_app/router.php",
	),
	array(
		"CONDITION" => "#^/bitrix/services/ymarket/#",
		"RULE" => "",
		"ID" => "",
		"PATH" => "/bitrix/services/ymarket/index.php",
	),
	array(
		"CONDITION" => "#^/gallery/photogallery/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/gallery/photogallery/index.php",
	),
	array(
		"CONDITION" => "#^/online/(/?)([^/]*)#",
		"RULE" => "",
		"ID" => "",
		"PATH" => "/desktop_app/router.php",
	),
	array(
		"CONDITION" => "#^/stssync/calendar/#",
		"RULE" => "",
		"ID" => "bitrix:stssync.server",
		"PATH" => "/bitrix/services/stssync/calendar/index.php",
	),
	array(
		"CONDITION" => "#^/gallery/video/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/gallery/video/index.php",
	),
	array(
		"CONDITION" => "#^/stenova-home/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/stenova-home/index.php",
	),
	array(
		"CONDITION" => "#^/oboi-stenova/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/oboi-stenova/index.php",
	),
	array(
		"CONDITION" => "#^/news/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/news/index.php",
	),
);

?>