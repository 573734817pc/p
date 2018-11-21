<?php
	/**
	*格式化打印数据，自定义工具库
	*@param mix $data
	*@return
	*/
if(!function_exists('p')){
	function p($data){
		echo '<pre>';
		print_r($data);
	}
}