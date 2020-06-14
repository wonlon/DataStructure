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
$searchBinaryTree = new \DataStructure\Tree\SearchBinaryTree();
$items = [50,30,20,44,88,33,87,16,7,77,77];
foreach ($items as $item)
{
    $searchBinaryTree->put($item);
}

$searchBinaryTree->midOrder($searchBinaryTree->root);
$searchBinaryTree->deleteNode(44);
echo "==================".PHP_EOL;
$searchBinaryTree->midOrder($searchBinaryTree->root);
