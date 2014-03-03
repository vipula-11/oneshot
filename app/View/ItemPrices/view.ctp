<div class="itemPrices view">
<h2><?php echo __('Item Price'); ?></h2>
	<dl>
		<dt><?php echo __('Item No'); ?></dt>
		<dd>
			<?php echo h($itemPrice['ItemPrice']['item_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($itemPrice['ItemPrice']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($itemPrice['ItemPrice']['price']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item Price'), array('action' => 'edit', $itemPrice['ItemPrice']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item Price'), array('action' => 'delete', $itemPrice['ItemPrice']['id']), null, __('Are you sure you want to delete # %s?', $itemPrice['ItemPrice']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Prices'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Price'), array('action' => 'add')); ?> </li>
	</ul>
</div>
