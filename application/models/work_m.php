<?php
/*
 * 工作经历：按起止时间倒序
 */
class Work_m extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    //通过cvid（简历id）获取全部记录
    public function getbycvid($cvid)
    {
        $this->db->order_by('work_start','desc');
        $this->db->order_by('work_end','desc');
        $query=$this->db->get_where('cv_work',array('cvid'=>$cvid));
        return $query->result_array();
    }

}