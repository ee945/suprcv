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

    //通过cvid查找记录，并分组获得全部技能类别列表
    public function getgroup($cvid)
    {
        $this->db->group_by('skill_group');
        $this->db->order_by('skill_order','asc');
        $query=$this->db->get_where('cv_skill',array('cvid'=>$cvid));
        return $query->result_array();
    }

    //按cvid查找某个group下全部记录
    public function getbygroup($cvid,$group)
    {
        $this->db->order_by('skill_order','asc');
        $query=$this->db->get_where('cv_skill',array('cvid'=>$cvid,'skill_group'=>$group));
        return $query->result_array();
    }

}