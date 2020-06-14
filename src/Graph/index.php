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


$graph = new \DataStructure\Graph\Graph(5);
$a1 = [0,$graph->MAX_WEIGHT,$graph->MAX_WEIGHT,$graph->MAX_WEIGHT,6];
$a2 = [9,0,3,$graph->MAX_WEIGHT,$graph->MAX_WEIGHT];
$a3 = [2,$graph->MAX_WEIGHT,0,5,$graph->MAX_WEIGHT];
$a4 = [$graph->MAX_WEIGHT,$graph->MAX_WEIGHT,$graph->MAX_WEIGHT,0,1];
$a5 = [$graph->MAX_WEIGHT,$graph->MAX_WEIGHT,$graph->MAX_WEIGHT,$graph->MAX_WEIGHT,0];
$graph->matrix[0] = $a1;
$graph->matrix[1] = $a2;
$graph->matrix[2] = $a3;
$graph->matrix[3] = $a4;
$graph->matrix[4] = $a5;

$degree = $graph->getOutDegree(4);
echo "V0的出度：".$degree.PHP_EOL;
$weight = $graph->getWeight(0,4);
echo "V0-V4的权值：".$weight.PHP_EOL;
$degree = $graph->getInDegree(4);
echo "V0的入度：".$degree.PHP_EOL;