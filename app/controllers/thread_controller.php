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
                try {
                    $thread->insert_comment($comment);
                } catch(ValidationException $e)
                {
                    $nextpage = 'write_comment_error';
                }
                break;
            
            default:
                throw new NotFoundException("$nextpage");
                break;
        }
        $this->set(get_defined_vars());
        $this->render($nextpage);
    }

    public function create_thread(){
        $nextpage = Param::get('nextpage','create_thread');

        switch ($nextpage) {

            case 'finish_create_thread':
                $thread = new Thread;
                $thread->title = Param::get('title');
                try {
                    $thread->insert_thread($thread);
                } catch(ValidationException $e)
                {
                    $nextpage = 'create_thread_error';
                }
                break;
            
            default:
                throw new NotFoundException("$nextpage");
                break;
        }
        $this->set(get_defined_vars());
        $this->render($nextpage);
    }
}