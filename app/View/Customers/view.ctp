<div class="customers view">
<h2><?php echo __('Customer'); ?></h2>
	<dl>
		<dt><?php echo __('CID'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['CID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Middle Name'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['middle_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Po Box'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['po_box']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['city']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Customer'), array('action' => 'edit', $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Customer'), array('action' => 'delete', $customer['Customer']['id']), null, __('Are you sure you want to delete # %s?', $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('action' => 'add')); ?> </li>
	</ul>
</div>
