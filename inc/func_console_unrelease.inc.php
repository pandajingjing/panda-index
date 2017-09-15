<?php
namespace PandaIndex;

/**
 * 命令行线下环境通用函数
 */

/**
 * 获取代码版本
 *
 * @param array $p_aLoaderParams            
 * @param int $p_iParamsLength            
 * @param int $p_iPosition            
 * @return string
 */
function getCodeVer($p_aLoaderParams, $p_iParamsLength, $p_iPosition)
{
    $iPostion = $p_iParamsLength + $p_iPosition;
    if (isset($p_aLoaderParams[$iPostion])) {
        unset($_SERVER['argv'][$iPostion]);
        return $p_aLoaderParams[$iPostion];
    } else {
        echo 'You Miss Branch.', PHP_EOL;
        exit();
    }
}