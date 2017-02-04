<?php
/**
 * 运行环境根目录
 */
define('PANDA_BASEPATH', '/data/app');
include PANDA_BASEPATH . '/index/inc/func.inc.php';

define('PANDA_ENV_NAME', PANDA_ENV_TEST);
define('PANDA_REQUEST_TYPE', PANDA_REQTYPE_MOBILE);

include PANDA_BASEPATH . '/index/inc/func_' . PANDA_REQUEST_TYPE . '_' . PANDA_ENV_NAME . '.inc.php';

$aLoaderParams = getLoaderParams();
$iParamsLength = count($aLoaderParams);

define('PANDA_LOADER', getLoaderName($aLoaderParams, $iParamsLength, 6));
define('PANDA_CODEPATH', getCodePath(getCodeVer($aLoaderParams, $iParamsLength, 5)));
define('PANDA_PAGEPATH', getPagePath(getPageVer($aLoaderParams, $iParamsLength, 5)));
define('PANDA_BASEDOMAIN', getBaseDomain($aLoaderParams, $iParamsLength));
include getLoaderPath($aLoaderParams, $iParamsLength);
exit();