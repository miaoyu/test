<?php
class Thread extends AppModel{

	public $validation = array(
		'title'=>array('length' => array('validate_between',2,8),),
		);

	public static function get_threads(){
		$threads = array();
		$db = DB::conn();
		$rows = $db->rows('SELECT * FROM thread');
		foreach ($rows as $row){
			$threads[] = new Thread($row);
		}
		return $threads;
	}

	public static function get_thread($id){
		$db = DB::conn();
		$row = $db->row('SELECT * FROM thread WHERE id = ? ', array($id));
		return new self($row);
	}

	public function get_comments(){
		$comments = array();
		$db = DB::conn();
		$rows = $db->rows('SELECT * FROM comment WHERE thread_id = ? ORDER BY created ASC', array($this->id));
		foreach ($rows as $row){
			$comments[] = new Thread($row);
		}
		return $comments;
	}

	public function insert_comment(Comment $comment)
	{
		if(!$comment->validate()) {
			throw new ValidationException('invalid comment');
		}
		
		$db = DB::conn();
		$db->begin();
		$db->query('INSERT INTO comment SET thread_id = ?, username = ?, body = ?, created=NOW()',
			array($this->id, $comment->username, $comment->body));
	    $db->commit();
	}

	public function insert_thread()
	{
		if(!$this->validate()) {
			throw new ValidationException('invalid thread title');
		}
		
		$db = DB::conn();
		$db->begin();
		$db->query('INSERT INTO thread SET title = ?, created = NOW()', array($this->title));
		$this->id = $db->lastInsertId();
		$db->commit();
	}

}