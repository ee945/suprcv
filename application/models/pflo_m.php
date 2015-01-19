<?php
//个人文件集展示部分：自由分组，分别展示
class Pflo_m extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    //通过cvid（简历id）获取全部基本信息记录
    public function getbycvid($cvid)
    {
        $this->db->order_by('id','asc');
        $query=$this->db->get_where('cv_portfolio',array('cvid'=>$cvid));
        return $query->result_array();
    }

    //通过cvid查找，并获得展示类别列表
    public function getgroup($cvid)
    {
        $this->db->group_by('pflo_group');
        $query=$this->db->get_where('cv_portfolio',array('cvid'=>$cvid));
        return $query->result_array();
    }

    //按cvid查找某个group下全部记录
    public function getbygroup($cvid,$group)
    {
        $this->db->order_by('id','asc');
        $query=$this->db->get_where('cv_portfolio',array('cvid'=>$cvid,'pflo_group'=>$group));
        return $query->result_array();
    }
}