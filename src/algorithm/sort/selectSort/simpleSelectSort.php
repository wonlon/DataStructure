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
 * @time     2020-03-10 23:09
 */

namespace DataStructure\algorithm\sort\selectSort;


/**
 * Class [selectSort]
 * 1.请描述类的功能
 * 2.请描述类的依赖
 * 3.请描述已知缺陷
 * 4.修改历史:
 *   修改人 + 日期 + 简单说明
 *
 * @category VNNOX-PHP
 * @package  DataStructure\algorithm
 * @author   wanglong <wanglong@novastar.tech>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/ (如果类中有相关引用,请修改此联系,如果有多个引用则添加多个`@link`)
 */
class simpleSelectSort
{
    private $newArray = [];
    private $arraylist = [];
    public $min;
    public $tmp;

    /**
     * selectSort constructor.
     *
     * @param array $arraylist
     */
    public function __construct(array $arraylist)
    {
        $this->arraylist = $arraylist;
    }

    /**
     * Function:sort
     * 选择排序-时间复杂度也是n^2,但是比冒泡的效率好
     *
     * 1、取出数组的第一个值和后面的值进行对比
     * 2、如果比第一个值小，交换位置到第一个，这样第一轮循环第一个位置最小值
     * 3、在用数组的第二个值和第二个值之后的值进行对比，如果比第二个值小，替换第二个位置，这样第二个位置就是最小的值
     * 4、以此循环，最终得到了从小到大的排序
     *
     *
     * @return void
     */
    public function sort(){
        for ($i = 0;$i<count($this->arraylist);$i++){
            $this->min = $this->arraylist[$i];
            for ($j=$i;$j<count($this->arraylist); $j++){
                if($this->arraylist[$j]<$this->min){
                    $this->min = $this->arraylist[$j];
                    $this->tmp = $this->arraylist[$i];
                    $this->arraylist[$i] = $this->min;
                    $this->arraylist[$j] = $this->tmp;
                }
            }
        }
        foreach ($this->arraylist as $item){
            echo "选择排序结果:".$item.PHP_EOL;
        }
    }
}