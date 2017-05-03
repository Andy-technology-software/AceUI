<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>销售过程管理系统</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="/Public/Admin/LingUI/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/Public/Admin/LingUI/css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="/Public/Admin/LingUI/css/lui-fonts.css" />

		<!-- lui styles -->
		<link rel="stylesheet" href="/Public/Admin/LingUI/css/lui.min.css" id="main-ace-style" />
		<link rel="stylesheet" href="/Public/Admin/LingUI/css/lingnet.css"/>
		<link rel="stylesheet" href="/Public/Admin/LingUI/js/ztree/zTreeStyle.css" />
		<link rel="stylesheet" href="/Public/Admin/LingUI/css/datepicker.css" />
		<!--[if lte IE 9]>
			<link rel="stylesheet" href="/Public/Admin/LingUI/css/lui-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="/Public/Admin/LingUI/css/lui-skins.min.css" />
		<link rel="stylesheet" href="/Public/Admin/LingUI/css/lui-rtl.min.css" />


		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="/Public/Admin/LingUI/css/lui-ie.min.css" />
		<![endif]-->

		<!-- lui settings handler -->
		<script src="/Public/Admin/LingUI/js/lui-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="/Public/Admin/LingUI/js/html5shiv.min.js"></script>
		<script src="/Public/Admin/LingUI/js/respond.min.js"></script>
		<![endif]-->
		<script src="/Public/Admin/LingUI/js/uisearch.js"></script>
        <script src="/Public/Admin/LingUI/js/classie.js"></script>
        <script src="/Public/Admin/LingUI/js/modernizr.custom.js"></script>
        

		
	</head>

	<body class="no-skin">
	<div id="navbar" class="navbar navbar-default">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler">
					<span class="sr-only">切换栏</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							销售过程管理系统
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav" id="step1">
						<li class="grey">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-check"></i>
									4任务完成
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">软件升级</span>
											<span class="pull-right">65%</span>
										</div>

										<div class="progress progress-mini">
											<div style="width:65%" class="progress-bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">硬件升级</span>
											<span class="pull-right">35%</span>
										</div>

										<div class="progress progress-mini">
											<div style="width:35%" class="progress-bar progress-bar-danger"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">单元测试</span>
											<span class="pull-right">15%</span>
										</div>

										<div class="progress progress-mini">
											<div style="width:15%" class="progress-bar progress-bar-warning"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">错误修复</span>
											<span class="pull-right">90%</span>
										</div>

										<div class="progress progress-mini progress-striped active">
											<div style="width:90%" class="progress-bar progress-bar-success"></div>
										</div>
									</a>
								</li>

								<li class="dropdown-footer">
									<a href="#">
										产看任务详细信息
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-exclamation-triangle"></i>
									8通知
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
												最新评论
											</span>
											<span class="pull-right badge badge-info">+12</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="btn btn-xs btn-primary fa fa-user"></i>
									       鲍勃只是签署了作为一个编辑….
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
												最新新订单
											</span>
											<span class="pull-right badge badge-success">+8</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>
												追溯者
											</span>
											<span class="pull-right badge badge-info">+11</span>
										</div>
									</a>
								</li>

								<li class="dropdown-footer">
									<a href="#">
										查看所有通知
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-envelope-o"></i>
									5 消息
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar">
										<li>
											<a href="#">
												<img src="/Public/Admin/LingUI/images/avatar.png" class="msg-photo" alt="Alex's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">艾利克斯:</span>
														Ciao sociis natoque penatibus et auctor ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>刚才</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#">
												<img src="/Public/Admin/LingUI/images/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">苏珊:</span>
														Vestibulum id ligula porta felis euismod ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>20分钟前</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#">
												<img src="/Public/Admin/LingUI/images/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">鲍勃:</span>
														Nullam quis risus eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>下午 3:15 </span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#">
												<img src="/Public/Admin/LingUI/images/avatar2.png" class="msg-photo" alt="Kate's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">凯特:</span>
														Ciao sociis natoque eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>下午 1:33 </span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#">
												<img src="/Public/Admin/LingUI/images/avatar5.png" class="msg-photo" alt="Fred's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">弗莱德:</span>
														Vestibulum id penatibus et auctor  ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>上午10:09 </span>
													</span>
												</span>
											</a>
										</li>
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="inbox.html">
										产看全部消息
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="/Public/Admin/LingUI/images/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>欢迎,</small>
									杰森
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										设置
									</a>
								</li>

								<li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										简介
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-power-off"></i>
										退出
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
			<div class="clearfix"></div>
	<div style="background:#EBEBEB;float:left;width:100%;">
           <div class="b_gn_bar"  id="b_gn_bar"><!-- 导航栏。。。-->
             <div class="b_gn_bar_left">
                 <ul >
                     <li class="b_one  ">
                           <a href="#">
                                 <i class=" fa fa-user fa-lg"></i>
                                 <span  class="b_word">客户信息</span>
                                 <i  id="b_radius" > <i class="b_number">3</i>  </i>
                            </a>
                     </li>
                     <li>
                          <a href="#"> 
                                <i class="fa fa-sitemap fa-lg"></i> <!-- <img src="/Public/Admin/LingUI/images/b_t_2.png"> -->
                                 <span  class="b_word">过程管理</span>
                            </a>
                      </li>
                 </ul>
              </div><!-- b_gn_bar_left   end-->
              
              <div class="b_gn_bar_right">
                  <ul >
                      <li id="b_one"   data-rel="popover-3"   data-placement="bottom" title="关于我们"  content=""></li>   <!-- 快捷方式  1-->
						
                      <li   class="b_two"    data-rel="popover-1"  data-placement="bottom"  title="个人信息 "  content="">      </li>          
                     
                       <li  id="b_three"  data-rel="popover-2" data-placement="bottom" title="所在公司" content="">    </li>		<!-- 快捷方式   3-->
                       									
                </ul>
               </div><!-- b_gn_bar_right   end-->
                         
           <!--    <li  id="b_gn_bar_right_add"   class="sb-search-submi" > </li> <!--   添加按钮和搜索框-->
           <!--   <input type="text"   class="sb-search-input" id="search" placeholder="日程主题......"  >-->

					
                    <div class="column">
					<div id="sb-search" class="sb-search">
						<form>
                            
							<input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
							<input class="sb-search-submit" type="submit" value="">
							<span class="sb-icon-search"></span>
						</form>
					</div>
				</div>
                    
                    

                   
               <div class="b_gn_bar_set">
                <ul>
                      <li  id="b_gn_bar_set_bu"   data-rel="popover-3" data-placement="bottom" title="修改信息" content=""> 
                       <img src="/Public/Admin/LingUI/images/b_r_6.png">   </li>
                  </ul> 
               </div>  <!-- b_gn_bar_set    end-->
               
              <div   class="b_line"></div>
        </div>
        </div>
		</div>

		<!-- /section:basics/navbar.layout -->
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<!-- #section:basics/sidebar -->
			<div id="sidebar" class="sidebar                  responsive">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>

		

				<ul class="nav nav-list">
			
					
<!-- 控制台 -->
					<li class="active">
						<a data-url="page/ydemo_kongzhitai" href="ajax.html#page/ydemo_kongzhitai">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> 控制台 </span>
						</a>

						<b class="arrow"></b>
					</li>
			
<!-- 客户管理 -->				
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-users"></i>
							<span class="menu-text">客户管理</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a data-url="page/customer_list" href="ajax.html#page/customer_list">
									<i class="menu-icon fa fa-caret-right"></i>
									客户信息
								</a>
								<b class="arrow"></b>
							</li>
				
							<li class="">
								<a data-url="page/contact_list" href="ajax.html#page/contact_list">
									<i class="menu-icon fa fa-caret-right"></i>
									联系人
								</a>
								<b class="arrow"></b>
							</li>

							<li class="">
								<a data-url="page/customer_public" href="ajax.html#page/customer_public">
									<i class="menu-icon fa fa-caret-right"></i>
									公共客户池
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>			
<!-- 线索管理 -->				
					<li class="">
						<a data-url="page/lead_list" href="ajax.html#page/lead_list">
							<i class="menu-icon fa fa-pencil"></i>
							<span class="menu-text">线索信息</span>
						</a>
						<b class="arrow"></b>

					</li>					


<!-- 销售管理 -->				
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-send"></i>
							<span class="menu-text">销售管理</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
                        	<li class="">
									<a data-url="page/sales_manage_chancelist" href="ajax.html#page/sales_manage_chancelist">
										<i class="menu-icon fa fa-caret-right"></i>
										销售机会
									</a>
									<b class="arrow"></b>
							</li>
							
							<li class="">
									<a data-url="page/salesopp_list" href="ajax.html#page/salesopp_list">
										<i class="menu-icon fa fa-caret-right"></i>
										销售机会流程页面
									</a>
									<b class="arrow"></b>
								</li>
							
							<li class="">
								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									销售目标
								</a>
								<b class="arrow"></b>
							</li>

							<li class="">
								<a data-url="page/sales_manage_chancelist_list" href="ajax.html#page/sales_manage_chancelist_list">
									<i class="menu-icon fa fa-caret-right"></i>
									产品报价
								</a>
								<b class="arrow"></b>
						          </li>
                                                          
                                                            <li class="">
								<a data-url="page/competitor_demo_list" href="ajax.html#page/competitor_demo_list">
									<i class="menu-icon fa fa-caret-right"></i>
									竞争对手
								</a>
								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="echart_blank.html">
									<i class="menu-icon fa fa-caret-right"></i>
									销售漏斗
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>					
	

<!-- 订单管理 -->				
					<li class="">
						<a data-url="page/order_list" href="ajax.html#page/order_list">
							<i class="menu-icon fa fa-file-text-o"></i>
							<span class="menu-text">合同/订单</span>
						</a>
						<b class="arrow"></b>

					</li>					

<!-- 工具 -->				
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-cog"></i>
							<span class="menu-text">工具</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a data-url="page/calendar_list" href="ajax.html#page/calendar_list">
									<i class="menu-icon fa fa-caret-right"></i>
									日程
								</a>
								<b class="arrow"></b>
							</li>

							<li class="">
								<a data-url="page/email_list" href="ajax.html#page/email_list">
									<i class="menu-icon fa fa-caret-right"></i>
									邮件
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									日报/周报
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									信息公告
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>


<!-- 系统管理 -->					
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">系统管理 </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
									权限管理
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<ul class="submenu">
								<li class="">
									<a data-url="page/role_list" href="ajax.html#page/role_list">
										<i class="menu-icon fa fa-caret-right"></i>
										角色管理
									</a>
									<b class="arrow"></b>
								</li>
                                                                <li class="">
									<a data-url="page/backend_dictionary_list" href="ajax.html#page/backend_dictionary_list">
										<i class="menu-icon fa fa-caret-right"></i>
										参数配置
									</a>
									<b class="arrow"></b>
								</li>

								<li class="">
									<a data-url="page/dept_list" href="ajax.html#page/dept_list">
										<i class="menu-icon fa fa-caret-right"></i>
										部门管理
									</a>
									<b class="arrow"></b>
								</li>

								<li class="">
									<a data-url="page/resource_list" href="ajax.html#page/resource_list">
										<i class="menu-icon fa fa-caret-right"></i>
										资源管理
									</a>
									<b class="arrow"></b>
								</li>

								<li class="">
									<a data-url="page/admin_list" href="ajax.html#page/admin_list">
										<i class="menu-icon fa fa-caret-right"></i>
										用户管理
									</a>
									<b class="arrow"></b>
								</li>
							</ul>
						    </li>
								

							<li class="">
								<a data-url="page/backend_dictionary_list" href="ajax.html#page/backend_dictionary_list">
									<i class="menu-icon fa fa-caret-right"></i>
									系统设置
								</a>
								<b class="arrow"></b>
							</li>
<!-- 基础数据 -->
							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
									基础数据
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<ul class="submenu">
									<li class="">
										<a data-url="page/demo_dictionary" href="ajax.html#page/demo_dictionary">
											<i class="menu-icon fa fa-caret-right"></i>
											数据字典
										</a>
										<b class="arrow"></b>
									</li>

									<li class="">
										<a data-url="page/process_model" href="ajax.html#page/process_model">
											<i class="menu-icon fa fa-caret-right"></i>
											<span class="menu-text">过程模型</span>
										</a>
										<b class="arrow"></b>
									</li>
									
									<li class="">
										<a data-url="page/area_list" href="ajax.html#page/area_list">
											<i class="menu-icon fa fa-caret-right"></i>
											<span class="menu-text">地区信息</span>
										</a>
										<b class="arrow"></b>
									</li>
									
									<li class="">
										<a data-url="page/rate_list" href="ajax.html#page/rate_list">
											<i class="menu-icon fa fa-caret-right"></i>
											货币汇率
										</a>
										<b class="arrow"></b>
									</li>
				
									<li class="">
										<a data-url="page/unit_list" href="ajax.html#page/unit_list">
											<i class="menu-icon fa fa-caret-right"></i>
											计量单位
										</a>
										<b class="arrow"></b>
									</li>
									<li class="">
										<a data-url="page/stock_list" href="ajax.html#page/stock_list">
											<i class="menu-icon fa fa-caret-right"></i>
											库存信息
										</a>
										<b class="arrow"></b>
									</li>
								</ul>
							
						    </li>
<!-- 产品信息 -->
							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
									<span class="menu-text">产品管理</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
											<a data-url="page/producttype_list" href="ajax.html#page/producttype_list">
											<i class="menu-icon fa fa-caret-right"></i>
											产品分类
										</a>
										<b class="arrow"></b>
									</li>
									<li class="">
										<a data-url="page/product_list" href="ajax.html#page/product_list">
											<i class="menu-icon fa fa-caret-right"></i>
											产品信息
										</a>
										<b class="arrow"></b>
									</li>
									<li class="">
										<a data-url="page/stock_list" href="ajax.html#page/stock_list">
											<i class="menu-icon fa fa-caret-right"></i>
											库存信息
										</a>
										<b class="arrow"></b>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					
<!-- 报表分析 -->	
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-book"></i>
							<span class="menu-text">报表分析</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a data-url="#" href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									线索分析与统计
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a data-url="#" href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									客户分析与统计
								</a>
								<b class="arrow"></b>
							</li>

							<li class="">
								<a data-url="#" href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									销售过程分析与统计
								</a>
								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a data-url="#" href="#"
									<i class="menu-icon fa fa-caret-right"></i>
									订单分析与统计
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
	<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text"> UI示例</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a data-url="page/liebiaoye" href="index.html#page/liebiaoye">
									<i class="menu-icon fa fa-caret-right"></i>
									列表页
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a data-url="page/liebiaoye2" href="index.html#page/liebiaoye2">
									<i class="menu-icon fa fa-caret-right"></i>
									列表页2
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a data-url="page/tianjia" href="index.html#page/tianjia">
									<i class="menu-icon fa fa-caret-right"></i>
									添加页
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a data-url="page/tianjia2" href="index.html#page/tianjia2">
									<i class="menu-icon fa fa-caret-right"></i>
									添加页2
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a data-url="page/biaoqian" href="index.html#page/biaoqian">
									<i class="menu-icon fa fa-caret-right"></i>
									查看页
								</a>

								<b class="arrow"></b>
							</li>

							
							<li class="">
								<a data-url="page/liucheng2" href="index.html#page/liucheng2">
									<i class="menu-icon fa fa-caret-right"></i>
									流程页2
								</a>

								<b class="arrow"></b>
							</li>
						
							<li class="">
								<a  data-url="page/kongzhitai" href="index.html#page/kongzhitai">
									<i class="menu-icon fa fa-caret-right"></i>

									控制台
									
								</a>

								<b class="arrow"></b>

								
							</li>
							
							<li class="">
								<a  data-url="page/shijianbiao" href="index.html#page/shijianbiao">
									<i class="menu-icon fa fa-caret-right"></i>

									时间表
									
								</a>

								<b class="arrow"></b>

								
							</li>
							<li class="">
								<a  data-url="page/salesopp_listxx" href="index.html#page/salesopp_listxx">
									<i class="menu-icon fa fa-caret-right"></i>

									时间表22222
									
								</a>

								<b class="arrow"></b>

								
							</li>
							
							
							<li class="">
								<a  data-url="page/yingyong" href="index.html#page/yingyong">
									<i class="menu-icon fa fa-caret-right"></i>

									应用
									
								</a>

								<b class="arrow"></b>

								
							</li>
							<li class="">
								<a  data-url="page/chakanxx" href="index.html#page/chakanxx">
									<i class="menu-icon fa fa-caret-right"></i>

									查看信息
									
								</a>

								<b class="arrow"></b>

								
							</li>
							<li class="">
								<a  data-url="page/treeview" href="index.html#page/treeview">
									<i class="menu-icon fa fa-caret-right"></i>

									树
									
								</a>
								<b class="arrow"></b>
							</li>

							<li class="">
								<a  data-url="page/tanchuangye" href="index.html#page/tanchuangye">
									<i class="menu-icon fa fa-caret-right"></i>

									弹窗页
									
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					
				</ul><!-- /.nav-list -->

				<!-- #section:basics/sidebar.layout.minimize -->
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<!-- /section:basics/sidebar.layout.minimize -->
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>

			<!-- /section:basics/sidebar -->
			<div class="main-content">
				<!-- #section:basics/content.breadcrumbs -->
				<div class="breadcrumbs" id="breadcrumbs">
					<script type="text/javascript">
						try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
					</script>

					<ul class="breadcrumb">
						<li>
							<i class="ace-icon fa fa-home home-icon"></i>
							<a href="#">主页</a>
						</li>
					</ul><!-- /.breadcrumb -->

					<!-- #section:basics/content.searchbox -->
					<div class="nav-search" id="nav-search">
						<form class="form-search">
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
								<i class="ace-icon fa fa-search nav-search-icon"></i>
							</span>
						</form>
					</div><!-- /.nav-search -->

					<!-- /section:basics/content.searchbox -->
				</div>

				<!-- /section:basics/content.breadcrumbs -->
				<div class="page-content">
					<!-- #section:settings.box -->
					<div class="ace-settings-container" id="ace-settings-container">
						<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
							<i class="ace-icon fa fa-cog bigger-150"></i>
						</div>

						<div class="ace-settings-box clearfix" id="ace-settings-box">
							<div class="pull-left width-50">
								<!-- #section:settings.skins -->
								<div class="ace-settings-item">
									<div class="pull-left">
										<select id="skin-colorpicker" class="hide">
											<option data-skin="no-skin" value="#438EB9">#438EB9</option>
											<option data-skin="skin-1" value="#222A2D">#222A2D</option>
											<option data-skin="skin-2" value="#C6487E">#C6487E</option>
											<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
										</select>
									</div>
									<span>&nbsp; 选择皮肤</span>
								</div>

								<!-- /section:settings.skins -->

								<!-- #section:settings.navbar -->
								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
									<label class="lbl" for="ace-settings-navbar"> 固定导航栏</label>
								</div>

								<!-- /section:settings.navbar -->

								<!-- #section:settings.sidebar -->
								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
									<label class="lbl" for="ace-settings-sidebar">固定侧边栏</label>
								</div>

								<!-- /section:settings.sidebar -->

								<!-- #section:settings.breadcrumbs -->
								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
									<label class="lbl" for="ace-settings-breadcrumbs">固定的面包屑</label>
								</div>

								<!-- /section:settings.breadcrumbs -->

								<!-- #section:settings.rtl -->
								

								<!-- /section:settings.rtl -->

								<!-- #section:settings.container -->
								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
									<label class="lbl" for="ace-settings-add-container">
										居中显示
										
									</label>
								</div>

								<!-- /section:settings.container -->
							</div><!-- /.pull-left -->

							<div class="pull-left width-50">
								<!-- #section:basics/sidebar.options -->
								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" />
									<label class="lbl" for="ace-settings-hover">子菜单</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" />
									<label class="lbl" for="ace-settings-compact"> 紧凑侧边栏</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" />
									<label class="lbl" for="ace-settings-highlight"> 活动项目</label>
								</div>

								<!-- /section:basics/sidebar.options -->
							</div><!-- /.pull-left -->
						</div><!-- /.ace-settings-box -->
					</div><!-- /.ace-settings-container -->

					<!-- /section:settings.box -->
					<div class="page-content-area">
						<!-- ajax content goes here -->
					</div><!-- /.page-content-area -->
				</div><!-- /.page-content -->
			</div><!-- /.main-content -->

		
			
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='/Public/Admin/LingUI/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='/Public/Admin/LingUI/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='/Public/Admin/LingUI/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="/Public/Admin/LingUI/js/bootstrap.min.js"></script>
	
		<!-- ace scripts -->
		<script src="/Public/Admin/LingUI/js/lui-elements.min.js"></script>
		<script src="/Public/Admin/LingUI/js/lui.min.js"></script>
			<script src="/Public/Admin/LingUI/js/jquery.pin.min.js"></script>
		
		<script type="text/javascript">
			//Load content via ajax
					jQuery(function($) {
					  if('enable_ajax_content' in ace) {
						var options = {
						  content_url: function(url) {
							//this is for Ace demo only, you should change it
							//please refer to documentation for more info
						
							if(!url.match(/^page\//)) return false;
							
							var path = document.location.pathname;
							
							//for Ace HTML demo version, convert ajax.html#page/gallery to > gallery.html and load it
							if(path.match(/index\.html/)) return path.replace(/index\.html/, url.replace(/^page\//, '')+'.html') ;
					
							//for Ace PHP demo version convert "page/dashboard" to "?page=dashboard" and load it
							return path + "?" + url.replace(/\//, "=");
						  },
						  default_url: 'index.html#page/kongzhitai'//default url
						}
						ace.enable_ajax_content($, options)
					  }
					    
					})
		</script>
		
    
		<script>
			new UISearch( document.getElementById( 'sb-search' ) );
		</script>
	
	</body>
</html>