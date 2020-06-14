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
 * @time     2020-03-11 21:06
 */

namespace DataStructure\algorithm\sort\insetSort;


/**
 * Class [directInsertSort]
 * 直接插入排序
 *  a、直接遍历a和b,对a和b进行排序，小的放在前面
 *  b、再去遍历c，大于c的往后移动一个位置
 *  c、再去遍历下一个，与前面的比较大的往后移
 *  d、最终就得到一个排好序的数组
 *
 */
class directInsertSort
{
    public $arr = [9,3,2,6,10,44,83,28,-1,1,0,36];
    public function sort(){
        echo "排序前:".PHP_EOL;
        echo json_encode($this->arr).PHP_EOL;
        for ($i = 0;$i<count($this->arr);$i++){
            //新遍历的值，等待插入到前面的有序数组
            $temp = $this->arr[$i];
            for($j = $i-1;$j>=0;$j--){
                //将大于temp的数，往后移一步
                if($this->arr[$j] >$temp){
                   $this->arr[$j+1] = $this->arr[$j];
                }
                else
                {
                    break;
                }
            }
            $this->arr[$j+1] = $temp;
        }
        echo "排序后:".PHP_EOL;
        echo json_encode($this->arr).PHP_EOL;
    }
}