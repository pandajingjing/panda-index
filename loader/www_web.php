<?php
namespace PandaIndex;

$G_APP_DIR = array(
    'app\\' => PANDA_CODEPATH . '/www-web',
    'www-bclient\\' => PANDA_CODEPATH . '/www-bclient',
    'www-service\\' => PANDA_CODEPATH . '/www-service',
    'panda\\' => PANDA_CODEPATH . '/system'
);

$G_CONFIG_DIR = array(
    PANDA_CODEPATH . '/system/config',
    PANDA_CODEPATH . '/www-service/config',
    PANDA_CODEPATH . '/www-bclient/config',
    PANDA_CODEPATH . '/www-web/config',
    PANDA_CODEPATH . '/config/www-service',
    PANDA_CODEPATH . '/config/www-bclient',
    PANDA_CODEPATH . '/config/www-web'
);

$G_PAGE_DIR = array(
    PANDA_PAGEPATH . '/www-web',
    PANDA_PAGEPATH . '/system'
);

include PANDA_CODEPATH . '/system/bin.php';
bin();