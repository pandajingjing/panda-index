<?php
namespace PandaIndex;

$G_APP_DIR = array(
    'app\\' => PANDA_CODEPATH . '/blank-mobile',
    'blank-service\\' => PANDA_CODEPATH . '/blank-service',
    'panda\\' => PANDA_CODEPATH . '/system'
);

$G_CONFIG_DIR = array(
    PANDA_CODEPATH . '/system/config',
    PANDA_CODEPATH . '/blank-service/config',
    PANDA_CODEPATH . '/blank-mobile/config',
    PANDA_CODEPATH . '/config/blank-service',
    PANDA_CODEPATH . '/config/blank-mobile'
);

$G_PAGE_DIR = array(
    PANDA_PAGEPATH . '/blank-mobile',
    PANDA_PAGEPATH . '/system'
);

include PANDA_CODEPATH . '/system/bin.php';
bin();