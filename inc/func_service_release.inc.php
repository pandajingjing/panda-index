<?php
/**
 * service站点线上环境函数
 */
include PANDA_BASEPATH . '/index/inc/func_http.inc.php';
include PANDA_BASEPATH . '/index/inc/func_http_release.inc.php';

/**
 * 获取基础域名
 *
 * @param array $p_aLoaderParams            
 * @param int $p_iParamsLength            
 * @return string
 */
function getBaseDomain($p_aLoaderParams, $p_iParamsLength)
{
    return 's.' . $p_aLoaderParams[$p_iParamsLength - 2] . '.' . $p_aLoaderParams[$p_iParamsLength - 1];
}