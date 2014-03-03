<div class="businessContacts form">
<?php echo $this->Form->create('BusinessContact'); ?>
	<fieldset>
		<legend><?php echo __('Edit Business Contact'); ?></legend>
	<?php
		echo $this->Form->input('brn');
		echo $this->Form->input('contact_no');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('BusinessContact.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('BusinessContact.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Business Contacts'), array('action' => 'index')); ?></li>
	</ul>
</div>
