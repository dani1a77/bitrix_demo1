<?
IncludeModuleLangFile(__FILE__);

global $DB;
$db_type = mb_strtolower($DB->type);
CModule::AddAutoloadClasses(
	"kp_module",
	array(
		"kp_elements" => "classes/general/kp_elements.php",
	)
);
?>