<h1><?php echo h($post['Post']['title']); ?></h1>

<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>

<p><?php echo h($post['Post']['body']); ?></p>

<?php
echo $this->Form->input('', array(
    'options' => array('Roorkee','Bhopal','Agra','Indore'),
    'empty' => '(Love)'
));
?>