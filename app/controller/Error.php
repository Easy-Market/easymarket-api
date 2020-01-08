<?php
	/**
	 * 
	 */
	class ErrorLogs extends EasyMarket
	{
		public function err($type, $message)
	    {
	        $error = array(
	            'success' => '<div class="alert alert-success" role="alert">'. $message .'</div>',
	            'info' => '<div class="alert alert-info" role="alert">'. $message .'</div>',
	            'warning' => '<div class="alert alert-warning" role="alert">'. $message .'</div>', 
	            'danger' => '<div class="alert alert-danger" role="alert">'. $message .'</div>'
	        );
	        return $error[$type];
	    }
	}