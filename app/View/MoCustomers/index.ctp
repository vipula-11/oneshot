<div class="moCustomers index">
	<h2><?php echo __('Mo Customers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('cid'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('trn'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($moCustomers as $moCustomer): ?>
	<tr>
		<td><?php echo h($moCustomer['MoCustomer']['cid']); ?>&nbsp;</td>
		<td><?php echo h($moCustomer['MoCustomer']['email']); ?>&nbsp;</td>
		<td><?php echo h($moCustomer['MoCustomer']['trn']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $moCustomer['MoCustomer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $moCustomer['MoCustomer']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $moCustomer['MoCustomer']['id']), null, __('Are you sure you want to delete # %s?', $moCustomer['MoCustomer']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Mo Customer'), array('action' => 'add')); ?></li>
	</ul>
</div>
