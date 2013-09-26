<?php
	class Comment extends AppModel {
		public $validate = array(
			'body' => array(
				'required' => array(
					'rule' => array('notEmpty'),
					'message' => 'A body is required'
				)
			)
		);
		
		public function isOwnedBy($post, $user) {
			return $this->field('id', array('id' => $post, 'user_id' => $user)) === $post;
		}
	}
?>