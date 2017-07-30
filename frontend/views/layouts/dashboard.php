<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\Dashboard;
use common\widgets\Alert;

Dashboard::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <section>
    <!-- left side start-->
        <div class="left-side sticky-left-side">

            <!--logo and iconic logo start-->
            <div class="logo">
                <h1><a href="index.html">Easy <span>Admin</span></a></h1>
            </div>
            <div class="logo-icon text-center">
                <a href="index.html"><i class="lnr lnr-home"></i> </a>
            </div>

            <!--logo and iconic logo end-->
            <div class="left-side-inner">

                <!--sidebar nav start-->
                    <ul class="nav nav-pills nav-stacked custom-nav">
                        <li class="active"><a href="index.html"><i class="lnr lnr-power-switch"></i><span>Dashboard</span></a></li>
                        <li class="menu-list">
                            <a href="#"><i class="lnr lnr-cog"></i>
                                <span>Components</span></a>
                                <ul class="sub-menu-list">
                                    <li><a href="grids.html">Grids</a> </li>
                                    <li><a href="widgets.html">Widgets</a></li>
                                </ul>
                        </li>
                        <li><a href="forms.html"><i class="lnr lnr-spell-check"></i> <span>Forms</span></a></li>
                        <li><a href="tables.html"><i class="lnr lnr-menu"></i> <span>Tables</span></a></li>              
                        <li class="menu-list"><a href="#"><i class="lnr lnr-envelope"></i> <span>MailBox</span></a>
                            <ul class="sub-menu-list">
                                <li><a href="inbox.html">Inbox</a> </li>
                                <li><a href="compose-mail.html">Compose Mail</a></li>
                            </ul>
                        </li>      
                        <li class="menu-list"><a href="#"><i class="lnr lnr-indent-increase"></i> <span>Menu Levels</span></a>  
                            <ul class="sub-menu-list">
                                <li><a href="charts.html">Basic Charts</a> </li>
                            </ul>
                        </li>
                        <li><a href="codes.html"><i class="lnr lnr-pencil"></i> <span>Typography</span></a></li>
                        <li><a href="media.html"><i class="lnr lnr-select"></i> <span>Media Css</span></a></li>
                        <li class="menu-list"><a href="#"><i class="lnr lnr-book"></i>  <span>Pages</span></a> 
                            <ul class="sub-menu-list">
                                <li><a href="sign-in.html">Sign In</a> </li>
                                <li><a href="sign-up.html">Sign Up</a></li>
                                <li><a href="blank_page.html">Blank Page</a></li>
                            </ul>
                        </li>
                    </ul>
                <!--sidebar nav end-->
            </div>
        </div>
        <!-- left side end-->
    
        <!-- main content start-->
        <div class="main-content">
            <?= $content ?>
        </div>
        <!--footer section start-->
            <footer>
               <p>&copy 2015 Easy Admin Panel. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts.</a></p>
            </footer>
        <!--footer section end-->

      <!-- main content end-->
   </section>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
