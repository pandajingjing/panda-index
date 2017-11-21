<?php
namespace PandaIndex;

$G_APP_DIR = array(
    'app\\' => PANDA_CODEPATH . '/message-console',
    'message-service\\' => PANDA_CODEPATH . '/message-service',
    'system\\' => PANDA_CODEPATH . '/system'
);

$G_CONFIG_DIR = array(
    PANDA_CODEPATH . '/system/config',
    PANDA_CODEPATH . '/message-service/config',
    PANDA_CODEPATH . '/message-console/config',
    PANDA_CODEPATH . '/config/message-service',
    PANDA_CODEPATH . '/config/message-console'
);

include PANDA_CODEPATH . '/system/bin.php';
bin_cmd();