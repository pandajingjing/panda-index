<?php
$sFromBaseDir = $_SERVER['argv'][1]; // 静态文件原始目录,外部传入
$sHashMapDir = '/data/app/page-release/' . $_SERVER['argv'][3] . '/' . $_SERVER['argv'][2] . '/resmap'; // 哈希映射文件存储目录
$sToBaseDir = $_SERVER['argv'][4];
// 静态文件存放目录

// $sFromBaseDir = '/root/panda-envshell/temp/static';
// $sHashMapDir = '/data/app/page-release/20180108114732/www_web/resmap';
// $sToBaseDir = '/data/app/static-release';
function makeMap($p_sFromPath, $p_sFromBaseDir, $p_sToBaseDir, $p_sHashMapDir)
{
    if (is_dir($p_sFromPath)) {
        $aTmp = scandir($p_sFromPath);
    } else {
        return false;
    }
    foreach ($aTmp as $sPath) {
        if ('.' == $sPath or '..' == $sPath or '.gitignore' == $sPath or 'README.md' == $sPath) {
            continue;
        }
        $sFromPath = $p_sFromPath . DIRECTORY_SEPARATOR . $sPath;
        if (is_dir($sFromPath)) {
            makeMap($sFromPath, $p_sFromBaseDir, $p_sToBaseDir, $p_sHashMapDir);
        } elseif (is_file($sFromPath)) {
            // echo $sFromPath, PHP_EOL;
            $sHash = sha1_file($sFromPath); // 计算文件名
            $sExt = strrchr($sFromPath, '.'); // 后缀名
            $sToSubDir = getSubDir($sHash); // 根据hash计算子目录
            $sToDir = $p_sToBaseDir . $sToSubDir; // copy文件的目录
            if (! is_dir($sToDir)) {
                mkdir($sToDir, 0775, true);
            }
            $sToPath = $sToDir . DIRECTORY_SEPARATOR . $sHash . $sExt; // copy文件的路径
                                                                       // echo $sToPath, PHP_EOL;
            copy($sFromPath, $sToPath);
            // echo $sFromPath, PHP_EOL, $p_sFromBaseDir, PHP_EOL;
            $sHashMapSubPath = substr($sFromPath, strlen($p_sFromBaseDir));
            $sHashMapPath = $p_sHashMapDir . $sHashMapSubPath;
            // echo $sHashMapPath, PHP_EOL;
            $sHashMapSubPath = dirname($sHashMapPath);
            if (! is_dir($sHashMapSubPath)) {
                mkdir($sHashMapSubPath, 0775, true);
            }
            $sContent = $sToSubDir . DIRECTORY_SEPARATOR . $sHash . $sExt;
            echo $sHashMapPath, PHP_EOL;
            echo $sContent, PHP_EOL;
            file_put_contents($sHashMapPath, $sContent);
        } elseif (is_link($sFromPath)) {
            throw new Exception($sFromPath . ' is symbol.');
        } else {
            throw new Exception($sFromPath . ' is unknown type.');
        }
    }
}

function getSubDir($p_sHash)
{
    return DIRECTORY_SEPARATOR . substr($p_sHash, 0, 5) . DIRECTORY_SEPARATOR . substr($p_sHash, 5, 5) . DIRECTORY_SEPARATOR . substr($p_sHash, 10, 5) . DIRECTORY_SEPARATOR . substr($p_sHash, 15, 5) . DIRECTORY_SEPARATOR . substr($p_sHash, 20, 5) . DIRECTORY_SEPARATOR . substr($p_sHash, 25, 5) . DIRECTORY_SEPARATOR . substr($p_sHash, 30, 5);
}

makeMap($sFromBaseDir, $sFromBaseDir, $sToBaseDir, $sHashMapDir);