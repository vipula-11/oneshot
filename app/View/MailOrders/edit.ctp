<div class="mailOrders form">
<?php echo $this->Form->create('MailOrder'); ?>
	<fieldset>
		<legend><?php echo __('Edit Mail Order'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MailOrder.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('MailOrder.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Mail Orders'), array('action' => 'index')); ?></li>
	</ul>
</div>
