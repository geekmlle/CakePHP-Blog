<!-- File: /app/View/Comments/view.ctp -->

<!-- <h1><?php echo h($comments['Post']['title']); ?></h1> -->

<p><a href="/cake/posts/">Home</a></p>

<p><small>Created: <?php echo $comment['Comment']['created']; ?></small></p>

<p><?php echo h($comment['Comment']['body']); ?></p>

