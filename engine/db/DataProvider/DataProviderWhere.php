<?php

namespace engine\db\DataProvider;

use engine\WebApp;
use engine\base\Exceptions as Exceptions;

class DataProviderWhere
{
	private $query;
	private $all;
	private $asArray;

	public function __construct($query){
		$this->query = $query;
	}
	
	public function where($where){
		$this->query .= " WHERE $where ";
		return $this;
	}
	
	public function all(){
		$this->all = 1;
		return $this;
	}
	
	public function asArray(){
		$this->asArray = 1;
		return $this;
	}
	
	public function One(){
		$this->all = 1;
		$this->query .= ' LIMIT 1';
		return $this;
	}

	public function exe($class = null){
		$result = WebApp::$connection->executeQuery($this->query);
		if (!$result) {
			throw new Exceptions\DataBaseException(WebApp::$connection->getErrors()[2].' '.$this->query);
		}
		if($this->asArray)
			return $result->fetchAll(\PDO::FETCH_ASSOC);
		if($this->all){
			return $result->fetchAll(\PDO::FETCH_CLASS, get_class($class));
		}
	}
}
