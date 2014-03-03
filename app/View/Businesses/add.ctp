<div class="businesses form">
<?php echo $this->Form->create('Business'); ?>
	<fieldset>
		<legend><?php echo __('Add Business'); ?></legend>
	<?php
		echo $this->Form->input('brn');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Businesses'), array('action' => 'index')); ?></li>
	</ul>
</div>
