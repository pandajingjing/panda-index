<?php
namespace PandaIndex;

/**
 * http站点线上环境通用函数
 */

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
    $sVersionFile = $p_sBasePath . '/version/code_' . $p_sLoaderName . '_' . $p_sReqType . '.ver';
    if (file_exists($sVersionFile)) {
        $sVersion = trim(file_get_contents($sVersionFile));
        if ('' == $sVersion) {
            header('HTTP/1.0 404 Not Found');
            header('Error-Tag:Code Version Is Empty');
            exit();
        } else {
            return $sVersion;
        }
    } else {
        header('HTTP/1.0 404 Not Found');
        header('Error-Tag:Code Version File Not Found');
        exit();
    }
}

/**
 * 获取页面版本
 *
 * @param string $p_sBasePath            
 * @param string $p_sLoaderName            
 * @param string $p_sReqType            
 * @return string
 */
function getPageVer($p_sBasePath, $p_sLoaderName, $p_sReqType)
{
    $sVersionFile = $p_sBasePath . '/version/page_' . $p_sLoaderName . '_' . $p_sReqType . '.ver';
    if (file_exists($sVersionFile)) {
        $sVersion = trim(file_get_contents($sVersionFile));
        if ('' == $sVersion) {
            header('HTTP/1.0 404 Not Found');
            header('Error-Tag:Page Version Is Empty');
            exit();
        } else {
            return $sVersion;
        }
    } else {
        header('HTTP/1.0 404 Not Found');
        header('Error-Tag:Page Version File Not Found');
        exit();
    }
}