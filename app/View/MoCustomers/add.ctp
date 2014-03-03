<div class="moCustomers form">
<?php echo $this->Form->create('MoCustomer'); ?>
	<fieldset>
		<legend><?php echo __('Add Mo Customer'); ?></legend>
	<?php
		echo $this->Form->input('cid');
		echo $this->Form->input('email');
		echo $this->Form->input('trn');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Mo Customers'), array('action' => 'index')); ?></li>
	</ul>
</div>
