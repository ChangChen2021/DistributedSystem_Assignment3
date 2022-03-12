<?php
class DB {
  private $serverName = "localhost";
  private $dBUserName = "root";
  private $dBPassword = "";
  private $dBName = "phpproject01";
  protected $conn;
  //create connection
  protected function __construct(){
    try{
      $this->conn = new mysqli($this->serverName,$this->dBUserName, $this->dBPassword,$this->dBName);
    }catch(Exception $e){
      echo "connection failed" .$e->getMessage();
    }
  }
}