
<div class="users form">
<?php echo $this->Form->create('User', array(
	'inputDefaults' => array(
		'div' => 'form-group',
		'wrapInput' => false,
		'class' => 'form-control'
	),
	'class' => 'well'
)); ?>
    <fieldset>
    <?php
        echo $this->Form->input('username', array('label' => 'Cercar usuari', 'placeholder' => "Quin és el seu nom, email o nom d'usuari?"));
    ?>
	<?php echo $this->Form->submit('Cercar', array(
		'div' => 'form-group',
		'class' => 'btn btn-default'
	)); ?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
<?php if(count($users)){ ?> 
				<table class="table">
				 	<thead>
				 		<tr>
							<th>Nom</th>
							<th>Nom d'usuari</th>
						</tr>
				 	</thead>
				 	<tbody>
						<!-- loop to print all the offers -->
						<?php foreach ($users as $user): ?>
							<tr>
								<td>
									<?php echo $this->Html->link($user['User']['name'],
									array('controller' => 'users', 'action' => 'view', 
									$user['User']['id'])); ?>
								</td>
								<td><?php echo $user['Place']['username']; ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				 </table>
<?php } ?>