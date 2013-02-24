<?php

$this->menu = array(
    array('label' => SHtml::image($this->module->getIconsPath() . '/manageAuth.png',
        Helper::translate('srbac', 'Managing auth items'),
        array('class' => 'icon',
            'title' => Helper::translate('srbac', 'Managing auth items'),
            'border' => 0
        )
    ) . " " . ($this->module->iconText ? Helper::translate('srbac', 'Managing auth items') : ""),
        'url' => array('manage')
    ),
    array('label' => SHtml::image($this->module->getIconsPath() . '/usersAssign.png',
        Helper::translate('srbac', 'Assign to users'),
        array('class' => 'icon',
            'title' => Helper::translate('srbac', 'Assign to users'),
            'border' => 0,
        )
    ) . " " . ($this->module->iconText ? Helper::translate('srbac', 'Assign to users') : ""),
        'url' => array('assign')
    ),
    array(
        'label' => SHtml::image($this->module->getIconsPath() . '/users.png',
            Helper::translate('srbac', 'User\'s assignments'),
            array('class' => 'icon',
                'title' => Helper::translate('srbac', 'User\'s assignments'),
                'border' => 0
            )
        ) . " " . ($this->module->iconText ? Helper::translate('srbac', 'User\'s assignments') : ""),
        'url' => array('assignments')
    ),
);
