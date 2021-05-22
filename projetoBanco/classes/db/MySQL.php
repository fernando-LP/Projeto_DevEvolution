<?php

class MySQL
{

	const HOST = 'localhost';
	const USER = 'root';
	const PASS = 'IXCsoft6001';
	const DATABASE = 'appCarros';

	public function connectDB()
	{
		return new mysqli(self::HOST, self::USER, self::PASS, self::DATABASE);
	}

	public function getALL($DB, $tabela)
	{
		return $DB->query("SELECT * FROM $tabela");
		
	}

	public function deleteByID($DB, $tabela, $id)
	{
		return $DB->query("DELETE FROM $tabela WHERE id = $id");
	}

	public function deleteUser($DB, $tabela, $id)
	{
		return $DB->query("DELETE FROM $tabela WHERE id = $id");
	}

	public function editUser($DB, $tabela,$email, $id)
	{
		
		return $DB->query("UPDATE $tabela SET $email AND $senha WHERE = $id");
	}

		//GET USERS
	public function getKey($DB, $campos, $tabela, $id)
	{
		
		return $DB->query("SELECT $campos FROM $tabela WHERE id = $id");
	}	

	public function getKeyVeiculos($DB, $campos, $tabela, $id)
	{
		
		return $DB->query("SELECT $campos FROM $tabela WHERE id = $id");
	}
}