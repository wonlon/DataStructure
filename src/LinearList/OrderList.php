<?php
/**
 * 线性表-顺序存储
 */
namespace DataStructure\LinearList;


/**
 * Class [OrderList]
 * 1.请描述类的功能
 * 2.请描述类的依赖
 * 3.请描述已知缺陷
 * 4.修改历史:
 *   修改人 + 日期 + 简单说明
 *
 * @category VNNOX-PHP
 * @package  DataStructure\LinearList
 * @author   wanglong <wanglong@novastar.tech>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/ (如果类中有相关引用,请修改此联系,如果有多个引用则添加多个`@link`)
 */
class OrderList
{
    /**
     * @var 数据
     */
    private $data = [];
    /**
     * @var 下标
     */
    private $size = 0;

    /**
     * Function:add
     * 增加数据
     *  1、数组的值从后向前，都往后挪一个位置
     *  2、挪到index时用e替换里面的内容即可
     * @param $index
     * @param $e
     *
     * @return void
     */
    public function add($index, $e)
    {
        if ($index >= 0 && $index <= $this->size) {
            for ($i = $this->size -1;$i>=$index; --$i){
                $this->data[$i+1] = $this->data[$i];
            }
            $this->data[$index] = $e;
            $this->size++;
        } else {
            echo "AddLast failed. index<0 || index>size ";
        }
    }

    /**
     * Function:addFirst
     * 头部插入
     *
     * @param $e
     *
     * @return void
     */
    public function addFirst($e){
        $this->add(0,$e);
    }

    /**
     * Function:addLast
     * 尾部插入
     *
     * @param $e
     *
     * @return void
     */
    public function addLast($e){
        $this->add($this->size,$e);
    }

    /**
     * Function:remmove
     * 移除
     *
     * 1、将数组从传入索引的下一个索引，统统往前移动一个位置
     *
     * @param $index
     *
     * @return mixed
     */
    public function remove($index)
    {

//        if($this->size == count($this->data))
//        {
//            die("AddLast failed. Array is full");
//        }
        if($index<0 || $index>$this->size)
        {
            die("AddLast failed. index<0 || index>size");
        }

        $res = $this->data[$index];
        for( $i = $index; $i <= $this->size; ++$i) {
            $this->data[$i] = $this->data[$i+1];
        }
        $this->size--;
        return $res;

    }

    /**
     * Function:remowFirst
     * 移除第一个元素
     *
     * @return mixed
     */
    public function removeFirst()
    {
        return $this->remove(0);
    }

    /**
     * Function:removeLast
     * 移除最后一个元素
     *
     * @return mixed
     */
    public function removeLast()
    {
        return $this->remove($this->size - 1);
    }

    /**
     * Function:remowElement
     * 移动除掉某一个元素
     *
     * @param $e
     *
     * @return void
     */
    public function removeElement($e)
    {
        $index = $this->find($e);
        if($index != -1)
        {
            $this->remove($index);
        }
    }
    /**
     * Function:isEmpty
     * 是否为空
     *
     * @return bool
     */
    public function isEmpty()
    {
        return $this->size == 0;
    }

    /**
     * Function:get
     * 通过index获取数据
     *
     * @param $index
     *
     * @return mixed
     */
    public function get($index){
        if ($index >= 0 && $index < $this->size) {
            return $this->data[$index];
        } else {
            die("AddLast failed. index is illagal ");
        }
    }

    /**
     * Function:contains
     * 是否包含某一个元素，如果包含返回key
     *
     * @param $e
     *
     * @return bool
     */
    public function contains($e){
       for ($i = 0 ;$i < $this->size;$i++){
           if($this->data[$i] == $e)
           {
               return true;
           }
       }
       return false;
    }

    /**
     * Function:find
     * 查看某个元素是否包含在线性表中，如果存在，返回index
     *
     * @param $e
     *
     * @return int
     */
    public function find($e){
        for ($i = 0 ;$i < $this->size;$i++){
            if($this->data[$i] == $e)
            {
                return $i;
            }
        }
        return -1;
    }

    /**
     * Function:getData
     * 获取数据
     *
     *
     * @return 数据
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Function:getSize
     * 获取线性表的指针
     *
     *
     * @return 下标
     */
    public function getSize()
    {
        return $this->size;
    }
}