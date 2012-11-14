<?php
defined('_JEXEC') or die?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/style.css" type="text/css" />
    <script type="text/javascript" src="/templates/geekhub/js/jquery-1.6.4.min.js"></script>
    <script type="text/javascript" src="/templates/geekhub/js/stepcarousel.js"></script>
    <script type="text/javascript" src="http://userapi.com/js/api/openapi.js?34"></script>

</head>
    <body>
    <div id="wrap">
        <div id="header">
            <h1><a href="/">GeekHub</a></h1>

                <jdoc:include type="modules" name="mainmenu" />

                <jdoc:include type="modules" name="social" />

        </div><!-- header -->
        <div id="content">
                <jdoc:include type="component" />
        </div><!-- content -->
        <ul id="footer">
            <li>
                    <jdoc:include type="modules" name="mainmenu" />
            </li>
            <li>© Copyright 2011</li>
        </ul>
    </div>
</body>
</html>