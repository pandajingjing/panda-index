<?php
/**
 * 管理入口
 */
namespace PandaIndex;

$G_APP_DIR = array(
    'app\\' => [
        PANDA_CODEPATH . '/manage_web',
        PANDA_CODEPATH . '/duorou_manage',
        PANDA_CODEPATH . '/member_manage'
    ],
    'manage_service\\' => PANDA_CODEPATH . '/manage_service',
    'duorou_service\\' => PANDA_CODEPATH . '/duorou_service',
    'member_service\\' => PANDA_CODEPATH . '/member_service',
    'common_service\\' => PANDA_CODEPATH . '/common_service',
    'panda\\' => PANDA_CODEPATH . '/system'
);

if (PANDA_ENV_NAME == PANDA_ENV_RELEASE) {
    $G_CONFIG_DIR = array(
        PANDA_CODEPATH . '/system/config',
        PANDA_CODEPATH . '/common_service/config',
        PANDA_CODEPATH . '/member_service/config',
        PANDA_CODEPATH . '/duorou_service/config',
        PANDA_CODEPATH . '/manage_service/config',
        PANDA_CODEPATH . '/member_manage/config',
        PANDA_CODEPATH . '/duorou_manage/config',
        PANDA_CODEPATH . '/manage_web/config',
        PANDA_CODEPATH . '/config/manage_web',
        PANDA_BASEPATH . '/index/config/manage_web'
    );
} else {
    $G_CONFIG_DIR = array(
        PANDA_CODEPATH . '/system/config',
        PANDA_CODEPATH . '/common_service/config',
        PANDA_CODEPATH . '/member_service/config',
        PANDA_CODEPATH . '/duorou_service/config',
        PANDA_CODEPATH . '/manage_service/config',
        PANDA_CODEPATH . '/member_manage/config',
        PANDA_CODEPATH . '/duorou_manage/config',
        PANDA_CODEPATH . '/manage_web/config',
        PANDA_CODEPATH . '/config/manage_web',
        PANDA_CODEPATH . '/config/manage_web'
    );
}

$G_PAGE_DIR = array(
    PANDA_PAGEPATH . '/manage_web',
    PANDA_PAGEPATH . '/duorou_manage',
    PANDA_PAGEPATH . '/member_manage',
    PANDA_PAGEPATH . '/system'
);

include PANDA_CODEPATH . '/system/bin.php';
bin();