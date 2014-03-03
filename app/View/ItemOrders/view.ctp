<div class="itemOrders view">
<h2><?php echo __('Item Order'); ?></h2>
	<dl>
		<dt><?php echo __('Order No'); ?></dt>
		<dd>
			<?php echo h($itemOrder['ItemOrder']['order_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item No'); ?></dt>
		<dd>
			<?php echo h($itemOrder['ItemOrder']['item_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($itemOrder['ItemOrder']['quantity']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item Order'), array('action' => 'edit', $itemOrder['ItemOrder']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item Order'), array('action' => 'delete', $itemOrder['ItemOrder']['id']), null, __('Are you sure you want to delete # %s?', $itemOrder['ItemOrder']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Orders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Order'), array('action' => 'add')); ?> </li>
	</ul>
</div>
