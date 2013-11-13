S'està posant app/User/index.ctp!

<?php debug($usuaris) ?>


<div id="blog">
<?php foreach ($usuaris as $usuari) { ?>
    <div class="article">
    <h1><a href="blog/index/<?= $usuari['User']['id'] ?>"
    title="<?= $article['User']['title'] ?>"><?= $article['User']['title'] ?></a></h1>
    <p class="date"><?= $article['User']['date'] ?></p>
    <p><?= $article['User']['introtext'] ?><a 
    href="blog/index/<?= $article['User']['id'] ?>" title="<?= $article['User']['title'] ?>"
    class="readon">Read more...</a></p>
    </div>
<?php } ?>
</div>