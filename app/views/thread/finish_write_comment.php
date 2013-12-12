<h1><?php eh($thread->title) ?></h1>

<table border="1" width="800" >
  <tr>
    <th>
      <?php eh($comment->username) ?>
    </th>
    <th>
      <?php eh($comment->body) ?>
    </th>
  </tr>
</table>
commit finished

<a href="<?php eh(url('thread/view', array('thread_id' => $thread->id))) ?>">Back to thread</a>