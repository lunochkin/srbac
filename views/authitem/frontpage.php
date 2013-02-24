<?php

$this->menu = array(
    array('label' => Helper::translate('srbac', 'Managing auth items'),
        'url' => array('manage')
    ),
    array('label' => Helper::translate('srbac', 'Assign to users'),
        'url' => array('assign')
    ),
    array(
        'label' => Helper::translate('srbac', 'User\'s assignments'),
        'url' => array('assignments')
    ),
);
