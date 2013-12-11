<h1><?php eh($thread->title) ?></h1>

<table border="1" align="left" width="800" >
    <?php foreach($comments as $k=>$v): ?>
        <tr>
            <th>
            	<?php eh($k + 1) ?>
            </th>
            <th>
             	<?php eh($v->username) ?>
            </th>
            <th>
   				<?php eh($v->body) ?>
            </th>    
            <th>
            	<?php eh($v->created) ?>
            </th>
    <?php endforeach ?>
</table>


<form method="post" action="<?php eh(url('thread/write_comment')) ?>">
<label>name</label>
<input type="text" name="username">
<label>comment</label>
<input type="textarea" name="body">
<input type="hidden" name="thread_id" value="<?php eh($thread->id) ?>">
<input type="hidden" name="nextpage" value="finish_write_comment">
<button type="sumit">Sumbit</button>
</form>