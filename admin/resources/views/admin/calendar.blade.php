<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>日历页面</title>
<link rel="stylesheet" href="admins/css/style.default.css" type="text/css" />
<script type="text/javascript" src="admins/js/plugins/jquery-1.5.2.min.js"></script>
<script type="text/javascript" src="admins/js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="admins/js/plugins/jquery.cookie.js"></script>
<script type='text/javascript' src='admins/js/plugins/fullcalendar.min.js'></script>
<script type="text/javascript" src="admins/js/custom/general.js"></script>
<script type="text/javascript" src="admins/js/custom/calendar.js"></script>
<!--[if IE 9]>
    <link rel="stylesheet" media="screen" href="admins/css/style.ie9.css"/>
<![endif]-->
<!--[if IE 8]>
    <link rel="stylesheet" media="screen" href="admins/css/style.ie8.css"/>
<![endif]-->
<!--[if lt IE 9]>
	<script src="admins/js/plugins/css3-mediaqueries.js"></script>
<![endif]-->
</head>

<body class="withvernav">
<div class="bodywrapper">
    @include('admin.header')
    @include('admin.leftmenu') <!-- 左侧菜单 -->
        
    <div class="centercontent">
    
        <div class="pageheader notab">
            <h1 class="pagetitle">Calendar</h1>
            <span class="pagedesc">This is a sample description of a page</span>
        </div><!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper withrightpanel">
        
        	<div id="calendar"></div>
        
        </div><!--contentwrapper-->
        
        <div class="rightpanel">
        	<div class="rightpanelinner">
                <div class="widgetbox">
                	<div class="title"><h4>Events</h4></div>
                    <div class="widgetcontent">
                    	<div id="external-events">
                            <div class="external-event">My friend's birthday event</div>
                            <div class="external-event">My wedding</div>
                            <div class="external-event">Company party</div>
                            <div class="external-event">Island hopping event</div>
                            <div class="external-event">Fun run event</div>
                            <p>Drag the events to the calendar to set a schedule.</p>
                        </div>  
                        
                    </div><!--widgetcontent-->
                </div><!--widgetbox-->
            </div><!--rightpanelinner-->
        </div><!--rightpanel-->
        
	</div><!-- centercontent -->
    
    
</div><!--bodywrapper-->

</body>
</html>
