<?php
class Comment extends AppModel{

public $validation = array(
	'username'=>array('length' => array('validate_between',1,10),),
	'body'=>array('length' => array('validate_between',1,100),),
	);
}