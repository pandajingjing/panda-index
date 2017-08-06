<?php
namespace PandaIndex;

define('PANDA_BASEPATH', '/data/app');
include PANDA_BASEPATH . '/index/inc/func.inc.php';

define('PANDA_ENV_NAME', PANDA_ENV_TEST);
define('PANDA_REQUEST_TYPE', PANDA_REQTYPE_SERVICE);

include PANDA_BASEPATH . '/index/inc/func_' . PANDA_REQUEST_TYPE . '_' . PANDA_ENV_NAME . '.inc.php';

$aLoaderParams = getLoaderParams();
$iParamsLength = count($aLoaderParams);

define('PANDA_LOADER', getLoaderName($aLoaderParams, $iParamsLength, 6));
define('PANDA_CODE_VER', getCodeVer($aLoaderParams, $iParamsLength, 5));
define('PANDA_PAGE_VER', getPageVer($aLoaderParams, $iParamsLength, 5));
define('PANDA_CODEPATH', getCodePath(PANDA_CODE_VER));
define('PANDA_PAGEPATH', getPagePath(PANDA_PAGE_VER));
define('PANDA_BASEDOMAIN', getBaseDomain($aLoaderParams, $iParamsLength));
include getLoaderPath($aLoaderParams, $iParamsLength);
exit();