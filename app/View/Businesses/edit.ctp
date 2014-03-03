<div class="businesses form">
<?php echo $this->Form->create('Business'); ?>
	<fieldset>
		<legend><?php echo __('Edit Business'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Business.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Business.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Businesses'), array('action' => 'index')); ?></li>
	</ul>
</div>
