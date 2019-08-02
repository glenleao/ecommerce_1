<?php

namespace Kgdzt\Model;

use \Kgdzt\DB\Sql;

class User {


	public static function login($login, $password){

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_users WHERE deslogin = :LOGIN", array());
		if (count($results) === 0)
		{
			throw new \Exception("Usuário inexistente ou senha inválida.");
		}

		$data = $results[0];
		if password_verify($password, $data["despassword"]) === true)
		{
			$user = new User();
		}else{
			throw new \Exception("Error Processing Request", 1);
			
		}

	}
}