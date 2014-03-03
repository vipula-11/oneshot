<div class="customers form">
<?php echo $this->Form->create('Customer'); ?>
	<fieldset>
		<legend><?php echo __('Edit Customer'); ?></legend>
	<?php
		echo $this->Form->input('CID');
		echo $this->Form->input('first_name');
		echo $this->Form->input('middle_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('po_box');
		echo $this->Form->input('street');
		echo $this->Form->input('city');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Customer.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Customer.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?></li>
	</ul>
</div>
