<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("registration");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.register",
	"",
	Array(
		"AUTH" => "Y",
		"REQUIRED_FIELDS" => array("EMAIL","PERSONAL_MOBILE"),
		"SET_TITLE" => "Y",
		"SHOW_FIELDS" => array("EMAIL","TITLE","NAME","LAST_NAME","PERSONAL_MOBILE"),
		"SUCCESS_PAGE" => "/auth/profile.php",
		"USER_PROPERTY" => array(),
		"USER_PROPERTY_NAME" => "",
		"USE_BACKURL" => "Y"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>