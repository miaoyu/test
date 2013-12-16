<h2><?php eh($thread->title) ?></h2>
<?php if ($thread->hasError()): ?>
Validation error!
    <?php if (!empty($thread->validation_errors['title']['length'])): ?>
    Your title must be between
    <?php eh($thread->validation['title']['length'][1]) ?> and
    <?php eh($thread->validation['title']['length'][2]) ?> characters in length.
    <?php endif ?>
<?php endif ?>

<a href="<?php eh(url('thread/index')) ?>">Back to thread index</a>