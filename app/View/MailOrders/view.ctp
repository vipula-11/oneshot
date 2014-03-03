<div class="mailOrders view">
<h2><?php echo __('Mail Order'); ?></h2>
	<dl>
		<dt><?php echo __('Order No'); ?></dt>
		<dd>
			<?php echo h($mailOrder['MailOrder']['order_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cid'); ?></dt>
		<dd>
			<?php echo h($mailOrder['MailOrder']['cid']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mail Order'), array('action' => 'edit', $mailOrder['MailOrder']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mail Order'), array('action' => 'delete', $mailOrder['MailOrder']['id']), null, __('Are you sure you want to delete # %s?', $mailOrder['MailOrder']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mail Orders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mail Order'), array('action' => 'add')); ?> </li>
	</ul>
</div>
