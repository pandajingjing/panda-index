<?php
$G_PHP_DIR = array(
    PANDA_CODEPATH . '/upload-web',
    PANDA_CODEPATH . '/file-bclient',
    PANDA_CODEPATH . '/file-service',
    PANDA_CODEPATH . '/storage-bclient',
    PANDA_CODEPATH . '/storage-service',
    PANDA_CODEPATH . '/system'
);

$G_CONFIG_DIR = array(
    PANDA_CODEPATH . '/system/config',
    PANDA_CODEPATH . '/storage-service/config',
    PANDA_CODEPATH . '/storage-bclient/config',
    PANDA_CODEPATH . '/file-service/config',
    PANDA_CODEPATH . '/file-bclient/config',
    PANDA_CODEPATH . '/upload-web/config',
    PANDA_CODEPATH . '/config/upload-web'
);

$G_PAGE_DIR = array(
    PANDA_PAGEPATH . '/system'
);

include PANDA_CODEPATH . '/system/bin.php';
bin();