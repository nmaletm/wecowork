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
        <link rel="stylesheet" href="/css/estil.css">


        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <?php
	        echo $this->fetch('meta');
	        echo $this->fetch('css');
        ?>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
        <?php echo $this->fetch('script'); ?>
</head> 
<body>
<div id="wrap">
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
                                ), array('class' => 'navbar-brand brand')); ?>
                        </div>

                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                                <ul class="nav navbar-nav">
<? if($authUser) { ?>
                                    <li class="dropdown">
                                        <a href="/places/search" class="dropdown-toggle" data-toggle="dropdown">
                                            Cercar
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><?php echo $this->Html->link('Cercar espai', array(
                                                    'controller' => 'places',
                                                    'action' => 'search'
                                                )); ?></li>
                                            <li><?php echo $this->Html->link('Cercar usuari', array(
                                                    'controller' => 'users',
                                                    'action' => 'search'
                                                )); ?></li>
                                        </ul>
                                    </li>
<? if($isCompany){ ?>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            Gestionar espais
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><?php echo $this->Html->link('Veure espais', array(
                                                    'controller' => 'places',
                                                    'action' => 'index',
                                                    $authUser['id']
                                                )); ?></li>
                                            <li><?php echo $this->Html->link('Afegir espai', array(
                                                    'controller' => 'places',
                                                    'action' => 'add'
                                                )); ?></li>
                                        </ul>
                                    </li>
<? } ?>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            Missatges
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Veure missatges</a></li>
                                            <li><a href="#">Enviar nou missatge</a></li>
                                        </ul>
                                    </li>
<? } ?>                                
                                </ul>
<? if($authUser) { ?>
								<ul class="nav navbar-nav navbar-right">
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
            <div id="push"></div>
        </div><!-- /container -->
    </div>
    <div id="footer">
      <div class="container">
        <p class="text-muted">
            <span class="brand">WeCowork</span> &copy; 2013 &nbsp; - &nbsp; 
            <a href="#"><b>Català</b></a> &nbsp; - &nbsp; 
            <a href="#">Español</a> &nbsp; - &nbsp; 
            <a href="#">English</a>
        </p>
      </div>
    </div>

</body>
</html>