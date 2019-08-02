<?php

namespace Kgdzt;

class Model {

private $values = [];

public function __call($name, $args)
{
	//busca
	$method = substr($name, 0, 3);
	$fieldName = substr($name, 3, strlen($name));

	swicth
}

}