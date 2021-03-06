<?php
/**
 * 个人主页入口
 */
namespace PandaIndex;

$G_APP_DIR = array(
    'app\\' => PANDA_CODEPATH . '/pandajingjing_web',
    'common_service\\' => PANDA_CODEPATH . '/common_service',
    'panda\\' => PANDA_CODEPATH . '/system'
);

if (PANDA_ENV_NAME == PANDA_ENV_RELEASE) {
    $G_CONFIG_DIR = array(
        PANDA_CODEPATH . '/system/config',
        PANDA_CODEPATH . '/common_service/config',
        PANDA_CODEPATH . '/pandajingjing_web/config',
        PANDA_CODEPATH . '/config/pandajingjing_web',
        PANDA_BASEPATH . '/index/config/pandajingjing_web'
    );
} else {
    $G_CONFIG_DIR = array(
        PANDA_CODEPATH . '/system/config',
        PANDA_CODEPATH . '/common_service/config',
        PANDA_CODEPATH . '/pandajingjing_web/config',
        PANDA_CODEPATH . '/config/pandajingjing_web'
    );
}

$G_PAGE_DIR = array(
    PANDA_PAGEPATH . '/pandajingjing_web',
    PANDA_PAGEPATH . '/system'
);

include PANDA_CODEPATH . '/system/bin.php';
bin();