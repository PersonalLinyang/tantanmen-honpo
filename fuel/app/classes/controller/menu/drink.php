﻿<?php
/* 
 * お飲物ページ
 */

class Controller_Menu_Drink extends Controller_App
{

	/**
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index($param = null)
	{
		session_start();
		$data = array();
		
		//共通ヘッダー取得
		$data['header'] = Request::forge('common/header')->execute()->response();
		//共通サイドバー取得
		$data['sidebar'] = Request::forge('common/sidebar')->execute()->response();

		//お飲物リスト取得
		$data['drink_list'] = Model_Product::GetProductsByType(5, 1);
		
		//View呼び出す
		return Response::forge(View::forge($this->template . '/menu/drink', $data, false));
	}
	
}