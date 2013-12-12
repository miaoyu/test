<h2><?php eh($thread->title) ?></h2>
<?php if ($comment->hasError()): ?>

Validation error!
<?php if (!empty($comment->validation_errors['username']['length'])): ?>
Your name must be between
<?php eh($comment->validation['username']['length'][1]) ?> and
<?php eh($comment->validation['username']['length'][2]) ?> characters in length.
<?php endif ?>

<?php if (!empty($comment->validation_errors['body']['length'])): ?>
Your Comment must be between
<?php eh($comment->validation['body']['length'][1]) ?> and
<?php eh($comment->validation['body']['length'][2]) ?> characters in length.
<?php endif ?>
<?php endif ?>

<a href="<?php eh(url('thread/view', array('thread_id' => $thread->id))) ?>">Back to thread</a>