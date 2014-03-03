<div class="largeOrders view">
<h2><?php echo __('Large Order'); ?></h2>
	<dl>
		<dt><?php echo __('Order No'); ?></dt>
		<dd>
			<?php echo h($largeOrder['LargeOrder']['order_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cid'); ?></dt>
		<dd>
			<?php echo h($largeOrder['LargeOrder']['cid']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Large Order'), array('action' => 'edit', $largeOrder['LargeOrder']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Large Order'), array('action' => 'delete', $largeOrder['LargeOrder']['id']), null, __('Are you sure you want to delete # %s?', $largeOrder['LargeOrder']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Large Orders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Large Order'), array('action' => 'add')); ?> </li>
	</ul>
</div>
