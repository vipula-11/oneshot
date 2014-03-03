<div class="largeOrders index">
	<h2><?php echo __('Large Orders'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('order_no'); ?></th>
			<th><?php echo $this->Paginator->sort('cid'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($largeOrders as $largeOrder): ?>
	<tr>
		<td><?php echo h($largeOrder['LargeOrder']['order_no']); ?>&nbsp;</td>
		<td><?php echo h($largeOrder['LargeOrder']['cid']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $largeOrder['LargeOrder']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $largeOrder['LargeOrder']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $largeOrder['LargeOrder']['id']), null, __('Are you sure you want to delete # %s?', $largeOrder['LargeOrder']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Large Order'), array('action' => 'add')); ?></li>
	</ul>
</div>
