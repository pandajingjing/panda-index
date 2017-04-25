<?php
$G_PHP_DIR = array(
    PANDA_CODEPATH . '/blank-web',
    PANDA_CODEPATH . '/blank-bclient',
    PANDA_CODEPATH . '/blank-service',
    PANDA_CODEPATH . '/system'
);

$G_CONFIG_DIR = array(
    PANDA_CODEPATH . '/system/config',
    PANDA_CODEPATH . '/blank-service/config',
    PANDA_CODEPATH . '/blank-bclient/config',
    PANDA_CODEPATH . '/blank-web/config',
    PANDA_CODEPATH . '/config/blank-service',
    PANDA_CODEPATH . '/config/blank-bclient',
    PANDA_CODEPATH . '/config/blank-web'
);

$G_PAGE_DIR = array(
    PANDA_PAGEPATH . '/blank-web',
    PANDA_PAGEPATH . '/system'
);

include PANDA_CODEPATH . '/system/bin.php';
bin();