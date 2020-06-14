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
require __DIR__ . '/../../vendor/autoload.php';

$kruskal = new \DataStructure\Graph\GraphKruskal(15);
$kruskal->createEdgeArray();
$kruskal->miniSpanTreeKruskal();