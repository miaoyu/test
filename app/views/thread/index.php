<h1>Board Threads</h1>

<table border="1" align="left" width="800" >
    <?php foreach($threads as $v): ?>
        <tr>
            <th>
                <a href="<?php eh(url('thread/view', array('thread_id' => $v->id))) ?>"><?php eh($v->title) ?>
            </th>
        <tr>
    <?php endforeach ?>
</table>

<input type="button" onclick="location.href='<?php eh(url('thread/create')) ?>'" value="Create" />