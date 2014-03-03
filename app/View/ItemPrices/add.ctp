<div class="itemPrices form">
<?php echo $this->Form->create('ItemPrice'); ?>
	<fieldset>
		<legend><?php echo __('Add Item Price'); ?></legend>
	<?php
		echo $this->Form->input('item_no');
		echo $this->Form->input('date');
		echo $this->Form->input('price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Item Prices'), array('action' => 'index')); ?></li>
	</ul>
</div>
