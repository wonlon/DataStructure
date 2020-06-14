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

$graph = new \DataStructure\Graph\Graph(9);
$a1 = [0,10,$graph->MAX_WEIGHT,$graph->MAX_WEIGHT,$graph->MAX_WEIGHT,11,$graph->MAX_WEIGHT,$graph->MAX_WEIGHT,$graph->MAX_WEIGHT];
$a2 = [10,0,18,$graph->MAX_WEIGHT,$graph->MAX_WEIGHT,$graph->MAX_WEIGHT,16,$graph->MAX_WEIGHT,12];
$a3 = [$graph->MAX_WEIGHT,$graph->MAX_WEIGHT,0,22,$graph->MAX_WEIGHT,$graph->MAX_WEIGHT,$graph->MAX_WEIGHT,$graph->MAX_WEIGHT,8];
$a4 = [$graph->MAX_WEIGHT,$graph->MAX_WEIGHT,22,0,20,$graph->MAX_WEIGHT,24,16,21];
$a5 = [$graph->MAX_WEIGHT,$graph->MAX_WEIGHT,$graph->MAX_WEIGHT,20,0,26,$graph->MAX_WEIGHT,7,$graph->MAX_WEIGHT];
$a6 = [11,$graph->MAX_WEIGHT,$graph->MAX_WEIGHT,$graph->MAX_WEIGHT,26,0,17,$graph->MAX_WEIGHT,$graph->MAX_WEIGHT];
$a7 = [$graph->MAX_WEIGHT,16,$graph->MAX_WEIGHT,$graph->MAX_WEIGHT,$graph->MAX_WEIGHT,17,0,19,$graph->MAX_WEIGHT];
$a8 = [$graph->MAX_WEIGHT,$graph->MAX_WEIGHT,$graph->MAX_WEIGHT,16,7,$graph->MAX_WEIGHT,19,0,$graph->MAX_WEIGHT];
$a9 = [$graph->MAX_WEIGHT,12,8,21,$graph->MAX_WEIGHT,$graph->MAX_WEIGHT,$graph->MAX_WEIGHT,$graph->MAX_WEIGHT,0];

$graph->matrix[0] = $a1;
$graph->matrix[1] = $a2;
$graph->matrix[2] = $a3;
$graph->matrix[3] = $a4;
$graph->matrix[4] = $a5;
$graph->matrix[5] = $a6;
$graph->matrix[6] = $a7;
$graph->matrix[7] = $a8;
$graph->matrix[8] = $a9;

//图的深度优先
//$graph->depthFirstSearch();
echo  "================".PHP_EOL;
//广度优先算法
//$graph->broadFirstSearch();
//普里姆算法
$graph->prim();
