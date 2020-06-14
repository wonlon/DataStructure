<?php

namespace DataStructure\Tree;

/**
 * 节点
 *
 * @category VNNOX-PHP
 * @package  DataStructure\Tree
 * @author   wanglong <wanglong@novastar.tech>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/ (如果类中有相关引用,请修改此联系,如果有多个引用则添加多个`@link`)
 */
class TreeNode
{
    /**
     * @var int 下标
     */
    private $index;
    /**
     * @var string 节点数据
     */
    private $data;
    /**
     * @var TreeNode 左节点
     */
    public $leftChild;
    /**
     * @var TreeNode 右节点
     */
    public $rightChild;
    /**
     * @var TreeNode 父节点
     */
    public $parent;

    /**
     * TreeNode constructor.
     *
     * @param int  $index
     * @param string $data
     */
    public function __construct($index, $data)
    {
        $this->index = $index;
        $this->data = $data;
        $this->leftChild = null;
        $this->rightChild = null;
    }

    /**
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @param int $index
     */
    public function setIndex($index)
    {
        $this->index = $index;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param string $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return TreeNode
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param TreeNode $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }


}