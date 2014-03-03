<div class="orders view">
<h2><?php echo __('Order'); ?></h2>
	<dl>
		<dt><?php echo __('Order No'); ?></dt>
		<dd>
			<?php echo h($order['Order']['order_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($order['Order']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Order'), array('action' => 'edit', $order['Order']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Order'), array('action' => 'delete', $order['Order']['id']), null, __('Are you sure you want to delete # %s?', $order['Order']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('action' => 'add')); ?> </li>
	</ul>
</div>
