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
 * @time     2020-03-11 21:37
 */

namespace DataStructure\algorithm\sort\insetSort;


/**
 * Class [binaryInsertSort]
 * 二分法排序
 *
 * @category VNNOX-PHP
 * @package  DataStructure\algorithm\sort\insetSort
 * @author   wanglong <wanglong@novastar.tech>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/ (如果类中有相关引用,请修改此联系,如果有多个引用则添加多个`@link`)
 */
class binaryInsertSort
{
    public $arr = [9,3,2,6,10,44,83,28,-1,1,0,36];
    public function sort(){
        echo "排序前:".PHP_EOL;
        echo json_encode($this->arr).PHP_EOL;
        for ($i = 0;$i<count($this->arr);$i++){
            //待插入到前面有序序
            $temp = $this->arr[$i];
            $left = 0;
            $right = $i-1;
            $mid = 0;
            while ($left <= $right){
                $mid = intval(($left+$right)/2);
                if($temp<$this->arr[$mid]){
                    $right = $mid-1;
                }
                else
                {
                    $left=$mid+1;
                }
            }
            for ($j = $i-1;$j>=$left;$j--){
                //比left右边大的值往后移动一位，等到temp的插入
                $this->arr[$j+1] = $this->arr[$j];
            }
            //插入的数据比当前的都大 $left == $i
            if($left!=$i){
                $this->arr[$left] = $temp;
            }
        }
        echo "排序后:".PHP_EOL;
        echo json_encode($this->arr).PHP_EOL;
    }
}