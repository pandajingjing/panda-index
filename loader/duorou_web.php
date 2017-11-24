<?php
namespace PandaIndex;

$G_APP_DIR = array(
    'app\\' => PANDA_CODEPATH . '/duorou_web',
    'duorou_service\\' => PANDA_CODEPATH . '/duorou_service',
    'panda\\' => PANDA_CODEPATH . '/system'
);

$G_CONFIG_DIR = array(
    PANDA_CODEPATH . '/system/config',
    PANDA_CODEPATH . '/duorou_service/config',
    PANDA_CODEPATH . '/duorou_web/config',
    PANDA_CODEPATH . '/config/duorou_service',
    PANDA_CODEPATH . '/config/duorou_web'
);

$G_PAGE_DIR = array(
    PANDA_PAGEPATH . '/duorou_web',
    PANDA_PAGEPATH . '/system'
);

include PANDA_CODEPATH . '/system/bin.php';
bin();