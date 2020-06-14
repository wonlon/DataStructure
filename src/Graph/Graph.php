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
 * @time     2020-03-08 09:48
 */

namespace DataStructure\Graph;


use function Sodium\add;

/**
 * Class [Graph]
 * 邻接矩阵表示图
 *
 * @category VNNOX-PHP
 * @package  DataStructure\Graph
 * @author   wanglong <wanglong@novastar.tech>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/ (如果类中有相关引用,请修改此联系,如果有多个引用则添加多个`@link`)
 */
class Graph
{
    /**
     * @var int 定点的数量
     */
    private $vertexSize;
    /**
     * @var array 定点数组
     */
    public $vertexs = [];
    /**
     * @var array 矩阵
     */
    public $matrix = [];

    /**
     * @var int 最大权值
     */
    public $MAX_WEIGHT = 1000;
    /**
     * @var array 是否被遍历了
     */
    private $isVisited = [];
    /**
     * Graph constructor.
     *
     * @param int $vertexSize
     */
    public function __construct($vertexSize)
    {
        $this->vertexSize = $vertexSize;
        for($i=0 ;$i<$vertexSize; $i++){
            $this->vertexs[$i] = $i;
        }
    }

    /**
     * @return array
     */
    public function getVertexs()
    {
        return $this->vertexs;
    }

    /**
     * @param array $vertexs
     */
    public function setVertexs($vertexs)
    {
        $this->vertexs = $vertexs;
    }

    /**
     * Function:getOutDegree
     * 获取某个定点的出度
     *
     * @param $index
     *
     * @return int
     */
    public function getOutDegree($index){
        $degree = 0;
        for( $j = 0; $j<count($this->matrix[$index]); $j++){
            $weight = $this->matrix[$index][$j];
            if($weight!=0 && $weight != $this->MAX_WEIGHT)
            {
                $degree++;
            }
        }
        return $degree;
    }

    /**
     * Function:getInDegree
     * 计算出度
     *
     * @param $index
     *
     * @return int
     */
    public function getInDegree($index){
        $degree = 0;
        for( $j = 0; $j<count($this->matrix); $j++){
            $weight = $this->matrix[$j][$index];
            if($weight!=0 && $weight != $this->MAX_WEIGHT)
            {
                $degree++;
            }
        }
        return $degree;
    }

    /**
     * Function:getWeight
     * 获取两个定点的权值
     *
     * @param $v1
     * @param $v2
     *
     * @return mixed
     */
    public function getWeight($v1, $v2)
    {
        $weight = $this->matrix[$v1][$v2];
        return $weight == 0
            ? 0
            : ($weight == $this->MAX_WEIGHT ? -1
                : $weight);
    }

    /**
     * Function:depthFirstSearch
     * 图的深度优先遍历算法-迭代(类似于二叉树的前序遍历)
     *
     * @return void
     */
    public function depthFirstSearch(){
        //强制的每个节点都遍历-防止不是连通图
        for ($i=0;$i<$this->vertexSize;$i++)
        {
            if(empty($this->isVisited[$i]))
            {
                $this->_depthFirstSearch($i);
            }
        }
    }
    /**
     * 图的广度优先算法-类似于树的层序
     */
    public function broadFirstSearch(){
        //强制的每个节点都遍历-防止不是连通图
        for ($i=0;$i<$this->vertexSize;$i++)
        {
            if(empty($this->isVisited[$i]))
            {
                $this->_broadFirstSearch($i);
            }
        }
    }
    /**
     * 普里姆算法
     * 1、先把顶点的数据存在待定的最小权值数组中，暂定为最小，
     * 2、从暂定数组中找最小权值的节点(去除已经找到的)
     * 3、得到最小的节点后，获取这个节点的边，与待定的最小权值数组对应的值进行对比，如果小则替换待定的最小权值数组的权值
     * 4、循环3，4的操作
     *
     *
     * 用一个待定的最小权值数组，来保存每一个有可能相连的最小权值，直到最后找到最小的哪一个不断的去连接
     */
    public function prim(){
        //最小代价定点权值的数组，为0表示已经获取最小权值
        $lowcost = [0,0,0,0,0,0,0,0,0];
        //放定点权值
        $adjvex = [];
        $min = $minId = $sum = 0;
        //将v0的第一排数据，存放在$lowcost中
        for ($i=1;$i<$this->vertexSize;$i++){
            $lowcost[$i] = $this->matrix[0][$i];
        }

        for ($i = 1;$i<$this->vertexSize;$i++)
        {
            $min = $this->MAX_WEIGHT;
            $minId = 0;
            //找出每一行最小的权值
            for ($j = 1;$j<$this->vertexSize;$j++)
            {
                //找出每一行最小的权值
                if($lowcost[$j]<$min && $lowcost[$j]>0)
                {
                    $min = $lowcost[$j];
                    $minId = $j;
                }
            }
//            echo "顶点".$adjvex[$minId].";权值："+$min.PHP_EOL;
            $sum+= $min;
            //获取到最小的设置成0
            $lowcost[$minId] = 0;
//            print_r([$minId,$sum,$lowcost]);die;
            //寻找下一排，各个位置比$lowcost小的，暂时占位$lowcost中
            for ($j = 1;$j<$this->vertexSize;$j++)
            {
                if($lowcost[$j]!=0&&$this->matrix[$minId][$j]<$lowcost[$j])
                {
                    $lowcost[$j] = $this->matrix[$minId][$j];
                    $adjvex[$j] = $minId;
                }
            }
            print_r([$adjvex,$lowcost]);
        }
        echo "最小生成树，权值和：".$sum.PHP_EOL;
    }
    /**
     * 实现图的广度优先算法
     */
    private function _broadFirstSearch($i){

        $this->isVisited[$i] = true;
        $queue = new \SplQueue();
        echo "访问到了:".$i."顶点".PHP_EOL;
        $queue->push($i);
        while (!$queue->isEmpty())
        {
            $u = $queue->shift();
            $w = $this->_getFirstNeightbor($u);
            while ($w != -1){
                if(empty($this->isVisited[$w]))
                {
                    echo "访问到了:".$w."顶点".PHP_EOL;
                    $this->isVisited[$w] = true;
                    $queue->push($w);
                }
                $w = $this->_getNextNeighbor($u,$w);
            }
        }


    }

    /**
     * Function:depthFirstSearch
     * 图的深度优先遍历算法-迭代
     *
     * @return void
     */
    private function _depthFirstSearch($i){
        $this->isVisited[$i] = true;
        //寻找第一个节点
        $w = $this->_getFirstNeightbor($i);
        while ($w!=-1){
            if(empty($this->isVisited[$w]))
            {
                echo "访问到了:".$w."顶点".PHP_EOL;
                $this->_depthFirstSearch($w);
            }
            $w = $this->_getNextNeighbor($i,$w); //第一个相对于w的邻接节点
        }
    }
    /**
     * Function:getFirstNeightbor
     * 获取某个定点的第一个邻接点
     *
     * @param $index
     *
     * @return array
     */
    private function _getFirstNeightbor($index)
    {
        for ($j = 0; $j<$this->vertexSize; $j++)
        {
            if($this->matrix[$index][$j]>0&&$this->matrix[$index][$j]<$this->MAX_WEIGHT){
                return $j;
            }
        }
        return -1;
    }

    /**
     * Function:getNextNeighbor
     * 根据顶点，相对于一个邻接获取下一个邻接点的
     *
     * @param int $v 表示要找到顶点
     * @param int $index 表示该定点相对于哪个邻接点去获取下一个邻接点
     *
     * @return int
     */
    private function _getNextNeighbor($v,$index){

        for ($j = $index+1; $j<$this->vertexSize; $j++)
        {
            if($this->matrix[$v][$j]>0&&$this->matrix[$v][$j]<$this->MAX_WEIGHT){
                return $j;
            }
        }
        return -1;
    }
}