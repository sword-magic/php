<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index(){
		echo '<pre>';
		var_dump(get_included_files());
		echo '</pre>';
	}
}
