<div class="customerContacts form">
<?php echo $this->Form->create('CustomerContact'); ?>
	<fieldset>
		<legend><?php echo __('Add Customer Contact'); ?></legend>
	<?php
		echo $this->Form->input('cid');
		echo $this->Form->input('contact_no');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Customer Contacts'), array('action' => 'index')); ?></li>
	</ul>
</div>
