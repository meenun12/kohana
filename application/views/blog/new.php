<h2>Write a new Post!</h2>

<?php if(isset($errors)){ ?>

    <ul>
        <?php foreach($errors as $error){ ?>
            <li><?php echo $error; ?></li>
        <?php  } ?>
    </ul>

<?php }
    echo Form::open();


    echo Form::label('author', 'Author');
    echo Form::input('author');

    echo "<br /><br />";

    echo Form::label('body', 'Post Body');
    echo Form::textarea('body');

    echo "<br /><br />";

    echo Form::submit('submit', 'Submit Post');

    echo "<br /><br />";

    echo Form::close();

?>
