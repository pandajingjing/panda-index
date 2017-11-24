<?php
namespace PandaIndex;

$G_APP_DIR = array(
    'app\\' => PANDA_CODEPATH . '/blank_mobile',
    'blank_service\\' => PANDA_CODEPATH . '/blank_service',
    'panda\\' => PANDA_CODEPATH . '/system'
);

$G_CONFIG_DIR = array(
    PANDA_CODEPATH . '/system/config',
    PANDA_CODEPATH . '/blank_service/config',
    PANDA_CODEPATH . '/blank_mobile/config',
    PANDA_CODEPATH . '/config/blank_service',
    PANDA_CODEPATH . '/config/blank_mobile'
);

$G_PAGE_DIR = array(
    PANDA_PAGEPATH . '/blank_mobile',
    PANDA_PAGEPATH . '/system'
);

include PANDA_CODEPATH . '/system/bin.php';
bin();