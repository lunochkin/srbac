<?php

foreach ($controllers as $n => $controller) {
    $title = $controller["title"];
    $data = array();
    foreach ($controller["actions"] as $key => $val) {
        $data[$val] = $val;
    }
    if (sizeof($data) > 0) {
        $select = $controller["allowed"];

        $cont["tab_" . $n] = array(
            "title" => str_replace("Controller", "", $title),
            "content" => SHtml::checkBoxList($title, $select, $data));
    }
}
?>
<?php echo SHtml::form(); ?>
<?php
Helper::publishCss($this->module->css);
$this->widget('system.web.widgets.CTabView',
    array(
        'tabs' => $cont,
        'cssFile' => $this->module->getCssUrl(),
        'htmlOptions' => array('class' => 'tabbable tabs-left'),
    )
);
?>
<div class="action">
    <?php echo SHtml::ajaxSubmitButton(Helper::translate("srbac", "Save"),
    array('saveAllowed'),
    array(
        'type' => 'POST',
        'update' => '#wizard',
        'beforeSend' => 'function(){
    $("#wizard").addClass("srbacLoading");
    }',
        'complete' => 'function(){
    $("#wizard").removeClass("srbacLoading");
    }',
    ),
    array(
        'name' => 'buttonSave',
    )
)
    ?>
</div>
<?php echo SHtml::endForm(); ?>
<!--Adjust tabview height--->
<script type="text/javascript">

    $(".tabbable.tabs-left ul.tabs")
            .addClass("nav")
            .addClass("nav-tabs");
    $(".tabbable.tabs-left ul.tabs").find("a").attr("data-toggle", "tab");
    $(".tabbable.tabs-left div.view").addClass("tab-pane");
    $(".tabbable.tabs-left div.view").wrapAll("<div class='tab-content' />")
</script>
