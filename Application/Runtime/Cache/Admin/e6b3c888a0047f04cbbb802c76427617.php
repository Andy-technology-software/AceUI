<?php if (!defined('THINK_PATH')) exit();?><title>控制台</title>
<link rel="stylesheet" href="/Public/Admin/LingUI/css/fullcalendar.css" />
<link rel="stylesheet"   href="/Public/Admin/LingUI/css/jquery-ui.custom.min.css" />

 <style>  
a {  /*去除 链接 的 虚线框*/
blr:expression(this.onFocus=this.blur());
}

：
a { 
outline: none;
} 
 
a:focus { 
outline: none; 
} 
</style>
<div class="row">
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->

                <!-- 创建时间 1月23号  9:14分-->

                <div class="col-sm-12  b_xsgl">
                    <!-- 销售管理部分   begin-->

                    <div class="widget-box transparent fby_222">
                        <div class="widget-header widget-header-flat">
                            <h4 class="widget-title lighter">
													<i class="ace-icon fa fa-inbox grey"></i>
													销售管理
												</h4>

                            <div class="widget-toolbar">
                                <a href="#" data-action="collapse">
                                    <i class="ace-icon fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <!--   header  end-->

                        <div class="widget-body   b_sxgl_con">
                            <div class="widget-main no-padding">

                                
                       

                                <div class="infobox     infobox-dark   col-lg-2 col-md-3 col-sm-4 col-xs-6" style="background:#98CEF2;">
                                    <div class="infobox-progress  b_jdt">
                                        <div class="easy-pie-chart percentage1" data-percent="15" data-color="#fff" data-size="48">
                                            <span class="percent">15</span>%
                                        </div>
                                    </div>
                                    <div class="infobox-data b_wz">
                                        <div class="infobox-content  b_wz1">
                                        	<a class="infobox-content  b_wz1" data-url="page/salesopp_list" href="ajax.html#page/market_list">我的销售1</a></div>
                                        <div class="infobox-content  b_wz2">当前进度：市场</div>
                                    </div>
                                </div>
                                <!-- 1   end-->

                                <div class="infobox   infobox-dark   col-lg-2 col-md-3 col-sm-4 col-xs-6" style="background:#FF956E">
                                    <div class="infobox-progress  b_jdt">
                                        <div class="easy-pie-chart percentage2" data-percent="65" data-size="48" data-color="#fff">
                                            <span class="percent">65</span>%
                                        </div>
                                    </div>

                                    <div class="infobox-data  b_wz" style="padding-left:15px;">
                                     <div class="infobox-content  b_wz1">
                                        <a class="infobox-content  b_wz1" data-url="page/salesopp_list" href="ajax.html#page/demo_liucheng">我的销售2</a></div>
                                        <div class="infobox-content  b_wz2">当前进度：交付</div>
                                    </div>
                                </div>
                                <!-- 2   end-->

                                <div class="infobox infobox-green  infobox  infobox-dark col-lg-2 col-md-3 col-sm-4 col-xs-6" style="background:#A5CA9F">
                                    <div class="infobox-progress   b_jdt">
                                        <div class="easy-pie-chart percentage3" data-percent="40" data-size="48" data-color="#fff">
                                            <span class="percent">90</span>%
                                        </div>
                                    </div>

                                    <div class="infobox-data  b_wz" style="padding-left:15px;">
                                        <div class="infobox-content  b_wz1">
                                        <a class="infobox-content  b_wz1" data-url="page/salesopp_list" href="ajax.html#page/demo_liucheng">我的销售3</a></div>
                                        <div class="infobox-content  b_wz2">当前进度：回款</div>
                                    </div>
                                </div>
                                <!-- 3   end-->


                                <div class="infobox infobox-grey  infobox  infobox-dark   col-lg-2 col-md-3 col-sm-4 col-xs-6" style="background:#C5C5C5">
                                    <div class="infobox-progress  b_jdt">
                                        <div class="easy-pie-chart percentage4" data-percent="75" data-size="48" data-color="#fff">
                                            <span class="percent">65</span>%
                                        </div>
                                    </div>
                                    <div class="infobox-data  b_wz" style="padding-left:15px;">
                                        <div class="infobox-content b_wz1">
                                        <a class="infobox-content  b_wz1" data-url="page/salesopp_list" href="ajax.html#page/demo_liucheng">我的销售4</a></div>
                                        <div class="infobox-content b_wz2">当前进度：合同/订单</div>
                                    </div>
                                </div>
                                <!-- 4   end-->

                                <div class="infobox infobox-orange  infobox  infobox-dark   col-lg-2 col-md-3 col-sm-4 col-xs-6" style="background:#FEC97D">
                                    <div class="infobox-progress  b_jdt">
                                        <div class="easy-pie-chart percentage5" data-percent="50" data-size="48" data-color="#fff">
                                            <span class="percent">50</span>%
                                        </div>
                                    </div>

                                    <div class="infobox-data  b_wz" style="padding-left:15px;">
                                        <div class="infobox-content   b_wz1">
                                        <a class="infobox-content  b_wz1" data-url="page/salesopp_list" href="ajax.html#page/salesopp_list">我的销售5</a></div>
                                        <div class="infobox-content   b_wz2">当前进度：销售机会</div>
                                    </div>
                                </div>
                                <!-- 5   end-->
                                
                               
                                <div class="b_tjgl  col-md-2">
                                    <a href="#"  style="width:169px; height:78px; display:block;margin-left:-11px;">
                                    <i class="fa fa-plus-square  fa-4x greyxx"></i>
                                    <span class="b_tjxs">添加销售</span>
                                    </a>
                                </div>
                                
                                

                            </div>

                        </div>
                        <!-- /.widget-main -->
                    </div>
                    <!-- /.widget-body -->
                </div>
                <!-- /.widget-box -->
                <!-- 销售管理  end-->
            </div>


            <div class="col-lg-12">

                <div class="col-sm-6">
                    <!-- 销售漏斗  begin-->
                    <div id="widget_xsld" class="widget-box transparent  b_padding ">
                        <div class="widget-header widget-header-flat">
                            <h4 class="widget-title lighter">
													<i class="ace-icon fa fa-filter green"></i>
													销售漏斗
												</h4>

                            <div class="widget-toolbar">
                                <a href="#"><i class="fa fa-cog"></i></a>
                                <a href="#"><i class="fa fa-refresh green"></i></a> 
                                <a href="#" data-action="collapse"><i class="ace-icon fa fa-chevron-up"></i></a>	
                                <a href="#"><i class="fa fa-times red"></i></a>
                            </div>
                        </div>

                        <div class="widget-body    ">
                            <div id="main" class="widget-main no-padding">
                                <img src="..//Public/Admin/LingUI/images/loudou.jpg" style="margin-top:135px;"><!---->
                            </div>
                            <!-- /.widget-main -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-box -->
                    <!-- 销售漏斗  end-->
                </div>


                <div class="col-sm-6">
                    <!-- 我的日程  begin-->
                    <div class="widget-box transparent  b_padding">
                        <div class="widget-header widget-header-flat">
                            <h4 class="widget-title lighter">
													<i class="fa fa-pencil-square-o"></i>
													我的日程
												</h4>

                            <div class="widget-toolbar">
                                <a href="#"><i class="fa fa-cog"></i></a>
                                <a href="#"><i class="fa fa-refresh green"></i></a> 
                                <a href="#" data-action="collapse"><i class="ace-icon fa fa-chevron-up"></i></a>	
                                <a href="#"><i class="fa fa-times red"></i></a>
                            </div>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main no-padding">


                                <div class="space"></div>

                                <div id="calendar"></div>



                            </div>
                            <!-- /.widget-main -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-box -->
                    <!-- 我的日程  end-->
                </div>
            </div>


            <div class="col-lg-12">
                <div class="col-sm-6">
                    <!-- 我的客户  begin-->
                    <div class="widget-box transparent  b_padding">
                        <div class="widget-header widget-header-flat">
                            <h4 class="widget-title lighter">
													<i class="fa fa-user"></i>
													我的客户
												</h4>

                            <div class="widget-toolbar">
                                <a href="#"><i class="fa fa-cog"></i></a>
                                <a href="#"><i class="fa fa-refresh green"></i></a> 
                                <a href="#" data-action="collapse"><i class="ace-icon fa fa-chevron-up"></i></a>	
                                <a href="#"><i class="fa fa-times red"></i></a>
                            </div>
                        </div>

                        <div class="widget-body   b_word-main">
                            <div class="widget-main no-padding">
                                <table class="table table-bordered table-striped">
                                    <thead class="thin-border-bottom">
                                        <tr style="background:#EAF5FB">
                                            <th>
                                                <i class="ace-icon fa fa-caret-right blue"></i>客户名称
                                            </th>

                                            <th>
                                                <i class="ace-icon fa fa-caret-right blue"></i>联系人电话
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>新东方电子</td>
                                            <td><a href="#">王董 139-xxxx-xxxx</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>海信</td>
                                            <td><a href="#">陈经理 183-xxxx-xxxx</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>小天鹅</td>
                                            <td> <a href="#">石xx  139-xxxx-xxxx</a>
                                            </td>
                                        </tr>
                                         <tr>
                                            <td>小天鹅</td>
                                            <td> <a href="#">石xx  139-xxxx-xxxx</a>
                                            </td>
                                        </tr>
                                          <tr>
                                            <td>小天鹅</td>
                                            <td> <a href="#">石xx  139-xxxx-xxxx</a>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.widget-main -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-box -->
                    <!-- 我的客户  end-->
                </div>

               
                <div class="col-sm-6">
                    <!-- 我的销售机会  begin-->
                    <div class="widget-box transparent  b_padding">
                        <div class="widget-header widget-header-flat">
                            <h4 class="widget-title lighter">
													<i class="fa fa-star orange"></i>
													我的销售机会
												</h4>

                            <div class="widget-toolbar">
                                <a href="#"><i class="fa fa-cog"></i></a>
                                <a href="#"><i class="fa fa-refresh green"></i></a> 
                                <a href="#" data-action="collapse"><i class="ace-icon fa fa-chevron-up"></i></a>	
                                <a href="#"><i class="fa fa-times red"></i></a>
                            </div>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main no-padding">
                                <table class="table table-bordered table-striped">
                                    <thead class="thin-border-bottom">
                                        <tr style="background:#FFF4E6">
                                            <th>
                                                <i class="ace-icon fa fa-caret-right blue"></i>名称
                                            </th>

                                            <th>
                                                <i class="ace-icon fa fa-caret-right blue"></i>当前进度
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>世纪天华ERP旗舰版</td>
                                            <td><a href="#">需求分析</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>世纪天华CRM灵动版</td>
                                            <td><a href="#">方案制定</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>物联传感CRM</td>
                                            <td><a href="#">签订合同</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>物联传感ERP</td>
                                            <td><a href="#">商务谈判</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>物联传感ERP</td>
                                            <td><a href="#">商务谈判</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.widget-main -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-box -->
                    <!-- 我的销售机会  end-->
                </div>


              
              

                    
                                   

            </div>

            <div class="col-lg-12">

               

                <div class="col-sm-6">
                    <!-- 我的合同/订单  begin-->
                    <div class="widget-box transparent  b_padding">
                        <div class="widget-header widget-header-flat">
                            <h4 class="widget-title lighter">
													<i class="fa fa-file-text green"></i>
													我的合同/订单
												</h4>

                            <div class="widget-toolbar">
                                <a href="#"><i class="fa fa-cog"></i></a>
                                <a href="#"><i class="fa fa-refresh green"></i></a> 
                                <a href="#" data-action="collapse"><i class="ace-icon fa fa-chevron-up"></i></a>	
                                <a href="#"><i class="fa fa-times red"></i></a>
                            </div>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main no-padding">
                                <table class="table table-bordered table-striped">
                                    <thead class="thin-border-bottom">
                                        <tr style="background:#F0F5DF">
                                            <th>
                                                <i class="ace-icon fa fa-caret-right blue"></i>名称
                                            </th>

                                            <th>
                                                <i class="ace-icon fa fa-caret-right blue"></i>状态
                                            </th>
                                                 <th>
                                                <i class="ace-icon fa fa-caret-right blue"></i>截止日期
                                            </th>

                                            <th>
                                                <i class="ace-icon fa fa-caret-right blue"></i>倒计时
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>世纪天华 ERP旗舰版 </td>
                                            <td><a href="#">待交付 </a></td>
                                            <td>2015-01-31</td>
                                            <td>4天</td>
                                        </tr>
                                        <tr>
                                            <td>世纪天华CRM旗舰版 </td>
                                            <td><a href="#">待交付 </a> </td>
                                             <td>2015-02-31</td>
                                            <td>32天</td>
                                        </tr>
                                        <tr>
                                            <td>物联传感 e-HR</td>
                                            <td><a href="#">待回款 </a></td>
                                            <td>2015-02-11</td>
                                            <td>15天</td>
                                        </tr>
                                        <tr>
                                            <td> 用友 e-HR </td>
                                            <td><a href="#">待交付</a></td>
                                            <td>2015-03-01</td>
                                            <td>33天</td>
                                        </tr>
                                          <tr>
                                            <td> 用友 e-HR </td>
                                            <td><a href="#">待交付</a></td>
                                            <td>2015-03-01</td>
                                            <td>33天</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.widget-main -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-box -->
                    <!-- 我的合同/订单  end-->
                </div>
            </div>

            <div class="col-lg-12">

               <!-- <div class="col-sm-6">
                    <!-- 我的活动市场  begin-->
                 <!--   <div class="widget-box transparent  b_padding">
                        <div class="widget-header widget-header-flat">
                            <h4 class="widget-title lighter">
													<i class="fa fa-shopping-cart   purple"></i>
													我的市场活动
												</h4>

                            <div class="widget-toolbar">
                                <a href="#"><i class="fa fa-cog"></i></a>
                                <a href="#"><i class="fa fa-refresh green"></i></a> 
                                <a href="#" data-action="collapse"><i class="ace-icon fa fa-chevron-up"></i></a>	
                                <a href="#"><i class="fa fa-times red"></i></a>
                            </div>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main no-padding">
                                <table class="table table-bordered table-striped ">
                                    <thead class="thin-border-bottom">
                                        <tr style="background:#F2E5EF">
                                            <th>
                                                <i class="ace-icon fa fa-caret-right blue"></i>类别
                                            </th>

                                            <th>
                                                <i class="ace-icon fa fa-caret-right blue"></i>活动说明
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>进行中</td>
                                            <td><a href="#">XXXX会议营销 2015-01-10 至今停留6天</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>进行中</td>
                                            <td><a href="#">XXXX现场活动2015-01-10 至今停留六天</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>进行中</td>
                                            <td><a href="#">XXXX网络会议2015-01-10 至今停留6天</a>
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>-->
                            <!-- /.widget-main -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-box -->
                    <!-- 我的活动市场  end-->
                </div>
            </div>
            <!-- PAGE CONTENT ENDS -->
        </div>
        
        
        
<script type="text/javascript">
    var scripts = [null,
              "/Public/Admin/LingUI/js/jquery-ui.custom.min.js",
			   "/Public/Admin/LingUI/js/jquery.easypiechart.min.js",
               "/Public/Admin/LingUI/js/moment.min.js",
               "/Public/Admin/LingUI/js/fullcalendar.min.js",
              "/Public/Admin/LingUI/js/bootbox.min.js",
               null];
   
    ace.load_ajax_scripts(scripts, function() {
    //$('#widget_xsld').widget_box('collapse');
    var oldie = /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase());
    $('.easy-pie-chart.percentage1').each(function () {
        $(this).easyPieChart({
            barColor: $(this).data('color'),
            trackColor: '#7BB6DE',
            scaleColor: false,
            lineCap: 'butt',
            lineWidth: 8,
            animate: oldie ? false : 1000,
            size: 75
        }).css('color', $(this).data('color'));
    });

    $('.easy-pie-chart.percentage2').each(function () {
        $(this).easyPieChart({
            barColor: $(this).data('color'),
            trackColor: '#E3825A',
            scaleColor: false,
            lineCap: 'butt',
            lineWidth: 8,
            animate: oldie ? false : 1000,
            size: 75
        }).css('color', $(this).data('color'));
    });

    $('.easy-pie-chart.percentage3').each(function () {
        $(this).easyPieChart({
            barColor: $(this).data('color'),
            trackColor: '#88B284',
            scaleColor: false,
            lineCap: 'butt',
            lineWidth: 8,
            animate: oldie ? false : 1000,
            size: 75
        }).css('color', $(this).data('color'));
    });

    $('.easy-pie-chart.percentage4').each(function () {
        $(this).easyPieChart({
            barColor: $(this).data('color'),
            trackColor: '#AFAFAF',
            scaleColor: false,
            lineCap: 'butt',
            lineWidth: 8,
            animate: oldie ? false : 1000,
            size: 75
        }).css('color', $(this).data('color'));
    });

    $('.easy-pie-chart.percentage5').each(function () {
        $(this).easyPieChart({
            barColor: $(this).data('color'),
            trackColor: '#EEB566',
            scaleColor: false,
            lineCap: 'butt',
            lineWidth: 8,
            animate: oldie ? false : 1000,
            size: 75
        }).css('color', $(this).data('color'));
    });
    
     jQuery(function ($) {
        /* initialize the external events
	-----------------------------------------------------------------*/

        $('#external-events div.external-event').each(function () {

            // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
            // it doesn't need to have a start or end
            var eventObject = {
                title: $.trim($(this).text()) // use the element's text as the event title
            };

            // store the Event Object in the DOM element so we can get to it later
            $(this).data('eventObject', eventObject);

            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 999,
                revert: true, // will cause the event to go back to its
                revertDuration: 0 //  original position after the drag
            });

        });

        /* initialize the calendar
	-----------------------------------------------------------------*/

        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();


        var calendar = $('#calendar').fullCalendar({
            //isRTL: true,
            buttonHtml: {
                prev: '<i class="ace-icon fa fa-chevron-left"></i>',
                next: '<i class="ace-icon fa fa-chevron-right"></i>'
            },

            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            events: [
                {
                    title: 'All Day Event',
                    start: new Date(y, m, 1),
                    className: 'label-important'
    },
                {
                    title: 'Long Event',
                    start: new Date(y, m, d - 5),
                    end: new Date(y, m, d - 2),
                    className: 'label-success'
    },
                {
                    title: 'Some Event',
                    start: new Date(y, m, d - 3, 16, 0),
                    allDay: false
    }
  ],
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar !!!
            drop: function (date, allDay) { // this function is called when something is dropped

                // retrieve the dropped element's stored Event Object
                var originalEventObject = $(this).data('eventObject');
                var $extraEventClass = $(this).attr('data-class');


                // we need to copy it, so that multiple events don't have a reference to the same object
                var copiedEventObject = $.extend({}, originalEventObject);

                // assign it the date that was reported
                copiedEventObject.start = date;
                copiedEventObject.allDay = allDay;
                if ($extraEventClass) copiedEventObject['className'] = [$extraEventClass];

                // render the event on the calendar
                // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }

            },
            selectable: true,
            selectHelper: true,
            select: function (start, end, allDay) {

                bootbox.prompt("New Event Title:", function (title) {
                    if (title !== null) {
                        calendar.fullCalendar('renderEvent', {
                                title: title,
                                start: start,
                                end: end,
                                allDay: allDay
                            },
                            true // make the event "stick"
                        );
                    }
                });


                calendar.fullCalendar('unselect');
            },
            eventClick: function (calEvent, jsEvent, view) {

                //display a modal
                var modal =
                    '<div class="modal fade">\
			  <div class="modal-dialog">\
			   <div class="modal-content">\
				 <div class="modal-body">\
				   <button type="button" class="close" data-dismiss="modal" style="margin-top:-10px;">&times;</button>\
				   <form class="no-margin">\
					  <label>Change event name &nbsp;</label>\
					  <input class="middle" autocomplete="off" type="text" value="' + calEvent.title + '" />\
					 <button type="submit" class="btn btn-sm btn-success"><i class="ace-icon fa fa-check"></i> Save</button>\
				   </form>\
				 </div>\
				 <div class="modal-footer">\
					<button type="button" class="btn btn-sm btn-danger" data-action="delete"><i class="ace-icon fa fa-trash-o"></i> Delete Event</button>\
					<button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Cancel</button>\
				 </div>\
			  </div>\
			 </div>\
			</div>';


                var modal = $(modal).appendTo('body');
                modal.find('form').on('submit', function (ev) {
                    ev.preventDefault();

                    calEvent.title = $(this).find("input[type=text]").val();
                    calendar.fullCalendar('updateEvent', calEvent);
                    modal.modal("hide");
                });
                modal.find('button[data-action=delete]').on('click', function () {
                    calendar.fullCalendar('removeEvents', function (ev) {
                        return (ev._id == calEvent._id);
                    })
                    modal.modal("hide");
                });

                modal.modal('show').on('hidden', function () {
                    modal.remove();
                });


                //console.log(calEvent.id);
                //console.log(jsEvent);
                //console.log(view);

                // change the border color just for fun
                //$(this).css('border-color', 'red');

            }

        });
      

    });
});

   
</script>