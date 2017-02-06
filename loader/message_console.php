<?php
$G_PHP_DIR = array(
    PANDA_CODEPATH . '/message-console',
    PANDA_CODEPATH . '/system'
);

$G_CONFIG_DIR = array(
    PANDA_CODEPATH . '/system/config',
    PANDA_CODEPATH . '/message-console/config',
    PANDA_CODEPATH . '/config/message-console'
);

include PANDA_CODEPATH . '/system/bin.php';
bin(false);