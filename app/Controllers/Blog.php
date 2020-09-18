<?php namespace App\Controllers;

use App\Models\BlogModel;

class Blog extends BaseController
{
	public function index()
	{
		$model = new BlogModel();
		$data['posts'] = $model->find();
		var_dump($data);
		/*$posts = ['Post 1', 'Post 2', 'Post 3'];

		$data['posts'] = $posts;*/

		return view('blog', $data);
	}

	public function blogPost($id)
	{
		$model = new BlogModel();
		$data['singlePost'] = $model->find($id);

		// commentaire test JDS
		
		return view('single_post', $data);

	}
		

	public function newPost()
	{
		/*$newPost = 'This is a new post';

		$data['newPost'] = $newPost;*/
		
		if($this->request->getMethod() == 'post'){
			$model = new BlogModel();
			/*var_dump($_POST);*/
			$model->save($_POST);
		}
		return view('new_post');
	}	

}
