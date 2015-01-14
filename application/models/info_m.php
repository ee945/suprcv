<?php
//简历首页基本信息部分：（除姓名、性别、生日、邮件外）地址、电话、网站等（可自由添加，自由排序）
class Info_m extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    //通过cvid（简历id）获取全部基本信息记录
    public function getbycvid($cvid)
    {
        $this->db->order_by('info_order','asc');
        $query=$this->db->get_where('cv_basic_info',array('cvid'=>$cvid));
        return $query->result_array();
    }

}