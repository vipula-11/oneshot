<div class="mailOrders form">
<?php echo $this->Form->create('MailOrder'); ?>
	<fieldset>
		<legend><?php echo __('Add Mail Order'); ?></legend>
	<?php
		echo $this->Form->input('order_no');
		echo $this->Form->input('cid');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Mail Orders'), array('action' => 'index')); ?></li>
	</ul>
</div>
