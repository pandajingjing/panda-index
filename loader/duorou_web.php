<?php
namespace PandaIndex;

$G_APP_DIR = array(
    'app\\' => PANDA_CODEPATH . '/duorou-web',
    'duorou-service\\' => PANDA_CODEPATH . '/duorou-service',
    'panda\\' => PANDA_CODEPATH . '/system'
);

$G_CONFIG_DIR = array(
    PANDA_CODEPATH . '/system/config',
    PANDA_CODEPATH . '/duorou-service/config',
    PANDA_CODEPATH . '/duorou-web/config',
    PANDA_CODEPATH . '/config/duorou-service',
    PANDA_CODEPATH . '/config/duorou-web'
);

$G_PAGE_DIR = array(
    PANDA_PAGEPATH . '/duorou-web',
    PANDA_PAGEPATH . '/system'
);

include PANDA_CODEPATH . '/system/bin.php';
bin();