<?php

// app/Controller/CommentsController.php
	class CommentsController extends AppController {
	
		public $helpers = array('Html', 'Form', 'Session');
		
		public function index() {
			//$post = $this->Post->findById($id);
			$this->set('comments', $this->Comment->find('all'));
		}
		
		public function view($id){
			if(!$id){
				throw new NotFoundException(_('Invalid Comment'));
			}
			
			$comment = $this->Comment->findById($id);
			if(!$comment){
				throw new NotFoundException(_('Invalid Comment'));
			}
			$this->set('comment',$comment);
		}
		
		public function add($post_id = null){
			 if ($this->request->is('post')) {
				$this->Comment->create();
				$this->request->data['Comment']['user_id'] = $this->Auth->user('id'); //Added this line
				$this->request->data['Comment']['post_id'] = $post_id; 				  //Added this line
				if ($this->Comment->save($this->request->data)) {
					$this->Session->setFlash(__('Your comment has been saved.'));
					//return $this->redirect(array('action' => 'index'));
					return $this->redirect('/posts/');
				}
				$this->Session->setFlash(__('Unable to add your comment.'));
			}
		}
		
	
	}

?>