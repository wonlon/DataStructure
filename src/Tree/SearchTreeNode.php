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
 * @time     2020-03-07 21:52
 */

namespace DataStructure\Tree;


/**
 * Class [SearchTreeNode]
 * 1.请描述类的功能
 * 2.请描述类的依赖
 * 3.请描述已知缺陷
 * 4.修改历史:
 *   修改人 + 日期 + 简单说明
 *
 * @category VNNOX-PHP
 * @package  DataStructure\Tree
 * @author   wanglong <wanglong@novastar.tech>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/ (如果类中有相关引用,请修改此联系,如果有多个引用则添加多个`@link`)
 */
class SearchTreeNode
{
    /**
     * @var int 下标
     */
    private $index;
    /**
     * @var int 节点数据
     */
    public $data;
    /**
     * @var SearchTreeNode 左节点
     */
    public $leftChild;
    /**
     * @var SearchTreeNode 右节点
     */
    public $rightChild;
    /**
     * @var SearchTreeNode 父节点
     */
    public $parent;

    /**
     * SearchTreeNode constructor.
     *
     * @param int $index
     * @param int $data
     */
    public function __construct($index, $data)
    {
        $this->index = $index;
        $this->data = $data;
        $this->leftChild = null;
        $this->rightChild = null;
        $this->parent = null;
    }

    /**
     * @return int
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param int $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return SearchTreeNode
     */
    public function getLeftChild()
    {
        return $this->leftChild;
    }

    /**
     * @param SearchTreeNode $leftChild
     */
    public function setLeftChild($leftChild)
    {
        $this->leftChild = $leftChild;
    }

    /**
     * @return SearchTreeNode
     */
    public function getRightChild()
    {
        return $this->rightChild;
    }

    /**
     * @param SearchTreeNode $rightChild
     */
    public function setRightChild($rightChild)
    {
        $this->rightChild = $rightChild;
    }

    /**
     * @return SearchTreeNode
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param SearchTreeNode $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }



}