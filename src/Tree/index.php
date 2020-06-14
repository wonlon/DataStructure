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


$binaryTree = new \DataStructure\Tree\BinaryTree();
//$binaryTree->createBinaryTree();
//$treeHeight = $binaryTree->getHeight();
//$treeSize = $binaryTree->getSize();
//echo "树的高度:".$treeHeight.PHP_EOL;
//echo "树的节点数:".$treeSize.PHP_EOL;
//echo "前序遍历:".PHP_EOL;
//$binaryTree->preOrder($binaryTree->root);
//echo "前序遍历-栈:".PHP_EOL;
//$binaryTree->nonPreOrder($binaryTree->root);

//echo "中序遍历:".PHP_EOL;
//$binaryTree->midOrder($binaryTree->root);
//echo "后序遍历:".PHP_EOL;
//$binaryTree->postOrder($binaryTree->root);

$data = ["A","B","D","#","#","E","#","#","C","#","F","#","#",];
$binaryTree->createBinaryTreePre($data);

$treeHeight = $binaryTree->getHeight();
$treeSize = $binaryTree->getSize();
echo "树的高度:".$treeHeight.PHP_EOL;
echo "树的节点数:".$treeSize.PHP_EOL;
$binaryTree->preOrder($binaryTree->root);

