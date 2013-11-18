<?php
    $projectName = Configure::read('ProjectName');
?>
<!DOCTYPE html>
<html>
<head>
        <?php echo $this->Html->charset(); ?>
        <title>
                <?php echo $title_for_layout, ' | ', Configure::read('ProjectName'); ?>
        </title>
        <?php
                //echo $this->Html->meta('icon');

                echo $this->Html->css('bootstrap.min');
                
                echo $this->Html->css('bootstrap-responsive.min');
                
                echo $this->Html->css('custom');
                
                echo $this->Html->script('bootstrap.min');

                echo $this->fetch('meta');
                echo $this->fetch('css');
                echo $this->fetch('script');
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
</body>
</html>