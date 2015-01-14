<?php
//简历主体模型，包括姓名、性别、生日、邮件4个必须属性，及个人简介、照片、地图uri、联系方式、简历语言等
class Cv_m extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    //获取全部cv_main（简历主体）列表
    public function getall()
    {
        $this->db->order_by('cvid','desc');
        $query = $this->db->get('cv_main');
        return $query->result_array();
    }

    //通过id获取单条记录
    public function getbyid($id)
    {
        $query = $this->db->get_where('cv_main',array('cvid'=>$id));
        return $query->row_array();
    }

    //通过userid（用户id）获取单条记录
    public function getbyuserid($userid)
    {
        $query = $this->db->get_where('cv_main',array('userid'=>$userid));
        return $query->row_array();
    }
}
