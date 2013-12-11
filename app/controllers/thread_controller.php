<?php
class ThreadController extends AppController{
    
    public function index(){
        $threads = Thread::get_threads();
        $this->set(get_defined_vars());
    }

    public function view(){
    	$thread = Thread::get_thread(Param::get('thread_id'));
    	$comments = $thread->get_comments();
    	$this->set(get_defined_vars());
    }

    public function write_comment(){
    	$thread = Thread::get_thread(Param::get('thread_id'));
    	$nextpage = Param::get('nextpage');
    	switch ($nextpage) {
    		case 'finish_write_comment':
    			$comment = new Comment;
    			$comment->username = Param::get('username');
    			$comment->body = Param::get('body');
    			$thread->set_comment($comment);
    			break;
    		
    		default:
    			throw new NotFoundException("$nextpage");
    			break;
    	}

    	$this->set(get_defined_vars());
    }
}

