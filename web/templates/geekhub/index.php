<?php
defined('_JEXEC') or die;
$menu = & JSite::getMenu();
//Получили главное меню
//
//Если мы находимся в главном пунтке,
if ($menu->getActive() == $menu->getDefault()) {
//то переменная fpage будет хранить единицу.
    $fpage="1";
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>

    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/style.css" type="text/css" />
    <script type="text/javascript" src="../js/jquery-1.6.4.min.js"></script>
    <script type="text/javascript" src="../js/stepcarousel.js"></script>
    <script type="text/javascript" src="http://userapi.com/js/api/openapi.js?34"></script>
    <meta name="description" content="GeekHub надає можливість отримати практичні знання та навички в сфері розробки програмного забезпечення">
    <meta name="keywords" content="GeekHub, ГікХаб, Черкаси, Cherkassy">

</head>
    <body <?php
          if ($fpage=="1") echo 'class="inner"';
          ?>>
    <div id="wrap">
        <div id="header" >
            <h2><a href="/">GeekHub</a></h2>

                <jdoc:include type="modules" name="mainmenu" />

                <jdoc:include type="modules" name="social" />

                <jdoc:include type="modules" name="home" />
        </div><!-- header -->
        <div id="content">
            <div class="<?php if($_SERVER['REQUEST_URI'] == '/'){echo 'home';}
            if(($_SERVER['REQUEST_URI'] == '/index.php/about') or ($_SERVER['REQUEST_URI'] == '/index.php/sertyfikovani-profesionaly')){echo 'about';}
            if($_SERVER['REQUEST_URI'] == '/index.php/team'){echo 'team';}
            if($_SERVER['REQUEST_URI'] == '/index.php/contacts'){echo 'contacts';}
            ?>">
                <jdoc:include type="component" />
            </div>
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