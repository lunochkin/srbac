<?php

$this->breadcrumbs = array(
    'Управление правилами доступа'
);


?>
<?php if ($this->module->getMessage() != "") { ?>
<div id="srbacError">
    <?php echo $this->module->getMessage();?>
</div>
<?php } ?>
<?php if ($this->module->getShowHeader()) {
    $this->renderPartial($this->module->header);
}
?>
<div>
    <?php

    $this->renderPartial("frontpage");

    $tabs = array(
        'tab1' => array(
            'title' => Helper::translate('srbac', 'Users'),
            'view' => 'tabViews/roleToUser',
        ),
        'tab2' => array(
            'title' => Helper::translate('srbac', 'Roles'),
            'view' => 'tabViews/taskToRole',
        ),
        'tab3' => array(
            'title' => Helper::translate('srbac', 'Tasks'),
            'view' => 'tabViews/operationToTask',
        ),
    );
    ?>
    <div id='tabsAssign'>
    <?php
    Helper::publishCss($this->module->css);
    $this->widget('system.web.widgets.CTabView',
        array('tabs' => $tabs,
            'viewData' => array('model' => $model, 'userid' => $userid, 'message' => $message, 'data' => $data),
            'cssFile' => $this->module->getCssUrl(),
        ));
    ?>
    </div>
</div>
<?php if ($this->module->getShowFooter()) {
    $this->renderPartial($this->module->footer);
}
?>

<script type="text/javascript">
    $("#tabsAssign ul")
            .addClass("nav")
            .addClass("nav-tabs");
    $("#tabsAssign ul").find("a").attr("data-toggle", "tab");
    $("#tabsAssign ul").removeClass(".tabs");
    $("#tabsAssign div.view")
            .addClass("tab-pane")
            .removeClass("view")
    ;
    $("#tabsAssign div.tab-pane").wrapAll("<div class='tab-content' />");
    $("#tabsAssign ul li:first a").trigger("click");

    $("#tabsAssign ul li a").on("click", function() {

        $("#tabsAssign ul li").removeClass("active");
        $(this).closest("li").addClass("active");
    });
</script>