<h2></h2>
<?php foreach($posts as $post){ ?>
<hr />
<h4><?php echo $post->author ; ?></h4>
<p><?php echo $post->body; ?></p>

<?php  } ?>


