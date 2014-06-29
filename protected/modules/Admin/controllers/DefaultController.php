<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
		//$this->renderPartial('index');
		
		$db = Goods::model();
		$data=$db->findAll();
		foreach($data as $vo){
			echo $vo->name.'<br>'.$vo->content.'<br>';
		}
		
	}
}