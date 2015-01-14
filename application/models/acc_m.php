<?php
/*
 * 访问码：
 * 1、 英文与数字组合，其他符号或空白将自动过滤
 * 2、 不可重复，且一个访问码对应访问一套简历
 * 3、 储存或显示时自动转化为大写
 * 4、 访问码状态：0 停用，1 启用
 *
 */
class Acc_m extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    //获取全部accesscode（访问码）列表
    public function getall()
    {
        $this->db->order_by('acc_code','asc');
        $query=$this->db->get('cv_access');
        return $query->result_array();
    }

    //通过id获取单条记录
    public function getbyid($id)
    {
        $query=$this->db->get_where('cv_access',array('accid'=>$id));
        return $query->row_array();
    }

    //通过userid（用户id）获取单条记录
    public function getbyuserid($userid)
    {
        $query=$this->db->get_where('cv_access',array('userid'=>$userid));
        return $query->row_array();
    }

    //通过cvid（简历id）获取单条记录
    public function getbycvid($cvid)
    {
        $query=$this->db->get_where('cv_access',array('cvid'=>$cvid));
        return $query->row_array();
    }

    //通过匹配acc_code（访问码）获取单条记录
    public function getbycode($acc_code)
    {
        $query=$this->db->get_where('cv_access',array('acc_code'=>$acc_code));
        return $query->row_array();
    }
}