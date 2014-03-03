<div class="loCustomers view">
<h2><?php echo __('Lo Customer'); ?></h2>
	<dl>
		<dt><?php echo __('Cid'); ?></dt>
		<dd>
			<?php echo h($loCustomer['LoCustomer']['cid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Credit Limit'); ?></dt>
		<dd>
			<?php echo h($loCustomer['LoCustomer']['credit_limit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Brn'); ?></dt>
		<dd>
			<?php echo h($loCustomer['LoCustomer']['brn']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Lo Customer'), array('action' => 'edit', $loCustomer['LoCustomer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Lo Customer'), array('action' => 'delete', $loCustomer['LoCustomer']['id']), null, __('Are you sure you want to delete # %s?', $loCustomer['LoCustomer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Lo Customers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lo Customer'), array('action' => 'add')); ?> </li>
	</ul>
</div>
