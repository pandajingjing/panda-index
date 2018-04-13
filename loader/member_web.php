<?php
/**
 * 用户频道
 */
namespace PandaIndex;

$G_APP_DIR = array(
    'app\\' => PANDA_CODEPATH . '/member_web',
    'member_service\\' => PANDA_CODEPATH . '/member_service',
    'common_service\\' => PANDA_CODEPATH . '/common_service',
    'panda\\' => PANDA_CODEPATH . '/system'
);

if (PANDA_ENV_NAME == PANDA_ENV_RELEASE) {
    $G_CONFIG_DIR = array(
        PANDA_CODEPATH . '/system/config',
        PANDA_CODEPATH . '/common_service/config',
        PANDA_CODEPATH . '/member_service/config',
        PANDA_CODEPATH . '/member_web/config',
        PANDA_CODEPATH . '/config/member_web',
        PANDA_BASEPATH . '/index/config/member_web'
    );
} else {
    $G_CONFIG_DIR = array(
        PANDA_CODEPATH . '/system/config',
        PANDA_CODEPATH . '/common_service/config',
        PANDA_CODEPATH . '/member_service/config',
        PANDA_CODEPATH . '/member_web/config',
        PANDA_CODEPATH . '/config/member_web'
    );
}

$G_PAGE_DIR = array(
    PANDA_PAGEPATH . '/member_web',
    PANDA_PAGEPATH . '/system'
);

include PANDA_CODEPATH . '/system/bin.php';
bin();