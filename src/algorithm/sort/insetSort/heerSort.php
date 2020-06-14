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
 * @time     2020-03-11 23:20
 */

namespace DataStructure\algorithm\sort\insetSort;


/**
 * Class [heerSort]
 * 1.请描述类的功能
 * 2.请描述类的依赖
 * 3.请描述已知缺陷
 * 4.修改历史:
 *   修改人 + 日期 + 简单说明
 *
 * @category VNNOX-PHP
 * @package  DataStructure\algorithm\sort\insetSort
 * @author   wanglong <wanglong@novastar.tech>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/ (如果类中有相关引用,请修改此联系,如果有多个引用则添加多个`@link`)
 */
class heerSort
{
    public $arr = [9,3,2,6,10,44,83,28,-1,1,0,36];
    public function sort(){
        echo "排序前:".PHP_EOL;
        echo json_encode($this->arr).PHP_EOL;
        $d = intval(count($this->arr)/2);
        while (true){
            for ($i = 0;$i<$d;$i++){
                for ($j=$i;$j+$d<count($this->arr);$j+=$d){
                    if($this->arr[$j]>$this->arr[$j+$d]){
                        $tmp = $this->arr[$j];
                        $this->arr[$j] = $this->arr[$j+$d];
                        $this->arr[$j+$d] = $tmp;
                    }
                }
            }
            if($d==1){break;}
            $d--;
        }
        echo "排序后:".PHP_EOL;
        echo json_encode($this->arr).PHP_EOL;
    }
}