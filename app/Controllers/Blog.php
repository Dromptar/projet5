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
				
		if($this->request->getMethod() == 'post'){
			$model = new BlogModel();
			/*var_dump($_POST);*/
			$model->save($_POST);
		}
		return view('new_post');
	}	

}
