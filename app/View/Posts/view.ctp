<!-- File: /app/View/Posts/view.ctp -->

<h1><?php echo h($post['Post']['title']); ?></h1>


<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>

<p><?php echo h($post['Post']['body']); ?></p>


<table>
    <tr>
        <th>Id</th>
        <th>Comment Text</th>
        <th>Actions</th>
        <th>Created</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

    <?php foreach ($comments as $comment): ?>
    
		<tr>
			<td><?php echo $comment['Comment']['id']; ?></td>
			<td>
				<?php echo $this->Html->link($comment['Comment']['body'], array('action' => 'view', $comment['Comment']['id'])); ?>
			</td>
			<td>
				<?php echo $this->Form->postLink(
					'Delete',
					array('action' => 'delete', $comment['Comment']['id']),
					array('confirm' => 'Are you sure?'));
				?>
				<?php echo $this->Html->link('Edit', array('action' => 'edit', $comment['Comment']['id'])); ?>
			</td>
			<td>
				<?php echo $comment['Comment']['created']; ?>
			</td>
		</tr>
    
    <?php endforeach; ?>

</table>

<?php echo $this->Html->link(
    'Add Comment',
    array('controller' => 'comments', 'action' => 'add', $post ['Post']['id'])
); ?>
