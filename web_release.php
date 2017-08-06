<?php
namespace PandaIndex;

define('PANDA_BASEPATH', '/data/app');
include PANDA_BASEPATH . '/index/inc/func.inc.php';

define('PANDA_ENV_NAME', PANDA_ENV_RELEASE);
define('PANDA_REQUEST_TYPE', PANDA_REQTYPE_WEB);

include PANDA_BASEPATH . '/index/inc/func_' . PANDA_REQUEST_TYPE . '_' . PANDA_ENV_NAME . '.inc.php';

$aLoaderParams = getLoaderParams();
$iParamsLength = count($aLoaderParams);

define('PANDA_LOADER', getLoaderName($aLoaderParams, $iParamsLength, 3));
define('PANDA_CODE_VER', getCodeVer());
define('PANDA_PAGE_VER', getPageVer());
define('PANDA_CODEPATH', getCodePath(PANDA_CODE_VER));
define('PANDA_PAGEPATH', getPagePath(PANDA_PAGE_VER));
define('PANDA_BASEDOMAIN', getBaseDomain($aLoaderParams, $iParamsLength));
include getLoaderPath($aLoaderParams, $iParamsLength);
exit();