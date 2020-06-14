<?php
/**
 * 请完善PHP文件备注
 * PHP VERSION 7
 *
 * @category VNNOX-PHP
 * @package  NovaStar\Vnnox
 * @author   wanglong <wanglong@novastar.tech>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/
 * @time     2020-03-11 21:22
 */
require __DIR__ . '/../../../../vendor/autoload.php';

//直接插入排序
//$directInsertSort = new \DataStructure\algorithm\sort\insetSort\directInsertSort();
//$directInsertSort->sort();

//二分插入排序
//$binaryInsertSort = new \DataStructure\algorithm\sort\insetSort\binaryInsertSort();
//$binaryInsertSort->sort();

//希尔排序
$heerSort = new \DataStructure\algorithm\sort\insetSort\heerSort();
$heerSort->sort();