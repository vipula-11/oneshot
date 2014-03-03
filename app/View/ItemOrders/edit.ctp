<div class="itemOrders form">
<?php echo $this->Form->create('ItemOrder'); ?>
	<fieldset>
		<legend><?php echo __('Edit Item Order'); ?></legend>
	<?php
		echo $this->Form->input('order_no');
		echo $this->Form->input('item_no');
		echo $this->Form->input('quantity');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ItemOrder.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ItemOrder.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Item Orders'), array('action' => 'index')); ?></li>
	</ul>
</div>
