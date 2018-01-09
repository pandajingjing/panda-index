<?php
namespace PandaIndex;

$G_APP_DIR = array(
    'app\\' => PANDA_CODEPATH . '/blank_console',
    'blank_service\\' => PANDA_CODEPATH . '/blank_service',
    'panda\\' => PANDA_CODEPATH . '/system'
);

$G_CONFIG_DIR = array(
    PANDA_CODEPATH . '/system/config',
    PANDA_CODEPATH . '/blank_service/config',
    PANDA_CODEPATH . '/blank_console/config',
    PANDA_CODEPATH . '/config/blank_service',
    PANDA_CODEPATH . '/config/blank_console',
    PANDA_BASEPATH . '/index/config/blank_service',
    PANDA_BASEPATH . '/index/config/blank_console'
);

include PANDA_CODEPATH . '/system/bin.php';
bin_cmd();