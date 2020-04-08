<?
/**
 * Copyright (c) 8/4/2020 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

$MODULE_PATH = $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/cleaning.structure';
IncludeModuleLangFile(__FILE__);
?>

<div class="adm-detail-content">
    <div class="adm-detail-title">
        <?=GetMessage("CLEANING_STRUCTURE_NASTROYKA_SKANIROVAN")?></div>
    <div class="adm-detail-content-item-block">
        <form id="cleaning_structure" name="cleaning_structure" method="POST" action="<?=$_SERVER['PHP_SELF']?>">
            <input type="hidden" name="STEP" value="1" />
            <div class="adm-info-message-wrap">
                <div class="adm-info-message">
                    <strong><?=GetMessage("CLEANING_STRUCTURE_DANNYY_MODULQ_SOVERS")?></strong><br/>
                    <?=GetMessage("CLEANING_STRUCTURE_MODULQ_NE_PREDPRIMET")?></div>
            </div>
            <p><?=GetMessage("CLEANING_STRUCTURE_NA_ETOM_ETAPE_MODULQ")?></p><br/>
            <table class="adm-detail-content-table edit-table">
                <tbody>
                <tr class="heading">
                    <td colspan="2"><?=GetMessage("CLEANING_STRUCTURE_NASTROYKI_SKANIROVAN")?></td>
                </tr>
                <tr>
                    <td width="35%"><?=GetMessage("CLEANING_STRUCTURE_PAPKA_PO_UMOLCANIU_D")?></td>
                    <td><input type="text" name="UPLOAD_DIRECTORY" required value="/upload/" size="40" /></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="adm-info-message-wrap">
                            <div class="adm-info-message">
                                <?=GetMessage("CLEANING_STRUCTURE_DANNOE_ZANCENIE_AVLA")?><a href="/bitrix/admin/settings.php?mid=main"><?=GetMessage("CLEANING_STRUCTURE_NASTROYKAH_GLAVNOGO")?></a>, <?=GetMessage("CLEANING_STRUCTURE_TO_NE_MENAYTE_ZNACEN")?></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="35%" valign="top">
                        <?=GetMessage("CLEANING_STRUCTURE_DIREKTORII_DLA_ISKLU")?></td>
                    <td>
                        <input type="text" name="DIR_IGNORE" size="70" value="resize_cache;sale" />
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="adm-info-message-wrap">
                            <div class="adm-info-message">
                                <?=GetMessage("CLEANING_STRUCTURE_PERECISLETI_DIREKTOR")?><strong>;</strong>"
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="35%" valign="top">
                        <?=GetMessage("CLEANING_STRUCTURE_FAYLY_DLA_ISKLUCENIA")?></td>
                    <td>
                        <input type="text" name="FILE_IGNORE" size="70" value=".htaccess" />
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="adm-info-message-wrap">
                            <div class="adm-info-message">
                                <?=GetMessage("CLEANING_STRUCTURE_PERECISLETI_FAYLY_K")?><strong>;</strong>"
                            </div>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>
<div class="adm-detail-content-btns-wrap adm-detail-content-btns-fixed adm-detail-content-btns-pin">
    <div class="adm-detail-content-btns">
        <input type="submit" form="cleaning_structure" value="<?=GetMessage("CLEANING_STRUCTURE_ZAPUSTITQ_SKANIROVAN")?>" class="adm-btn-save" />
    </div>
</div>