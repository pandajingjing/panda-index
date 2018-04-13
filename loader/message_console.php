<?php
/**
 * 消息命令行入口
 */
namespace PandaIndex;

$G_APP_DIR = array(
    'app\\' => [
        PANDA_CODEPATH . '/message_console',
        PANDA_CODEPATH . '/duorou_console'
    ],
    'duorou_service\\' => PANDA_CODEPATH . '/duorou_service',
    'message_service\\' => PANDA_CODEPATH . '/message_service',
    'common_service\\' => PANDA_CODEPATH . '/common_service',
    'panda\\' => PANDA_CODEPATH . '/system'
);

if (PANDA_ENV_NAME == PANDA_ENV_RELEASE) {
    $G_CONFIG_DIR = array(
        PANDA_CODEPATH . '/system/config',
        PANDA_CODEPATH . '/common_service/config',
        PANDA_CODEPATH . '/message_service/config',
        PANDA_CODEPATH . '/duorou_service/config',
        PANDA_CODEPATH . '/duorou_console/config',
        PANDA_CODEPATH . '/message_console/config',
        PANDA_CODEPATH . '/config/message_console',
        PANDA_BASEPATH . '/index/config/message_console'
    );
} else {
    $G_CONFIG_DIR = array(
        PANDA_CODEPATH . '/system/config',
        PANDA_CODEPATH . '/common_service/config',
        PANDA_CODEPATH . '/message_service/config',
        PANDA_CODEPATH . '/duorou_service/config',
        PANDA_CODEPATH . '/duorou_console/config',
        PANDA_CODEPATH . '/message_console/config',
        PANDA_CODEPATH . '/config/message_console'
    );
}

include PANDA_CODEPATH . '/system/bin.php';
bin_cmd();