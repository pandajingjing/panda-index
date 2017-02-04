<?php
/**
 * 运行环境根目录
 */
define('PANDA_BASEPATH', '/data/app');
include PANDA_BASEPATH . '/index/inc/func.inc.php';

define('PANDA_ENV_NAME', PANDA_ENV_DEV);
define('PANDA_REQUEST_TYPE', PANDA_REQTYPE_CONSOLE);

include PANDA_BASEPATH . '/index/inc/func_' . PANDA_REQUEST_TYPE . '_' . PANDA_ENV_NAME . '.inc.php';

$aLoaderParams = getLoaderParams();

define('PANDA_LOADER', getLoaderName($aLoaderParams));
define('PANDA_CODEPATH', getCodePath(getCodeVer($aLoaderParams)));
define('PANDA_BASECMD', getBaseCmd());
include getLoaderPath($aLoaderParams);
exit();