<?php

/**
 * web站点线下环境函数
 */

/**
 * 获取基础域名
 *
 * @param array $p_aLoaderParams            
 * @param int $p_iParamsLength            
 * @return string
 */
function getBaseDomain($p_aLoaderParams, $p_iParamsLength)
{
    $sBranchName = getCodeVer($p_aLoaderParams, $p_iParamsLength, 4);
    return $sBranchName . '.' . PANDA_ENV_NAME . '.' . $p_aLoaderParams[$p_iParamsLength - 2] . '.' . $p_aLoaderParams[$p_iParamsLength - 1];
}