<?php

// app/Controller/CommentsController.php
	class CommentsController extends AppController {
	
		public $helpers = array('Html', 'Form', 'Session');
		
		public function index() {
			//$post = $this->Post->findById($id);
			$this->set('comments', $this->Comment->find('all'));
			
    		
		}
	
	}

?>