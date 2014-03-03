<div class="businesses view">
<h2><?php echo __('Business'); ?></h2>
	<dl>
		<dt><?php echo __('Brn'); ?></dt>
		<dd>
			<?php echo h($business['Business']['brn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($business['Business']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Business'), array('action' => 'edit', $business['Business']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Business'), array('action' => 'delete', $business['Business']['id']), null, __('Are you sure you want to delete # %s?', $business['Business']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Businesses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business'), array('action' => 'add')); ?> </li>
	</ul>
</div>
