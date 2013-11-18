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
        <div id="wrap">
                <div id="header" class="navbar navbar-fixed-top navbar-inverse">
                        <div class="navbar-inner">
                                <div class="container">
                                        <a class="brand" href="/"><?php echo $projectName; ?></a>
                                        <ul class="nav">
                                                <li>
                                                        <a href="/people">People</a>
                                                </li>
                                                <li class="">
                                                        <a href="/films">Films</a>
                                                </li>
                                                <li class="divider-vertical"></li>
                                                <li>
                                                        <a href="/me">Me</a>
                                                </li>
                                        </ul>
                                        <form class="navbar-search pull-right">
                                                <input type="text" class="search-query" placeholder="Search">
                                        </form>
                                </div>
                        </div>
                </div>
                <div id="content" class="container">
                        <?php echo $this->Session->flash(); ?>

                        <?php echo $this->fetch('content'); ?>
                </div>
                <div id="push"></div>
        </div>
        <div id="footer" class="container">
                <p class="muted credit">
                        <?php echo Configure::read('CreditHTML'); ?>
                </p>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
        <?php echo $this->fetch('script'); ?>
</body>
</html>