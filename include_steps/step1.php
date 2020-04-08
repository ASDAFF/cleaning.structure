<?
/**
 * Copyright (c) 8/4/2020 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

$MODULE_PATH = $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/cleaning.structure';
IncludeModuleLangFile(__FILE__);
?>
<div class="adm-detail-content">
    <div class="adm-detail-title">
        <?=GetMessage("CLEANING_STRUCTURE_REZULQTAT_SKANIROVAN")?></div>
    <div class="adm-detail-content-item-block">
        <?if($arResult['FILE_SIZE'] == 0):?>
            <?=GetMessage("CLEANING_STRUCTURE_V_SISTEME_NE_NAYDENO")?><?else:?>
            <form id="cleaning_structure" name="cleaning_structure" method="POST" action="<?=$_SERVER['PHP_SELF']?>">
                <input type="hidden" name="STEP" value="2" />
                <p><?=GetMessage("CLEANING_STRUCTURE_BYLO_VYAVLENO")?><strong><i><?=sizeof($arResult['FILES_LIST'])?></i></strong> <?=GetMessage("CLEANING_STRUCTURE_FAYLOV_KOTORYE_NE_I")?></p>
                <p><?=GetMessage("CLEANING_STRUCTURE_OBSIY_RAZMER_VSEH_FA")?><strong><i><?=$arResult['ALL_FILE_SIZE']?> Mb</i></strong>, <?=GetMessage("CLEANING_STRUCTURE_IZ_NIH")?><strong><i><?=$arResult['FILE_SIZE']?> Mb</i></strong> <?=GetMessage("CLEANING_STRUCTURE_ZANIMAUT_FAYLY_KOTO")?><br/>
                    <?=GetMessage("CLEANING_STRUCTURE_PROCENT_MUSORNYH_FA")?><strong><i><?=( round( ($arResult['FILE_SIZE']/$arResult['ALL_FILE_SIZE']*100),2 ) )?>%</i></strong>.</p>
                <script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['gauge']}]}"></script>
                <div id="chart_div" style="width: 300px; height: 300px; margin: auto"></div>
                <script type="text/javascript">
                    google.setOnLoadCallback(drawChart);
                    function drawChart() {

                        var data = google.visualization.arrayToDataTable([
                            ['Label', 'Value'],
                            ['', <?=$arResult['ALL_FILE_SIZE']?>],
                        ]);

                        var options = {
                            width: 300, height: 300,
                            redFrom: 40, redTo: 100,
                            yellowFrom:20, yellowTo: 40,
                            greenFrom:0, greenTo: 20,
                            minorTicks: 20
                        };

                        var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

                        data.setValue(0, 1, <?=( round( ($arResult['FILE_SIZE']/$arResult['ALL_FILE_SIZE']*100),2 ) )?>);
                        chart.draw(data, options);
                    }
                </script>
                <input type="hidden" name="FILES_LIST" value="<?=implode(';',$arResult['FILES_LIST'])?>" />
            </form>
        <?endif;?>
    </div>
</div>
<div class="adm-detail-content-btns-wrap adm-detail-content-btns-fixed adm-detail-content-btns-pin">
    <div class="adm-detail-content-btns">
        <?if($arResult['FILE_SIZE'] != 0):?>
            <input type="submit" form="cleaning_structure" value="<?=GetMessage("CLEANING_STRUCTURE_ZAPUSTITQ_OCISTKU_SI")?>" class="adm-btn-save" />
        <?endif;?>
    </div>
</div>