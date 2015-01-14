<?php
/*
 * 教育经历：按起止时间倒序
 */
class Edu_m extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    //通过cvid（简历id）获取全部记录
    public function getbycvid($cvid)
    {
        $this->db->order_by('edu_start','desc');
        $this->db->order_by('edu_end','desc');
        $query=$this->db->get_where('cv_edu',array('cvid'=>$cvid));
        return $query->result_array();
    }

}