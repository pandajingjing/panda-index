<?php
/**
 * 商城频道
 */
namespace PandaIndex;

$G_APP_DIR = array(
    'app\\' => PANDA_CODEPATH . '/mall_web',
    'mall_service\\' => PANDA_CODEPATH . '/mall_service',
    'common_service\\' => PANDA_CODEPATH . '/common_service',
    'panda\\' => PANDA_CODEPATH . '/system'
);

if (PANDA_ENV_NAME == PANDA_ENV_RELEASE) {
    $G_CONFIG_DIR = array(
        PANDA_CODEPATH . '/system/config',
        PANDA_CODEPATH . '/common_service/config',
        PANDA_CODEPATH . '/mall_service/config',
        PANDA_CODEPATH . '/mall_web/config',
        PANDA_CODEPATH . '/config/mall_web',
        PANDA_BASEPATH . '/index/config/mall_web'
    );
} else {
    $G_CONFIG_DIR = array(
        PANDA_CODEPATH . '/system/config',
        PANDA_CODEPATH . '/common_service/config',
        PANDA_CODEPATH . '/mall_service/config',
        PANDA_CODEPATH . '/mall_web/config',
        PANDA_CODEPATH . '/config/mall_web'
    );
}

$G_PAGE_DIR = array(
    PANDA_PAGEPATH . '/mall_web',
    PANDA_PAGEPATH . '/system'
);

include PANDA_CODEPATH . '/system/bin.php';
bin();