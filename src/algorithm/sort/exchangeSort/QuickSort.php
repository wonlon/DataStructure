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
 * @time     2020-03-12 21:42
 */

namespace DataStructure\algorithm\sort\exchangeSort;


/**
 * Class [QuickSort]
 * 快速排序
 *
 * @category VNNOX-PHP
 * @package  DataStructure\algorithm\sort\exchangeSort
 * @author   wanglong <wanglong@novastar.tech>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/ (如果类中有相关引用,请修改此联系,如果有多个引用则添加多个`@link`)
 */
class QuickSort
{
    public $arr = [9,3,2,6,10,44,83,28,-1,1,0,36];
    public function sort(){
        echo "排序前:".PHP_EOL;
        echo json_encode($this->arr).PHP_EOL;
        if(count($this->arr)>0){
            $this->_quickSort($this->arr,0,count($this->arr)-1);
        }
        echo "排序后:".PHP_EOL;
        echo json_encode($this->arr).PHP_EOL;
    }
    private function _quickSort($low,$high){
        if($low<$high){
            $middle = $this->_getMiddle($this->arr,$low,$high);
            $this->_quickSort($this->arr,0,$middle-1);
            $this->_quickSort($this->arr,$middle+1,$high);
        }
    }

    /**
     * Function:_getMiddle
     * 获取中间下标
     *
     * @param $low
     * @param $high
     *
     * @return void
     */
    private function _getMiddle($low,$high){
        $tmp = $this->arr[$low];//基准元素
        while ($low<$high){
            while ($low<$high&&$this->arr[$high]>=$tmp){
                $high--;
            }
            $this->arr[$low] = $this->arr[$high];
            while ($low<$high&&$this->arr[$low]<=$tmp){
                $low++;
            }
            $this->arr[$high] = $this->arr[$low];
        }
        echo $low."==>".$tmp.PHP_EOL;
        $this->arr[$low] = $tmp; //插入到排序后正确的位置
        return $low;
    }
}