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
 * @time     2020-03-06 11:51
 */

namespace DataStructure\LinearLists\Stack;


/**
 * Class [OrderStack]
 * 1.请描述类的功能
 * 2.请描述类的依赖
 * 3.请描述已知缺陷
 * 4.修改历史:
 *   修改人 + 日期 + 简单说明
 *
 * @category VNNOX-PHP
 * @package  DataStructure\LinearTable\Stack
 * @author   wanglong <wanglong@novastar.tech>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/ (如果类中有相关引用,请修改此联系,如果有多个引用则添加多个`@link`)
 */
class OrderStack
{
    //用默认值直接初始化栈了，也可用构造方法初始化栈
    private $top = -1;
    private $maxSize = 3;
    private $stack = array();

    //入栈
    public function push($elem){
        if($this->top >= $this->maxSize-1){
            echo "栈已满！<br/>";
            return;
        }
        $this->top++;
        $this->stack[$this->top] = $elem;
    }
    //出栈
    public function pop(){
        if($this->top == -1){
            echo "栈是空的！";
            return ;
        }
        $elem = $this->stack[$this->top];
        unset($this->stack[$this->top]);
        $this->top--;
        return $elem;
    }
    //打印栈
    public function show(){
        for($i=$this->top;$i>=0;$i--){
            echo $this->stack[$i]." ";
        }
        echo "<br/>";
    }
}