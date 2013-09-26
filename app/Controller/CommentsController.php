<?php

// app/Controller/CommentsController.php
	class CommentsController extends AppController {
	
		public function index() {
			$this->set('comments', $this->Comment->find('all'));
		}
	
	}

?>