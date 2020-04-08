<?
/**
 * Copyright (c) 8/4/2020 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

IncludeModuleLangFile(__FILE__);
$MODULE_ID = basename(dirname(__FILE__));
Class CCleaningStructure
{

	function OnBuildGlobalMenu(&$aGlobalMenu, &$aModuleMenu)
	{
		if($GLOBALS['APPLICATION']->GetGroupRight("main") < "R")
			return;

		$MODULE_ID = basename(dirname(__FILE__));

        $aMenu = array(
            "parent_menu" => "global_menu_services",
            "section" => $MODULE_ID,
            "sort" => 50,
            "text" => GetMessage('LINK_TEXT'),
            "title" => '',
            "url" => $MODULE_ID.".php",
            "icon" => "cleaning_icon",
            "page_icon" => "",
            "items_id" => $MODULE_ID."_items",
            "more_url" => array(),
            "items" => array()
        );

		$aModuleMenu[] = $aMenu;
	}
}
?>
