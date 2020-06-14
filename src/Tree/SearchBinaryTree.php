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
 * Class [SearchBinaryTree]
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
class SearchBinaryTree
{
    /**
     * @var SearchTreeNode 根节点
     */
    public $root;

    /**
     * 创建查找二叉树
     *
     */
    public function put($data){
        $node = null;
        $parent = null;
        //创建根节点
        if($this->root == null)
        {
            $node = new SearchTreeNode(0,$data);
            $this->root = $node;
            return $node;
        }

        $node = $this->root;
        //目的是找到插入节点的parent
        while ($node != null)
        {
            $parent = $node;
            if($data>$node->data)
            {
                $node = $node->rightChild;
            }
            else if($data<$node->data)
            {
                $node=$node->leftChild;
            }
            else{
                return $node;
            }
        }
        //表示将此节点添加到相应的位置
        $node = new  SearchTreeNode(0,$data);

        if($data < $parent->data)
        {
            $parent->leftChild = $node;
        }
        else{
            $parent->rightChild = $node;
        }
        $node->parent = $parent;
        return $node;
    }

    /**
     * 删除节点
     */
    public function deleteNode($key){
        $node = $this->_searchNode($key);
        if($node == null)
        {
            die("该节点未找到");
        }
        else
        {
            //删除该节点
            $this->_delete($node);
        }
    }

    /**
     * Function:_delete
     * 删除操作
     *
     * @param SearchTreeNode $node
     *
     * @return void
     */
    private function _delete($node)
    {
        if($node==null)
        {
            die("该节点为空");
        }
        else{
            $parent = $node->parent;
            //1、被删除的节点无左右孩子
            if($node->leftChild == null && $node->rightChild == null)
            {
                if($parent->leftChild == $node)
                {
                    $parent->leftChild = null;
                }
                else
                {
                    $parent->rightChild = null;
                }
                return;
            }
            //2、被删除的孩子有左节点，没有右节点
            if($node->leftChild != null&&$node->rightChild == null)
            {
                if($parent->leftChild == $node)
                {
                    $parent->leftChild = $node->leftChild;
                }
                else
                {
                    $parent->rightChild = $node->leftChild;
                }
                return;
            }
            //3、被删除的孩子有右节点，没有左节点
            if($node->leftChild == null&&$node->rightChild != null)
            {
                if($parent->leftChild == $node)
                {
                    $parent->leftChild = $node->rightChild;
                }
                else
                {
                    $parent->rightChild = $node->rightChild;
                }
                return;
            }
            //4、被删除的孩子有右节点，也有左节点
            $next = $this->getNextNode($node);
            $this->_delete($next);
            $node->data = $next->data;
        }
    }

    /**
     * Function:getNextNode
     * 获取一个节点的后继节点
     *
     * @param SearchTreeNode $node
     *
     * @return SearchTreeNode
     */
    public function getNextNode($node){
        if($node==null)
        {
            return null;
        }
        else
        {
            /**
             * 查询后继节点的两种情况
             * 1、该节点存在右节点
             * 2、该节点不存在右节点
             */
            if($node->rightChild != null)
            {
                /**
                 * 1、如果查询的节点的右节点不等于空
                 * 2、那么该节点的后继为，该节点的右节点的最左节点
                 */
                return $this->_getMinTreeNode($node->rightChild);
            }
            else
            {
                /**
                 * 1、如果查询的节点的右节点等于空
                 * 2、一直找父，直到父节点的右节点与子节点的值不同
                 */
                $parent = $node->parent;
                while ($parent!=null && $parent->rightChild != null && $node == $parent->rightChild){
                    $node = $parent;
                    $parent = $parent->parent;
                }
                return $parent;
            }
        }
    }

    /**
     * Function:_getMinTreeNode
     * 查找最小的节点
     * 找右孩子的最左节点
     *
     * @param SearchTreeNode $node
     *
     * @return SearchTreeNode
     */
    private function _getMinTreeNode($node){
        if($node==null)
        {
            return null;
        }
        else{
            while ($node != null)
            {
                $node = $node->leftChild;
            }
        }
        return $node;
    }
    /**
     * Function:searchNode
     * 查找某个node
     *
     * @param $key
     *
     * @return null
     */
    private function _searchNode($key){
        $node = $this->root;
        if($node==null)
        {
            return null;
        }
        else
        {
            while ($node !=null && $key != $node->data)
            {
                //值小于节点数据，向左查找 ， 大于向右查找
                if($key< $node->data)
                {
                    $node = $node->leftChild;
                }
                else
                {
                    $node = $node->rightChild;
                }
            }
        }
        return $node;
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
}