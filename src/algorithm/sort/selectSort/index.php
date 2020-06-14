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
 * @time     2020-03-06 23:24
 */
require __DIR__ . '/../../../../vendor/autoload.php';

$arraylist = [2,4,8,43,11,22,0,4,7,5,66];
//简单选择排序
//$selectSort = new \DataStructure\algorithm\sort\selectSort\simpleSelectSort($arraylist);
//$selectSort->sort();

$heapSort = new \DataStructure\algorithm\sort\selectSort\HeapSort();
$heapSort->sort();