<?php
//参考评价：来自他人的评价
class Ref_m extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    //通过cvid（简历id）获取全部记录
    public function getbycvid($cvid)
    {
        $this->db->order_by('id','asc');
        $query=$this->db->get_where('cv_refer',array('cvid'=>$cvid));
        return $query->result_array();
    }

}