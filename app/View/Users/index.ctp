<?php $this->layout = 'bootstrap3'; ?>
<h1>Portada de l'usuari!</h1>

<ul>
	<li><a href="/users/logout">Logout</a></li>
</ul>

<?= $this->Session->read('Auth.User.username'); ?>