<?php namespace App\Controllers;

use App\Models\BlogModel;

class Blog extends BaseController
{
	public function index()
	{
		$posts = ['Post 1', 'Post 2', 'Post 3'];

		$data['posts'] = $posts;

		return view('blog', $data);
	}

	public function post()
	{
		$singlePost = 'This is a single post';

		$data['singlePost'] = $singlePost;

		return view('single_post', $data);
	}

	public function newPost()
	{
		/*$newPost = 'This is a new post';

		$data['newPost'] = $newPost;*/
		
		if($this->request->getMethod() == 'post'){
			$model = new BlogModel();
			$model->save($_POST);
		}

		return view('new_post');
	}	

}
