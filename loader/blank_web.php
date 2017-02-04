<?php
$G_PHP_DIR = array(
    PANDA_CODEPATH . '/blank-web',
    PANDA_CODEPATH . '/system'
);

$G_CONFIG_DIR = array(
    PANDA_CODEPATH . '/system/config',
    PANDA_CODEPATH . '/blank-web/config',
    PANDA_CODEPATH . '/config/blank-web'
);

$G_PAGE_DIR = array(
    PANDA_PAGEPATH . '/system'
);

include PANDA_CODEPATH . '/system/bin.php';
bin();