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
 * @time     2020-03-12 21:07
 */

namespace DataStructure\algorithm\sort\selectSort;


/**
 * Class [HeapSort]
 * 堆排序
 *
 * @category VNNOX-PHP
 * @package  DataStructure\algorithm\sort\selectSort
 * @author   wanglong <wanglong@novastar.tech>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/ (如果类中有相关引用,请修改此联系,如果有多个引用则添加多个`@link`)
 */
class HeapSort
{
    public $arr = [9,3,2,6,10,44,83,28,-1,1,0,36];

    public function sort(){
        echo "排序前:".PHP_EOL;
        echo json_encode($this->arr).PHP_EOL;
        //创建大堆
        $this->_buildMaxHeap();
        for ($i = count($this->arr) - 1;$i>=1;$i--){
            //最大元素已经排在了下标为0的地方
            $this->_exchangeElements(0,$i);//每交换一次，就沉淀一个大元素
            $this->_maxHeap($i,0);
        }
        echo "排序后:".PHP_EOL;
        echo json_encode($this->arr).PHP_EOL;
    }

    /**
     * Function:_buildMaxHeap
     * 构建大堆
     *
     * @return void
     */
    private function _buildMaxHeap(){
        //假设长度为9
        $half = intval((count($this->arr) -1)/2);
        for ($i = $half;$i>=0;$i--){
            $this->_maxHeap(count($this->arr),$i);
        }
    }

    /**
     * Function:_maxHeap
     * 1.请描述方法的功能
     * 2.其他信息
     *
     * @param int $lenght 表示用于构造大堆的数组长度元素数量
     * @param $i 从哪个位置开始
     *
     * @return void
     */
    private function _maxHeap($lenght,$i){
        $left = $i*2+1;
        $right = $i*2+2;
        $largest = $i;
        if($left<$lenght&&$this->arr[$left]>$this->arr[$i]){
            $largest = $left;
        }
        if($left<$lenght&&$this->arr[$right]>$this->arr[$largest]){
            $largest = $right;
        }
        if($i!=$largest){
            //进行数据交换
            $this->_exchangeElements($i,$largest);
            //继续构造大堆
            $this->_maxHeap($lenght,$largest);
        }

    }
    //在数组a，进行两个下标元素交换
    private function _exchangeElements($i, $largest){
        $temp = $this->arr[$i];
        $this->arr[$i] = $this->arr[$largest];
        $this->arr[$largest] = $temp;
    }

}