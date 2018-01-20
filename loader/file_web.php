<?php
namespace PandaIndex;

$G_APP_DIR = array(
    'app\\' => PANDA_CODEPATH . '/file_web',
    'file_service\\' => PANDA_CODEPATH . '/file_service',
    'storage_service\\' => PANDA_CODEPATH . '/storage_service',
    'panda\\' => PANDA_CODEPATH . '/system'
);

if (PANDA_ENV_NAME == PANDA_ENV_RELEASE) {
    $G_CONFIG_DIR = array(
        PANDA_CODEPATH . '/system/config',
        PANDA_CODEPATH . '/storage_service/config',
        PANDA_CODEPATH . '/file_service/config',
        PANDA_CODEPATH . '/file_web/config',
        PANDA_CODEPATH . '/config/storage_service',
        PANDA_CODEPATH . '/config/file_service',
        PANDA_CODEPATH . '/config/file_web',
        PANDA_BASEPATH . '/index/config/storage_service',
        PANDA_BASEPATH . '/index/config/file_service',
        PANDA_BASEPATH . '/index/config/file_web'
    );
} else {
    $G_CONFIG_DIR = array(
        PANDA_CODEPATH . '/system/config',
        PANDA_CODEPATH . '/storage_service/config',
        PANDA_CODEPATH . '/file_service/config',
        PANDA_CODEPATH . '/file_web/config',
        PANDA_CODEPATH . '/config/storage_service',
        PANDA_CODEPATH . '/config/file_service',
        PANDA_CODEPATH . '/config/file_web'
    );
}

$G_PAGE_DIR = array(
    PANDA_PAGEPATH . '/system'
);

include PANDA_CODEPATH . '/system/bin.php';
bin();