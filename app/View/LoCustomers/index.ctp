<div class="loCustomers index">
	<h2><?php echo __('Lo Customers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('cid'); ?></th>
			<th><?php echo $this->Paginator->sort('credit_limit'); ?></th>
			<th><?php echo $this->Paginator->sort('brn'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($loCustomers as $loCustomer): ?>
	<tr>
		<td><?php echo h($loCustomer['LoCustomer']['cid']); ?>&nbsp;</td>
		<td><?php echo h($loCustomer['LoCustomer']['credit_limit']); ?>&nbsp;</td>
		<td><?php echo h($loCustomer['LoCustomer']['brn']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $loCustomer['LoCustomer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $loCustomer['LoCustomer']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $loCustomer['LoCustomer']['id']), null, __('Are you sure you want to delete # %s?', $loCustomer['LoCustomer']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Lo Customer'), array('action' => 'add')); ?></li>
	</ul>
</div>
