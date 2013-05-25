<?php 
class PostsController extends AppController {
   
    public function index() {
        $this->set('posts', $this->Post->find('all'));
    }
     
	public function add() {
    if ($this->request->is('post')) {
        $this->request->data['Post']['user_id'] = $this->Auth->user('id'); //Added this line
        if ($this->Post->save($this->request->data)) {
            $this->Session->setFlash('Your post has been saved.');
            $this->redirect(array('action' => 'index'));
        }
    }
}
}