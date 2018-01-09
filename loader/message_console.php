<?php
namespace PandaIndex;

$G_APP_DIR = array(
    'app\\' => PANDA_CODEPATH . '/message_console',
    'message_service\\' => PANDA_CODEPATH . '/message_service',
    'panda\\' => PANDA_CODEPATH . '/system'
);

$G_CONFIG_DIR = array(
    PANDA_CODEPATH . '/system/config',
    PANDA_CODEPATH . '/message_service/config',
    PANDA_CODEPATH . '/message_console/config',
    PANDA_CODEPATH . '/config/message_service',
    PANDA_CODEPATH . '/config/message_console',
    PANDA_BASEPATH . '/index/config/message_service',
    PANDA_BASEPATH . '/index/config/message_console'
);

include PANDA_CODEPATH . '/system/bin.php';
bin_cmd();