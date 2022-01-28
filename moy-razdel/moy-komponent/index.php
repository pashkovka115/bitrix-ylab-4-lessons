<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Мой компонент");
?><?php
$APPLICATION->IncludeComponent(
	"smirnov:cards.list", 
	"grid", 
	array(
		"IBLOCK_CODE" => "credit_card",
		"COMPONENT_TEMPLATE" => "grid"
	),
	false
);
?><?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>