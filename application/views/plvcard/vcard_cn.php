<!DOCTYPE html>
<html class="nivo-lightbox-notouch">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px}</style>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>resources/plvcard/css">
    <style type="text/css">@media/sample print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style>
    <style type="text/css">.gm-style{font-family:Roboto,Arial,sans-serif;font-size:11px;font-weight:400;text-decoration:none}</style>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="keywords" content="SuprCV HTML5 RESUME vCARD">
	<meta name="description" content="SuprCV Responsive Multipurpose HTML5 vCard">
	<meta name="author" content="">

    <title> 我的简历 - <?php echo $cv['cv_user_name']; ?>&nbsp;&nbsp;|&nbsp;&nbsp;SuprCV 电子名片系统</title>

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicons -->
	<link rel="shortcut icon" href="<?php echo base_url();?>resources/plvcard/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo base_url();?>resources/plvcard/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>resources/plvcard/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>resources/plvcard/images/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>resources/plvcard/images/apple-touch-icon-144x144.png">

	<!-- Google Webfonts -->
	<link href="<?php echo base_url();?>resources/plvcard/css/woff.opensans.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>resources/plvcard/css/woff.neuton.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>resources/plvcard/css/woff.roboto.css" rel="stylesheet" type="text/css">
	
	<!--[if lt IE 9]>
	<script src="<?php echo base_url();?>resources/plvcard/js/respond.min.js"></script>
	<![endif]-->

	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>resources/plvcard/css/bootstrap.css">

	<!-- Theme Styles CSS-->
	<link rel="stylesheet" href="<?php echo base_url();?>resources/plvcard/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>resources/plvcard/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url();?>resources/plvcard/css/flexslider.css">
	<link rel="stylesheet" href="<?php echo base_url();?>resources/plvcard/css/nivo-lightbox.css">
	<link rel="stylesheet" href="<?php echo base_url();?>resources/plvcard/css/default.css">
	<link rel="stylesheet" href="<?php echo base_url();?>resources/plvcard/css/animate.css">

	<!--[if lt IE 9]>
	<script src="/js/libs/html5.js"></script>
	<![endif]-->
	
	<!-- Style Switch -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resources/plvcard/css/styleswitch/yellow-black.css" title="yellow" media="screen">
   	<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>resources/plvcard/css/styleswitch/violet-black.css" title="black" media="screen" disabled="">
	<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>resources/plvcard/css/styleswitch/orange-black.css" title="orange" media="screen" disabled="">
	<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>resources/plvcard/css/styleswitch/blue-black.css" title="blue" media="screen" disabled="">
	<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>resources/plvcard/css/styleswitch/red-black.css" title="red" media="screen" disabled="">
	<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>resources/plvcard/css/styleswitch/green-black.css" title="green" media="screen" disabled="">
	<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>resources/plvcard/css/styleswitch/pink-black.css" title="pink" media="screen" disabled="">
	<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>resources/plvcard/css/styleswitch/pale-green-black.css" title="pale-green" media="screen" disabled="">

</head>
<body ryt13417="1" style="background: rgb(217, 219, 221);">

<!-- LOADING MASK -->
<div id="mask" style="display: none;">   
    <div class="loader" style="display: none;">
        <img src="<?php echo base_url();?>resources/plvcard/images/loading.gif" alt="loading">
    </div>
</div>

<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container no-padding">
		<div class="row">
			<div class="col-md-3 l-content">
				<div class="profile-pic">
					<div class="pic-bg"><img src="<?php echo base_url();?>resources/media/<?php echo $cv['cvid'];?>/avatar/profile-avatar.png" class="img-responsive" alt=""></div>
				</div>
				<nav>
				<ul class="navigation">
					<li class="flex-active"><a href="#">个人档案 <i class="fa fa-user"></i></a></li>
					<li><a href="#">我的简历 <i class="fa fa-file-text"></i></a></li>
					<li><a href="#">作品展示 <i class="fa fa-briefcase"></i></a></li>
					<li><a href="#">我的博客 <i class="fa fa-comment"></i></a></li>
					<li><a href="#">联系方式 <i class="fa fa-envelope"></i></a></li>
				</ul>
				</nav>
			</div>

			<div class="col-md-9 r-content">
				<div class="flexslider" style="height: 2035px;">
					<div class="slides">
						<!-- SECTION 1 - HOMEPAGE -->
						<section class="no-display flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">
							<div class="profile" id="1">
								<h2 class="animated fadeInDown">您好，我是 <span><?php echo $cv['cv_user_name'];?></span><br><?php echo $cv['cv_user_title'];?></h2>
								<div class="sep1"></div>
								<p class="animated fadeInDown"><?php echo $cv['cv_descp'];?></p>
								<div class="personal-info col-md-12 no-padding animated flipInX">
									<h4>基本信息</h4>
									<div class="sep2"></div>
									<ul>
										<li>
											<div class="p-info"><em>姓  名</em><span><?php echo $cv['cv_user_name'];?></span></div>
										</li>
										<li>
											<div class="p-info"><em>出生年月</em><span><?php echo $user_birth;?></span></div>
										</li>
										<li>
											<div class="p-info"><em>电子邮件</em><span><?php echo $cv['cv_user_mail'];?></span></div>
										</li>
										<?php foreach($info as $info_i):?>
										<li>
											<div class="p-info"><em><?php echo $info_i['info_title'];?></em><span><?php echo $info_i['info_content'];?></span></div>
										</li>
										<?php endforeach ?>
									</ul>
								</div>
								<div class="clearfix"></div>
							</div>
						</section>
						<!-- SECTION 1 - HOMEPAGE -->


						<!-- SECTION 2 - CV / RESUME -->
						<section class="no-display" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;">
							<div class="item resume" id="2">
								<div class="page-head animated fadeInDown">
									<div class="row">
										<div class="col-md-5">
											<h3>简历</h3>
										</div>
										<div class="col-md-7">
											<div class="np-main">
												<p>上一页 / 下一页</p>
												<div class="np-controls">
													<a href="#" class="previous"><i class="fa fa-arrow-circle-left"></i></a>
													<a href="#" class="next"><i class="fa fa-arrow-circle-right"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="resume-info animated slideInLeft">
									<h4>工作经历</h4>
									<div class="sep2"></div>
									<ul>
										<?php foreach($work as $work_i):?>
										<li>
											<h5><?php echo $work_i['work_company'];?></h5>
											<span class="year"><i class="fa fa-calendar"></i>&nbsp;<?php echo $work_i['work_start'];?>&nbsp;-&nbsp;<?php echo $work_i['work_end'];?></span>
											<span class="title"><i class="fa fa-user"></i><?php echo $work_i['work_title'];?></span>
											<p><?php echo $work_i['work_descp'];?></p>
										</li>
										<?php endforeach ?>
									</ul>
								</div>
								<div class="resume-info animated slideInLeft">
									<h4>教育背景</h4>
									<div class="sep2"></div>
									<ul>
										<?php foreach($edu as $edu_i):?>
											<li>
												<h5><?php echo $edu_i['edu_school'];?></h5>
												<span class="year"><i class="fa fa-calendar"></i>&nbsp;<?php echo $edu_i['edu_start'];?>&nbsp;-&nbsp;<?php echo $edu_i['edu_end'];?></span>
											    <span class="title"><i class="fa fa-pencil-square-o"></i><?php echo $edu_i['edu_major'];?></span>
												<p><?php echo $edu_i['edu_descp'];?></p>
											</li>
										<?php endforeach ?>
									</ul>
								</div>
								<?php foreach($sgroup as $sgroup_i): ?>
								<div class="skills-info">
									<h4><?php echo $sgroup_i['skill_group'];?>:</h4>
									<div class="sep2"></div>
									<ul>
										<?php foreach($skill[$sgroup_i['skill_group']] as $s_item):?>
										<li>
											<p><?php echo $s_item['skill_name'];?><span><?php echo $s_item['skill_value'];?>%</span></p>
											<div class="skills-bg" alt="111"><span class="<?php echo $sgroup_i['skill_group'];?>" style="width: <?php echo $s_item['skill_value'];?>%;"></span></div>
										</li>
										<?php endforeach ?>
									</ul>
								</div>
								<?php endforeach ?>
								<div class="services-info">
									<h4>服务项目</h4>
									<div class="sep2"></div>
									<ul>
										<?php foreach ($serv as $serv_i):?>
										<li class="animated flipInX">
											<i class="<?php echo $serv_i['serv_icon'];?>"></i>
											<h5><?php echo $serv_i['serv_name'];?></h5>
										</li>
										<?php endforeach ?>
									</ul>
								</div>
							</div>
						</section>
						<!-- SECTION 2 - CV / RESUME -->

						<!-- SECTION 3 - WORKS / PROJECTS / PORTFOLIO -->
						<section class="no-display" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">
							<div class="works" id="3">
								<div class="page-head animated fadeInDown">
									<div class="row">
										<div class="col-md-5">
											<h3>作品展示</h3>
										</div>
										<div class="col-md-7">
											<div class="np-main">
												<p>上一页 / 下一页</p>
												<div class="np-controls">
													<a href="#" class="previous"><i class="fa fa-arrow-circle-left"></i></a>
													<a href="#" class="next"><i class="fa fa-arrow-circle-right"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="portfolio-wrap">
									<div class="row">
										<ul id="filter-list" class="clearfix">
											<li class="filter active" data-filter="all"><i class="fa fa-th"></i> All</li>
											<?php foreach($pgroup as $pgroup_i): ?>
											<li class="filter" data-filter="<?php echo strtolower($pgroup_i['pflo_group']);?>"><?php echo $pgroup_i['pflo_group'];?></li>
											<?php endforeach ?>
										</ul>
										<ul id="portfolio">
											<?php foreach($pgroup as $pgroup_i): ?>
												<?php foreach($pflo[$pgroup_i['pflo_group']] as $pflo_i): ?>
												<li class="item col-md-4 <?php echo strtolower($pgroup_i['pflo_group']);?> animated flipInX mix_all" style="display: inline-block; opacity: 1;">
													<a title="<?php echo $pflo_i['pflo_descp'];?>" href="<?php echo $pflo_i['pflo_link'];?>" data-lightbox-gallery="gallery1" class="nivo-lbox">
														<div class="folio-img">
															<img src="<?php echo base_url();?>resources/media/<?php echo $cv['cvid'];?>/portfolio/<?php echo $pflo_i['pflo_imgurl'];?>" alt="" class="img-responsive" draggable="false">
															<div class="overlay">
																<div class="overlay-inner">
																	<h4><?php echo $pflo_i['pflo_name'];?></h4>
																	<p><?php echo $pflo_i['pflo_title'];?></p>
																</div>
															</div>
														</div>
													</a>
												</li>
												<?php endforeach ?>
											<?php endforeach ?>
										</ul>
									</div>
								</div>
							</div>
						</section>
						<!-- SECTION 3 - WORKS / PROJECTS / PORTFOLIO -->
						
						<!-- SECTION 4 - BLOG / NEWS -->
						<section class="no-display" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">
							<div class="item blog" id="4">
								<div class="page-head animated fadeInDown">
									<div class="row">
										<div class="col-md-5">
											<h3>博客</h3>
										</div>
										<div class="col-md-7">
											<div class="np-main">
												<p>上一页 / 下一页</p>
												<div class="np-controls">
													<a href="#" class="previous"><i class="fa fa-arrow-circle-left"></i></a>
													<a href="#" class="next"><i class="fa fa-arrow-circle-right"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="blog-wrap">
									<article class="animated flipInX">
										<div class="row">
											<div class="col-md-5">
												<img src="<?php echo base_url();?>resources/media/<?php echo $cv['cvid'];?>/blog/1(1).jpg" class="img-responsive" alt="" draggable="false">
											</div>
											<div class="col-md-7">
												<h3><a href="#">Standard Post with Image</a></h3>
												<div class="post-meta">
													<i class="fa fa-calendar"></i> <a href="#">30 march</a> 
													<i class="fa fa-user"></i> <a href="#">Admin</a> 
													<i class="fa fa-comments"></i> <a href="#">10 Comments</a> 
												</div>
												<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
											</div>
										</div>
									</article>
									<div class="link-post">
										<div class="row">
											<div class="col-md-12">
												<i class="fa fa-link"></i>
												<a href="http://www.themeforest.net/" target="_blank">www.themeforest.net</a>
											</div>
										</div>
									</div>
									<article class="animated flipInX">
										<div class="row">
											<div class="col-md-5">
												<img src="<?php echo base_url();?>resources/media/<?php echo $cv['cvid'];?>/blog/2(1).jpg" class="img-responsive" alt="" draggable="false">
											</div>
											<div class="col-md-7">
												<h3><a href="#">Standard Post with Image</a></h3>
												<div class="post-meta">
													<i class="fa fa-calendar"></i> <a href="#">30 march</a> 
													<i class="fa fa-user"></i> <a href="#">Admin</a> 
													<i class="fa fa-comments"></i> <a href="#">10 Comments</a> 
												</div>
												<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
											</div>
										</div>
									</article>
									<div class="quote-post">
										<div class="row">
											<div class="col-md-12">
												<blockquote>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aene.This is photoshop's version f Lorem Ipsum.</blockquote>
												<i class="fa fa-quote-left"></i>
												<span class="author-name">John Smith</span>
											</div>
										</div>
									</div>
									<article class="no-border animated flipInX">
										<div class="row">
											<div class="col-md-5">
												<img src="<?php echo base_url();?>resources/media/<?php echo $cv['cvid'];?>/blog/3(1).jpg" class="img-responsive" alt="" draggable="false">
											</div>
											<div class="col-md-7">
												<h3><a href="#">Standard Post with Image</a></h3>
												<div class="post-meta">
													<i class="fa fa-calendar"></i> <a href="#">30 march</a> 
													<i class="fa fa-user"></i> <a href="#">Admin</a> 
													<i class="fa fa-comments"></i> <a href="#">10 Comments</a> 
												</div>
												<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
											</div>
										</div>
									</article>
								</div>
							</div>
						</section>
						<!-- SECTION 4 - BLOG / NEWS -->

						<!-- SECTION 5 - CONTACT -->
						<section class="no-height" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">
							<div class="item contact" id="5">
								<div class="page-head animated fadeInDown">
									<div class="row">
										<div class="col-md-5">
											<h3>联系我</h3>
										</div>
										<div class="col-md-7">
											<div class="np-main">
												<p>上一页 / 下一页</p>
												<div class="np-controls">
													<a href="#" class="previous"><i class="fa fa-arrow-circle-left"></i></a>
													<a href="#" class="next"><i class="fa fa-arrow-circle-right"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="map">
									<div class="gmap">
                                        <div id="map" style="position: relative; overflow: hidden; transform: translateZ(0px);" >
                                            <?php echo $cv['cv_map'];?>
                                        </div>
									</div>
								</div>
								<div class="contact-info">
									<h4>联系方式</h4>
									<p><?php echo $cv['cv_contact'];?></p>
								</div>
								<div class="contact-form">
									<h4>给我留言</h4>
									<form id="contactForm" action="http://premiumlayers.com/demos/vcard/php/contact.php" method="post" class="positioned">
										<div class="row">
											<div class="col-md-4">
												<input type="text" name="senderName" id="senderName" placeholder="您的名字">
												<input type="email" name="senderEmail" id="senderEmail" placeholder="您的邮箱">
												<input type="text" name="subject" id="subject" placeholder="留言标题">
											</div>
											<div class="col-md-8">
												<textarea name="message" id="message" rows="6" placeholder="您的信息"></textarea>
												<button type="submit">发送信息</button>
											</div>
										</div>
									</form>
									<div id="successMessage" class="successmessage">
										<p><span class="success-ico"></span> 感谢您的留言，我会尽快回复！</p>
									</div>
									<div id="failureMessage" class="errormessage">
										<p><span class="error-ico"></span> 发送信息失败，请重试！</p>
									</div>
									<div id="incompleteMessage" class="statusMessage">
										<p>请填写完整信息</p>
									</div>
								</div>
							</div>
						</section>
						<!-- SECTION 5 - CONTACT -->
					</div>
				</div>

				<!-- FOOTER -->
				<footer>
					<div class="row">
						<div class="col-md-7">
                            <p>&copy; <?php echo date('Y');?> <?php echo $cv['cv_user_name'];?>. 版权所有</p>
						</div>
						<div class="col-md-5">
							<ul class="social">
								<?php foreach($soc as $soc_i):?>
								<li><a href="<?php echo $soc_i['soc_link'];?>"><i class="<?php echo $soc_i['soc_icon'];?>"></i></a></li>
								<?php endforeach ?>
							</ul>
						</div>
					</div>
				</footer>
			</div>
		</div>
	</div>
</div>
<!-- MAIN CONTENT -->
<!-- Style Switch -->
<div id="customizer" class="s-close">
	<span class="corner"><span class="cog"></span></span>
	<div id="options" class="visible">
		<div class="options-head">
			切换风格
		</div>	

		<div class="options-segment clearfix headers-sel">
			<h6 class="color-head">背景</h6>
				<ul class="version">
                    <li><a class="lite bg-lite">明亮</a></li>
                    <li><a class="dark bg-dark">暗黑</a></li>
				</ul>
		</div>

		<div class="options-segment clearfix colors-sel">
			<h6 class="color-head">主题色彩</h6>
			<ul class="color-scheme clearfix">
				<li class="yellow"><a href="#" data-rel="yellow" class="styleswitch"></a></li>
				<li class="green"><a href="#" data-rel="green" class="styleswitch"></a></li>
				<li class="red"><a href="#" data-rel="red" class="styleswitch"></a></li>
				<li class="blue"><a href="#" data-rel="blue" class="styleswitch"></a></li>
				<li class="fblack"><a href="#" data-rel="black" class="styleswitch"></a></li>
				<li class="orange"><a href="#" data-rel="orange" class="styleswitch"></a></li>
				<li class="violet"><a href="#" data-rel="pink" class="styleswitch"></a></li>
				<li class="pale-green"><a href="#" data-rel="pale-green" class="styleswitch"></a></li>
			</ul>
		</div>	
	</div>
</div>
<!-- Style Switch -->
<!-- JavaScript -->
<script src="<?php echo base_url();?>resources/plvcard/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>resources/plvcard/js/bootstrap.js"></script>
<script src="<?php echo base_url();?>resources/plvcard/js/jquery.flexslider.js"></script>
<script src="<?php echo base_url();?>resources/plvcard/js/jquery.easing.js"></script>
<script src="<?php echo base_url();?>resources/plvcard/js/jquery.mixitup.min.js"></script>
<script src="<?php echo base_url();?>resources/plvcard/js/nivo-lightbox.min.js"></script>
<script src="<?php echo base_url();?>resources/plvcard/js/jquery.appear.js"></script>
<script src="<?php echo base_url();?>resources/plvcard/js/jquery.inview.js"></script>
<script src="<?php echo base_url();?>resources/plvcard/js/main.js"></script>
<script src="<?php echo base_url();?>resources/plvcard/js/contact.js"></script>
<script src="<?php echo base_url();?>resources/plvcard/js/animations.js"></script>
<script src="<?php echo base_url();?>resources/plvcard/js/styleswitch.js"></script>
<script src="<?php echo base_url();?>resources/plvcard/js/style_switch_custom.js"></script>

<script>
$(function(){
    $(".bg-lite").click(function(){
        $("body").css("background","#d9dbdd"); 
    });
});

$(function(){
    $(".bg-dark").click(function(){
        $("body").css("background","#222222"); 
    });
});
</script>
</body></html>
