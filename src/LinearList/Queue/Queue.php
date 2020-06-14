<?php

namespace DataStructure\LinearTable\Queue;

class Queue{

    /*
    * 队尾入队
    * Return：处理之后队列的元素个数
    */
    public function tailEnquque($arr,$val){
        return array_push($arr,$val);
    }
    /*
     * 队尾出队
     * Return：最后一个值，如果数组为空或不是数组，返回NULL
     * Comment：仅用于双向队列
     */
    public function tailDequeue($arr){
        return array_pop($arr);
    }
    /*
     * 队首入队
     * Return：处理之后队列的元素个数
     * Comment：仅用于双向队列
     */
//    public function headEnqueue($arr,$val){
//        return array_unshift($arr, $var);
//    }
    /*
     * 队首出队
     * Return：移出的值，如果参数不是数组或数组为空，返回NULL
     */
    public function headDequeue(){
        return array_shift($arr);
    }

    /*
     * 队列长度
     * Return：返回队列的长度（元素个数）
     */
    public function queueLength($arr) {
        return count($arr);
    }

    /*
     * 获取队首元素
     * Return：第一个元素的值，如果队列为空则返回FALSE
     */
    public function queueHead($arr) {
        return reset($arr);
    }

    /*
     * 获取队尾元素
     * Return：最后一个元素的值，如果队列为空则返回FALSE
     */
    public function queueTail($arr) {
        return end($arr);
    }

    /*
     * 清空队列
     * Return：无返回值
     */
    public function clearQueue($arr) {
        unset($arr);
    }

}