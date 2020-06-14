<?php

namespace DataStructure\Tree;

/**
 * 二叉树
 *
 * @category VNNOX-PHP
 * @package  DataStructure\Tree
 * @author   wanglong <wanglong@novastar.tech>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/ (如果类中有相关引用,请修改此链接,如果有多个引用则添加多个`@link`)
 */
class BinaryTree
{
    /**
     * @var TreeNode 根节点
     */
    public $root;

    /**
     * BinaryTree constructor.
     */
    public function __construct()
    {
        $this->root = new TreeNode(1,'A');
    }

    /**
     * Function:createBinaryTree
     * 构建二叉树
     *      A
     *   B     C
     * D    E     F
     *
     * @return void
     */
    public function createBinaryTree(){
        $nodeB = new TreeNode(2,'B');
        $nodeC = new TreeNode(3,'C');
        $nodeD = new TreeNode(4,'D');
        $nodeE = new TreeNode(5,'E');
        $nodeF = new TreeNode(6,'F');

        $this->root->leftChild = $nodeB;
        $this->root->rightChild = $nodeC;
        $nodeB->leftChild = $nodeD;
        $nodeB->rightChild = $nodeE;
        $nodeC->rightChild = $nodeF;
    }

    /**
     * Function:getHeight
     * 获取树的高度
     *
     *
     * @return int
     */
    public function getHeight(){
        return $this->_getHeight($this->root);
    }

    /**
     * Function:getSize
     * 获取二叉树的节点数
     *
     *
     * @return void
     */
    public function getSize(){
        return $this->_getSize($this->root);
    }

    /**
     * Function:_getSize
     * 1.请描述方法的功能
     * 2.其他信息
     *
     * @param TreeNode $node
     *
     * @return int
     */
    private function _getSize($node){
        if($node == null)
        {
            return 0;
        }
        else
        {
            return 1+$this->_getSize($node->leftChild)+$this->_getSize($node->rightChild);
        }
    }
    /**
     * Function:getHeight
     * 获取节点的高度-递归
     *
     * @param TreeNode $node
     *
     * @return int
     */
    private function _getHeight($node){
        if($node == null)
        {
            return 0;
        }
        else
        {
            //迭代-每找到一个左节点就去+1
            $i = $this->_getHeight($node->leftChild);
            //迭代-每找到一个右节点就去+1
            $j = $this->_getHeight($node->rightChild);
            //对比左右节点的高度哪个高取那个
            return ($i<$j)?$j+1:$i+1;
        }
    }


    /**
     * Function:createBinaryTreePre
     * 通过前序遍历的数据反向生成二叉树
     *
     * @param array $data
     *
     * @return void
     */
    public function createBinaryTreePre($data){
        return $this->_createBinaryTreePre(count($data),$data);
    }
    /**
     * Function:createBinaryTreePre
     *  通过前序遍历的数据反向生成二叉树
     *               A
     *        B              C
     *    D       E       #       F
     * #    #   #   #            #   #
     *
     *  ABD##E##C#F##
     *
     * @param int $size
     * @param array $data
     *
     * @return TreeNode|null
     */
    private function _createBinaryTreePre($size,&$data){
        if(count($data) == 0)
        {
            return null;
        }
        $d = $data[0];
        $index = $size - count($data);
        if($d == "#"){
            $node = null;
            array_shift($data);
            return $node;
        }
        $node = new TreeNode($index,$d);
        if($index == 0)
        {
            //创建根节点
            $this->root = $node;
        }
        array_shift($data);
        $node->leftChild = $this->_createBinaryTreePre($size,$data);
        $node->rightChild = $this->_createBinaryTreePre($size,$data);
        return $node;
    }

    /**
     * Function:preOrder
     * 前序遍历 -迭代
     *
     * @param TreeNode $node
     *
     * @return void
     */
    public function preOrder($node)
    {
        $this->_preOrder($node);
    }
    /**
     * Function:oreOrder
     * 前序遍历 -迭代
     *
     * @param TreeNode $node
     *
     * @return void
     */
    private function _preOrder($node)
    {
        if($node == null)
        {
            return;
        }
        else
        {
            echo "preOrder data:".$node->getData().PHP_EOL;
            $this->_preOrder($node->leftChild);
            $this->_preOrder($node->rightChild);
        }
    }

    /**
     * Function:nonPreOrder
     * 前序遍历 -栈的方式
     *
     * @param TreeNode $node
     *
     * @return void
     */
    public function nonPreOrder($node){
        if($node == null)
        {
            return;
        }
        $stack = new \SplStack();
        $stack->push($node);
        while (!$stack->isEmpty())
        {
            //出栈和进栈
            $n = $stack->pop();//弹出根节点
            //打印节点数据
            if($n->getData() != null)
            {
                echo "nonPreOrder data:".$n->getData().PHP_EOL;
            }
            if($n->rightChild!=null)
            {
                $stack->push($n->rightChild);
            }
            if($n->leftChild!=null)
            {
                $stack->push($n->leftChild);
            }
        }
    }

    /**
     * Function:midOrder
     * 中序遍历 -迭代
     *
     * @param TreeNode $node
     *
     * @return void
     */
    public function midOrder($node){
        $this->_midOrder($node);
    }

    /**
     * Function:midOrder
     * 中序遍历 -迭代
     *
     * @param TreeNode $node
     *
     * @return void
     */
    private function _midOrder($node)
    {
        if($node == null)
        {
            return;
        }
        else
        {
            $this->_midOrder($node->leftChild);
            echo "midOrder data:".$node->getData().PHP_EOL;
            $this->_midOrder($node->rightChild);
        }
    }


    /**
     * Function:midOrder
     * 后序遍历 -迭代
     *
     * @param TreeNode $node
     *
     * @return void
     */
    public function postOrder($node){
        $this->_postOrder($node);
    }
    /**
     * Function:midOrder
     * 后序遍历 -迭代
     *
     * @param TreeNode $node
     *
     * @return void
     */
    private function _postOrder($node)
    {
        if($node == null)
        {
            return;
        }
        else
        {
            $this->_postOrder($node->leftChild);
            $this->_postOrder($node->rightChild);
            echo "postOrder data:".$node->getData().PHP_EOL;
        }
    }


}