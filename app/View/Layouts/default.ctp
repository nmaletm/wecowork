<?php
    $projectName = "WeCowork";
?>
<!DOCTYPE html>
<html>
<head>
        <?php echo $this->Html->charset(); ?>
        <title>
                <?php echo $title_for_layout, ' | ', $projectName; ?>
        </title>
        <!-- Le styles -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
        <style>
        body {
                padding-top: 70px; /* 70px to make the container go all the way to the bottom of the topbar */
        }
        .affix {
                position: fixed;
                top: 60px;
                width: 220px;
        }
        </style>

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <?php
	        echo $this->fetch('meta');
	        echo $this->fetch('css');
        ?>
</head> 
<body>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                        <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                </button>
                                <?php echo $this->Html->link('WeCowork', array(
                                        'controller' => 'home',
                                        'action' => 'index'
                                ), array('class' => 'navbar-brand')); ?>
                        </div>

                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                                <ul class="nav navbar-nav">
                                    <li><?php echo $this->Html->link('Cercar', array(
                                    		'controller' => 'search',
                                           	'action' => 'place'
                                    )); ?></li>
                                    <li class="dropdown">
                                        <?php echo $this->Html->link('Cercar <b class="caret"></b>', array(
                                            'controller' => 'search',
                                            'action' => 'place'
                                        )); ?>
                                        <ul class="dropdown-menu">
                                            <li><?php echo $this->Html->link('Cercar espai', array(
                                                    'controller' => 'places',
                                                    'action' => 'search',
                                                    $authUser['id']
                                                )); ?></li>
                                            <li><?php echo $this->Html->link('Cercar usuari', array(
                                                    'controller' => 'users',
                                                    'action' => 'search'
                                                )); ?></li>
                                        </ul>
                                    </li>
                                </ul>
<? if($authUser) { ?>
								<ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            Idioma
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Català</a></li>
                                            <li><a href="#">Español</a></li>
                                            <li><a href="#">English</a></li>
                                        </ul>
                                    </li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											<?=$authUser['name']?>
											<b class="caret"></b>
										</a>
										<ul class="dropdown-menu">
											<li><?php echo $this->Html->link('Perfil', array(
                                        			'controller' => 'users',
                                               		'action' => 'view',
                                               		$authUser['id']
                                        		)); ?></li>
											<li class="divider"></li>
											<li><?php echo $this->Html->link('Tancar sessió', array(
                                        			'controller' => 'users',
                                               		'action' => 'logout'
                                        		)); ?></li>
										</ul>
									</li>
								</ul>
<? }else{ ?>

                                <a href="/users/add" class="btn btn-default navbar-btn pull-right">Registre</a>
                                <a href="/users/login" class="btn btn-primary navbar-btn pull-right">Iniciar sessió</a>
<? } ?>

                        </div>
                </div>
        </nav>

        <div class="container">

                <?php echo $this->fetch('content'); ?>

        </div><!-- /container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
        <?php echo $this->fetch('script'); ?>
</body>
</html>