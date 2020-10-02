<?php namespace App\Controllers;

use App\Models\BlogModel;

class Blog extends BaseController
{
	public function index()
	{
		$model = new BlogModel();
		$data['posts'] = $model->find();

		return view('blog', $data);
	}

	public function blogPost($id)
	{
		$model = new BlogModel();
		$data['singlePost'] = $model->find($id);
		
		return view('single_post', $data);
	}

	
	public function newPost()
	{		
		$file = $this->request->getFile('picture');
		var_dump($file);
	
		if($this->request->getMethod() == 'post'){

			$model = new BlogModel();

			$model->save($_POST);
			return redirect()->to('/blog');
			
		}
		return view('new_post');
	}	

	public function deletePost($id) 
	{
		$model = new BlogModel();
		$post = $model->find($id);
		
		if($post) {
			$model->delete($id);
			return redirect()->to('/blog');
		}
	}

	public function editPost($id)
	{		
		$model = new BlogModel();
		$post = $model->find($id);


		if($this->request->getMethod() == 'post'){
			$model = new BlogModel();
			$_POST['post_id'] = $id;
			$model->save($_POST);
			$post = $model->find($id);
			
		}

		$data['post'] = $post;
		return view('edit_post', $data);
	}	


}


