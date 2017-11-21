<?php
namespace PandaIndex;

$G_APP_DIR = array(
    'app\\' => PANDA_CODEPATH . '/file-web',
    'file-service\\' => PANDA_CODEPATH . '/file-service',
    'storage-service\\' => PANDA_CODEPATH . '/storage-service',
    'panda\\' => PANDA_CODEPATH . '/system'
);

$G_CONFIG_DIR = array(
    PANDA_CODEPATH . '/system/config',
    PANDA_CODEPATH . '/storage-service/config',
    PANDA_CODEPATH . '/file-service/config',
    PANDA_CODEPATH . '/file-web/config',
    PANDA_CODEPATH . '/config/storage-service',
    PANDA_CODEPATH . '/config/file-service',
    PANDA_CODEPATH . '/config/file-web'
);

$G_PAGE_DIR = array(
    PANDA_PAGEPATH . '/system'
);

include PANDA_CODEPATH . '/system/bin.php';
bin();