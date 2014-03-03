<div class="moCustomers view">
<h2><?php echo __('Mo Customer'); ?></h2>
	<dl>
		<dt><?php echo __('Cid'); ?></dt>
		<dd>
			<?php echo h($moCustomer['MoCustomer']['cid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($moCustomer['MoCustomer']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trn'); ?></dt>
		<dd>
			<?php echo h($moCustomer['MoCustomer']['trn']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mo Customer'), array('action' => 'edit', $moCustomer['MoCustomer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mo Customer'), array('action' => 'delete', $moCustomer['MoCustomer']['id']), null, __('Are you sure you want to delete # %s?', $moCustomer['MoCustomer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mo Customers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mo Customer'), array('action' => 'add')); ?> </li>
	</ul>
</div>
