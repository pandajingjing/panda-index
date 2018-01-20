<?php
namespace PandaIndex;

$G_APP_DIR = array(
    'app\\' => PANDA_CODEPATH . '/www_web',
    'panda\\' => PANDA_CODEPATH . '/system'
);

if (PANDA_ENV_NAME == PANDA_ENV_RELEASE) {
    $G_CONFIG_DIR = array(
        PANDA_CODEPATH . '/system/config',
        PANDA_CODEPATH . '/www_web/config',
        PANDA_CODEPATH . '/config/www_web',
        PANDA_BASEPATH . '/index/config/www_web'
    );
} else {
    $G_CONFIG_DIR = array(
        PANDA_CODEPATH . '/system/config',
        PANDA_CODEPATH . '/www_web/config',
        PANDA_CODEPATH . '/config/www_web'
    );
}

$G_PAGE_DIR = array(
    PANDA_PAGEPATH . '/www_web',
    PANDA_PAGEPATH . '/system'
);

include PANDA_CODEPATH . '/system/bin.php';
bin();