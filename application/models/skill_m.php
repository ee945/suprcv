<?php
//技能部分：自由分组，分别显示，按需排序
class Skill_m extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    //通过cvid（简历id）获取全部记录，分组循环输出
    public function getbycvid($cvid)
    {
        $this->db->order_by('skill_order','asc');
        $query=$this->db->get_where('cv_skill',array('cvid'=>$cvid));
        return $query->result_array();
    }

}