Create thread
<form method="post" action="<?php eh(url('thread/create_thread')) ?>">
<label>title</label>
<input type="text" name="title">
<input type="hidden" name="nextpage" value="finish_create_thread">
<button type="sumit">Sumbit</button>
</form>