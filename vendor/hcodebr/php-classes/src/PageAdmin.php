<?php

namespace Kgdzt;
//criando classe extendida pageadmin
//herança
class PageAdmin extends Page {
	//método magico
	public function __construct($opts = array(), $tpl_dir = "/views/admin/") {

		parent::__construct($opts, $tpl_dir);
	}
}