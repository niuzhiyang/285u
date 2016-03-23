<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Editor | Amanda Admin Template</title>
<link rel="stylesheet" href="admins/css/style.default.css" type="text/css" />
<script type="text/javascript" src="admins/js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="admins/js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="admins/js/plugins/jquery.cookie.js"></script>
<script type="text/javascript" src="admins/js/plugins/tinymce/jquery.tinymce.js"></script>
<script type="text/javascript" src="admins/js/custom/general.js"></script>
<script type="text/javascript" src="admins/js/custom/editor.js"></script>
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
    
        <div class="pageheader">
            <h1 class="pagetitle">WYSIWYG Editor</h1>
            <span class="pagedesc">This editor is powered by TinyMce editor</span>
            
            <ul class="editornav">
                <li class="current"><a class="visual">Visual</a></li>
                <li><a class="html" onclick="jQuery('#elm1').tinymce().hide();return false;">HTML</a></li>
            </ul>

        </div><!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper">
        
            <form method="post" action="http://tinymce.moxiecode.com/dump.php?example=true">
                <div>
            
                    <!-- Gets replaced with TinyMCE, remember HTML in a textarea should be encoded -->
                    <div>
                        <textarea id="elm1" name="elm1" rows="15" cols="80" style="width: 80%" class="tinymce">
                            &lt;p&gt;
                                This is some example text that you can edit inside the &lt;strong&gt;TinyMCE editor&lt;/strong&gt;.
                            &lt;/p&gt;
                        </textarea>
                    </div>
            
            
                    <br /><br />
                    <input type="submit" name="save" value="Submit" />
                    <input type="reset" name="reset" value="Reset" />
                </div>
                <br /><br />
            </form>

        </div><!--contentwrapper-->
        
	</div><!-- centercontent -->
    
    
</div><!--bodywrapper-->
<script type="text/javascript">
if(document.location.protocol == 'file:') {
	alert("The examples might not work properly on the local file system due to security settings in your browser. Please use a real webserver.");
}
</script>
</body>
</html>
