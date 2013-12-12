<h1><?php eh($thread->title) ?></h1>

commit finished

<a href="<?php eh(url('thread/view', array('thread_id' => $thread->id))) ?>">Back to thread</a>