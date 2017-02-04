<?php

/**
 * http站点通用函数
 */

/**
 * 获取加载器参数
 *
 * @return array
 */
function getLoaderParams()
{
    return explode('.', $_SERVER['HTTP_HOST']);
}

/**
 * 获取加载器名称
 *
 * 如果无法获取则跳转到www频道
 *
 * @param array $p_aLoaderParams            
 * @param int $p_iParamsLength            
 * @param int $p_iPosition            
 * @return string
 */
function getLoaderName($p_aLoaderParams, $p_iParamsLength, $p_iPosition)
{
    $iPosition = $p_iParamsLength - $p_iPosition;
    if (isset($p_aLoaderParams[$iPosition])) {
        return $p_aLoaderParams[$iPosition];
    } else {
        header('Location: http://www.' . getBaseDomain($p_aLoaderParams, $p_iParamsLength), true, 302);
        exit();
    }
}

/**
 * 获取代码路径
 *
 * 如果路径不存在则返回404错误
 *
 * @param string $p_sCodeVer            
 * @return string
 */
function getCodePath($p_sCodeVer)
{
    $sCodePath = PANDA_BASEPATH . '/php_' . PANDA_ENV_NAME . '/' . $p_sCodeVer;
    if (is_dir($sCodePath)) {
        return $sCodePath;
    } else {
        header('HTTP/1.0 404 Not Found');
        header('Error-Tag:Code Path Not Found');
        exit();
    }
}

/**
 * 获取页面路径
 *
 * 如果路径不存在则返回404错误
 *
 * @param string $p_sPageVer            
 * @return string
 */
function getPagePath($p_sPageVer)
{
    $sPagePath = PANDA_BASEPATH . '/page_' . PANDA_ENV_NAME . '/' . $p_sPageVer;
    if (is_dir($sPagePath)) {
        return $sPagePath;
    } else {
        header('HTTP/1.0 404 Not Found');
        header('Error-Tag:Page Path Not Found');
        exit();
    }
}

/**
 * 获取加载器路径
 *
 * 如果加载器不存在则未发布环境前往www域名
 * 发布环境需要检查开放了对应的子域名解析为何开启
 *
 * @param array $p_aLoaderParams            
 * @param int $p_iParamsLength            
 * @return string
 */
function getLoaderPath($p_aLoaderParams, $p_iParamsLength)
{
    $sLoaderPath = PANDA_BASEPATH . '/index/loader/' . PANDA_LOADER . '_' . PANDA_REQUEST_TYPE . '.php';
    if (file_exists($sLoaderPath)) {
        return $sLoaderPath;
    } else {
        header('Location: http://www.' . getBaseDomain($p_aLoaderParams, $p_iParamsLength), true, 302);
        exit();
    }
}