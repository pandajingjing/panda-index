<?php
/**
 * 生活频道
 */
namespace PandaIndex;

$G_APP_DIR = array(
    'app\\' => PANDA_CODEPATH . '/life_web',
    'life_service\\' => PANDA_CODEPATH . '/life_service',
    'common_service\\' => PANDA_CODEPATH . '/common_service',
    'panda\\' => PANDA_CODEPATH . '/system'
);

if (PANDA_ENV_NAME == PANDA_ENV_RELEASE) {
    $G_CONFIG_DIR = array(
        PANDA_CODEPATH . '/system/config',
        PANDA_CODEPATH . '/common_service/config',
        PANDA_CODEPATH . '/life_service/config',
        PANDA_CODEPATH . '/life_web/config',
        PANDA_CODEPATH . '/config/life_web',
        PANDA_BASEPATH . '/index/config/life_web'
    );
} else {
    $G_CONFIG_DIR = array(
        PANDA_CODEPATH . '/system/config',
        PANDA_CODEPATH . '/common_service/config',
        PANDA_CODEPATH . '/life_service/config',
        PANDA_CODEPATH . '/life_web/config',
        PANDA_CODEPATH . '/config/life_web'
    );
}

$G_PAGE_DIR = array(
    PANDA_PAGEPATH . '/life_web',
    PANDA_PAGEPATH . '/system'
);

include PANDA_CODEPATH . '/system/bin.php';
bin();