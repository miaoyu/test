<h1>Board Threads</h1>
<div>
<table border="1" width="800" >
    <?php foreach($threads as $v): ?>
        <tr>
            <th>
                <a href="<?php eh(url('thread/view', array('thread_id' => $v->id))) ?>"><?php eh($v->title) ?>
            </th>
        <tr>
    <?php endforeach ?>
</table>
</div>

<input type="button" onclick="location.href='<?php eh(url('thread/create_thread')) ?>'" value="Create" />