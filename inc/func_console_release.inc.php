<?php
namespace PandaIndex;

/**
 * 命令行线上环境通用函数
 */
include PANDA_BASEPATH . '/index/inc/func_console.inc.php';

/**
 * 获取代码版本
 *
 * @param string $p_sBasePath            
 * @param string $p_sLoaderName            
 * @param string $p_sReqType            
 * @return string
 */
function getCodeVer($p_sBasePath, $p_sLoaderName, $p_sReqType)
{
    $sVersionFile = $p_sBasePath . '/version/console_' . $p_sLoaderName . '_' . $p_sReqType . '.ver';
    if (file_exists($sVersionFile)) {
        $sVersion = trim(file_get_contents($sVersionFile));
        if ('' == $sVersion) {
            echo 'Code Version Is Empty', PHP_EOL;
            exit();
        } else {
            return $sVersion;
        }
    } else {
        echo 'Code Version File Not Found', PHP_EOL;
        exit();
    }
}