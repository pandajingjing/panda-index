<?php
namespace PandaIndex;

$G_APP_DIR = array(
    'app\\' => PANDA_CODEPATH . '/duorou_manage',
    'duorou_service\\' => PANDA_CODEPATH . '/duorou_service',
    'member_service\\' => PANDA_CODEPATH . '/member_service',
    'panda\\' => PANDA_CODEPATH . '/system'
);

$G_CONFIG_DIR = array(
    PANDA_CODEPATH . '/system/config',
    PANDA_CODEPATH . '/member_service/config',
    PANDA_CODEPATH . '/duorou_service/config',
    PANDA_CODEPATH . '/duorou_manage/config',
    PANDA_CODEPATH . '/config/member_service',
    PANDA_CODEPATH . '/config/duorou_service',
    PANDA_CODEPATH . '/config/duorou_manage'
);

$G_PAGE_DIR = array(
    PANDA_PAGEPATH . '/duorou_manage',
    PANDA_PAGEPATH . '/system'
);

include PANDA_CODEPATH . '/system/bin.php';
bin();