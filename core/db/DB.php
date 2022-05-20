<?php

namespace core;

class DB {
	
	private $PDO;
	private $data = [
		'connection' => [
			'host' => 'localhost',
			'dbname' => 'a0675344_test',
			'login' => 'a0675344_test',
			'password' => 'test777'
		]
	];
	
	public function __construct() {
		
		$this->PDO = new \PDO( "mysql:host={$this->data['connection']['host']};dbname={$this->data['connection']['dbname']}", $this->data['connection']['login'], $this->data['connection']['password'] );
	}
	
	public function check_auth( $data ) {
		
		$query = 'SELECT id FROM users WHERE login = :login AND password = :pass';
		$exec = $this->PDO->prepare( $query );
		$exec->execute( [
			':login' => $data['login'],
			':pass' => $data['pass'],
		] );
		
		$response = $exec->fetch(\PDO::FETCH_ASSOC);
		
		if( $response ) {
			
			return $response;
		}
	}
	
	public function get_user( $user_hash ) {
		
		$query = 'SELECT * FROM users WHERE password = :pass';
		$exec = $this->PDO->prepare( $query );
		$exec->execute( [
			':pass' => $user_hash,
		] );
		
		$response = $exec->fetch(\PDO::FETCH_ASSOC);
		
		if( $response ) {
			
			return $response;
		}
	}
	
	public function get_all_objects( $group = false ) {
		
		if( !$group ) {
			
			$query = 'SELECT * FROM objects ORDER BY id';
		}
		else
		{
			$query = 'SELECT * FROM objects GROUP BY parent_id';
		}
		
		$response = $this->PDO->query($query)->fetchAll(\PDO::FETCH_ASSOC);
		
		if( $response ) {
			
			return $response;
		}
	}
	
	public function insert_object( $data ) {

		$query = 'INSERT INTO objects (title, description, parent_id, date) VALUES (:title, :description, :parent_id, :date)';
		
		$exec = $this->PDO->prepare( $query );
		$response = $exec->execute( [
			':title' => $data['title'],
			':description' => $data['description'],
			':parent_id' => $data['parent_id'],
			':date' => $data['date'],
		] );
		
		if( $response ) {
			
			return $response;
		}
	}
	
	public function update_object( $data ) {

		$query = 'UPDATE objects SET title = :title, description = :description, parent_id = :parent_id WHERE id = :id';
		
		$exec = $this->PDO->prepare( $query );
		$response = $exec->execute( [
			':title' => $data['title'],
			':description' => $data['description'],
			':parent_id' => $data['parent_id'],
			':id' => $data['id'],
		] );
		
		if( $response ) {
			
			return $response;
		}
	}
	
	public function check_parent_category( $parent_id ) {
		
		$query = 'SELECT * FROM objects WHERE parent_id = :id';
		
		$exec = $this->PDO->prepare( $query );
		$exec->execute( [
			':id' => $parent_id,
		] );
		
		$response = $exec->fetchAll(\PDO::FETCH_ASSOC);
		
		if( $response && count( $response ) > 1 ) {
			
			return true;
		}
	}
	
	public function delete_object( $id ) {

		$query = 'DELETE FROM objects WHERE id = :id';
		
		$exec = $this->PDO->prepare( $query );
		$response = $exec->execute( [
			':id' => $id,
		] );
		
		$query = 'DELETE FROM objects WHERE parent_id = :id';
		
		$exec = $this->PDO->prepare( $query );
		$response = $exec->execute( [
			':id' => $id,
		] );
		
		if( $response ) {
			
			return $response;
		}
	}
}