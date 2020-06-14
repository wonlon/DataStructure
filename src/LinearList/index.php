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
 * @time     2020-03-06 15:02
 */

require __DIR__ . '/../../vendor/autoload.php';

$orderList = new \DataStructure\LinearList\OrderList();
//$orderList->add(1,"刘备");
//$orderList->add(2,"关羽");
//$orderList->add(3,"张飞");

for ($i = 0; $i < 20; $i++) {
    $orderList->addLast($i);
}

$data = $orderList->getData();
$size = $orderList->getSize();
echo json_encode(["data"=>$data,"size"=>$size]).PHP_EOL;


$orderList->addFirst("first");
$orderList->addLast("last");
$data = $orderList->getData();
$size = $orderList->getSize();
echo json_encode(["data"=>$data,"size"=>$size]).PHP_EOL;


$orderList->removeElement(15);
$data = $orderList->getData();
$size = $orderList->getSize();
echo json_encode(["data"=>$data,"size"=>$size]).PHP_EOL;
