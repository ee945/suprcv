<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class View extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
		$this->load->model("cv_m");
		$this->load->model("acc_m");
		$this->load->model("info_m");
		$this->load->model("work_m");
		$this->load->model("edu_m");
		$this->load->model("skill_m");
		$this->load->model("serv_m");
		$this->load->model("soc_m");
	}

	public function index()
	{
		//简历访问首页，先输入访问码
		echo "please input access code";
	}

	public function access($acc_code)
	{
		//若未输入访问码则跳转至访问页入口
		if($acc_code=="") $this->index();
		//访问码先转为大写后再查找
		$acc_code=strtoupper($acc_code);
		$res_acc=$this->acc_m->getbycode($acc_code);
		//通过访问码查到对应的简历id，用于后续其他相关表查询
		$cvid=$res_acc['cvid'];
		//简历主体内容查询
		$data['cv']=$this->cv_m->getbyid($cvid);
		//将语言类型另存为变量以备用
		$cv_lang=$data['cv']['cv_lang'];
		//根据语言类型显示不同格式的生日格式（目前仅有英语和简体中文）
		if($cv_lang=="en") $data['user_birth']=date('F d, Y',strtotime($data['cv']['cv_user_birth']));
		if($cv_lang=="zh-cn") $data['user_birth']=date('Y年m月d日',strtotime($data['cv']['cv_user_birth']));
		//查询自定义的基本信息
		$data['info']=$this->info_m->getbycvid($cvid);
		//工作经历
		$data['work']=$this->work_m->getbycvid($cvid);
		//教育经历
		$data['edu']=$this->edu_m->getbycvid($cvid);
		/*
         *  个人能力部分：
         *  两层循环查询，分组显示
         *
         */
		//先获取技能分组列表
		$data['sgroup']=$this->skill_m->getgroup($cvid);
		//对每一个组别再循环查询，得出该组下全部单项技能，赋值给二维数组
		foreach($data['sgroup'] as $sgroup)
		{
			$data['skill'][$sgroup['skill_group']]=$this->skill_m->getbygroup($cvid,$sgroup['skill_group']);
		}
		//服务项目
		$data['serv']=$this->serv_m->getbycvid($cvid);
		//社交链接列表
		$data['soc']=$this->soc_m->getbycvid($cvid);

		$this->load->view('plvcard/vcard',$data);
	}

	public function access_sample()
	{
		$this->load->view('plvcard/vcard_sample');
	}
}
