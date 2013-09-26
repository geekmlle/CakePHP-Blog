<!-- File: /app/View/Posts/view.ctp -->

<h1><?php echo h($post['Post']['title']); ?></h1>

<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>

<p><?php echo h($post['Post']['body']); ?></p>

<!--<?php echo $this->Html->link(View Comments, array('action' => 'comments/view', $post['Post']['id'])); ?>-->
<p><a href="/cake/comments/index">View Comments</a></p>