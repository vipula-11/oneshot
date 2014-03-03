<div class="businessContacts view">
<h2><?php echo __('Business Contact'); ?></h2>
	<dl>
		<dt><?php echo __('Brn'); ?></dt>
		<dd>
			<?php echo h($businessContact['BusinessContact']['brn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact No'); ?></dt>
		<dd>
			<?php echo h($businessContact['BusinessContact']['contact_no']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Business Contact'), array('action' => 'edit', $businessContact['BusinessContact']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Business Contact'), array('action' => 'delete', $businessContact['BusinessContact']['id']), null, __('Are you sure you want to delete # %s?', $businessContact['BusinessContact']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Business Contacts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business Contact'), array('action' => 'add')); ?> </li>
	</ul>
</div>
