<div class="loCustomers form">
<?php echo $this->Form->create('LoCustomer'); ?>
	<fieldset>
		<legend><?php echo __('Add Lo Customer'); ?></legend>
	<?php
		echo $this->Form->input('cid');
		echo $this->Form->input('credit_limit');
		echo $this->Form->input('brn');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Lo Customers'), array('action' => 'index')); ?></li>
	</ul>
</div>
