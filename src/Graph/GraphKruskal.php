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
 * @time     2020-03-08 17:33
 */

namespace DataStructure\Graph;


/**
 * Class [GraphKruskal]
 * 1.请描述类的功能
 * 2.请描述类的依赖
 * 3.请描述已知缺陷
 * 4.修改历史:
 *   修改人 + 日期 + 简单说明
 *
 * @category VNNOX-PHP
 * @package  DataStructure\Graph
 * @author   wanglong <wanglong@novastar.tech>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/ (如果类中有相关引用,请修改此联系,如果有多个引用则添加多个`@link`)
 */
class GraphKruskal
{
    /**
     * @var array
     */
    private $edges = [];
    /**
     * @var 边的数量
     */
    private $edgesSize;

    /**
     * GraphKruskal constructor.
     *
     * @param $edgesSize
     */
    public function __construct($edgesSize)
    {
        $this->edgesSize = $edgesSize;
    }
    public function createEdgeArray(){
        $edge0 = new EdgeKruskal(4,7,7);
        $edge1 = new EdgeKruskal(2,8,8);
        $edge2 = new EdgeKruskal(0,1,10);
        $edge3 = new EdgeKruskal(0,5,11);
        $edge4 = new EdgeKruskal(1,8,12);
        $edge5 = new EdgeKruskal(3,7,16);
        $edge6 = new EdgeKruskal(1,6,16);
        $edge7 = new EdgeKruskal(5,6,17);
        $edge8 = new EdgeKruskal(1,2,18);
        $edge9 = new EdgeKruskal(6,7,19);
        $edge10 = new EdgeKruskal(3,4,20);
        $edge11 = new EdgeKruskal(3,8,21);
        $edge12 = new EdgeKruskal(2,3,22);
        $edge13 = new EdgeKruskal(3,6,24);
        $edge14 = new EdgeKruskal(4,5,26);

        $this->edges[] = $edge0;
        $this->edges[] = $edge1;
        $this->edges[] = $edge2;
        $this->edges[] = $edge3;
        $this->edges[] = $edge4;
        $this->edges[] = $edge5;
        $this->edges[] = $edge6;
        $this->edges[] = $edge7;
        $this->edges[] = $edge8;
        $this->edges[] = $edge9;
        $this->edges[] = $edge10;
        $this->edges[] = $edge11;
        $this->edges[] = $edge12;
        $this->edges[] = $edge13;
        $this->edges[] = $edge14;
    }

    /**
     * Function:miniSpanTreeKruskal
     * 克鲁斯卡尔算法
     * 1、克鲁斯卡尔模型权值升序排
     * 1、初始化一个数组，key是起始值，value是终点值
     * 2、从起始和终止值往后找，如果值不相同没有出现回环，没有出现回环累加，出现了剔除
     *
     * @return void
     */
    public function miniSpanTreeKruskal(){
        $m = $n = $sum = 0;
        //下标为起点，值为终点的数组
        $parent = [];
        //神奇数组-初始化parent
        for ($i=0;$i<$this->edgesSize;$i++)
        {
            $parent[$i] = 0;
        }

        for ($i=0;$i<$this->edgesSize;$i++)
        {
            $n = $this->_find($parent,$this->edges[$i]->begin);
            $m = $this->_find($parent,$this->edges[$i]->end);
            if($n!=$m)
            {
                $parent[$n] = $m;
                echo "起始顶点:".$this->edges[$i]->begin.",结束顶点:".$this->edges[$i]->end,",权值:".$this->edges[$i]->weight.PHP_EOL;
                $sum+=$this->edges[$i]->weight;
            }
            else
            {
                echo "第".$i."边回环了".PHP_EOL;
            }
        }
        echo "sum:".$sum;
    }

    /**
     * Function:_find
     * 将神奇数组进行查询，获取非回环的值
     *
     * @param array $parent 神奇数组
     * @param int   $f      下标
     *
     * @return mixed
     */
    private function _find($parent, $f){
        while ($parent[$f]>0){
            echo "找到起点:".$f.PHP_EOL;
            $f = $parent[$f];
            echo "找到终点:".$f.PHP_EOL;
        }
        return $f;
    }

}