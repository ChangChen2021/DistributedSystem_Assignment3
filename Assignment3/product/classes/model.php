<?php
require "db.php";
class Model extends DB{
  public function __construct(){
    parent::__construct();
  }

  public function insert($userId){
    if(isset($_POST['insert'])){  
      //get data from the form
      $name= $_POST["name"];
      $image= $_POST["image"];
      $position= $_POST["position"];
      $degree= $_POST["degree"];
      $birthday= $_POST["birthday"];
      $phone= $_POST["phone"];
      $description= $_POST["description"];
      $img = "../asset/picture/".$image;
      //check if inputs are empty
      require '../../includes/insertxml.inc/emptycheck.inc.php';
      //save data into DB
      $query= "INSERT INTO peopleinformation (id, name, position, birthday, degree, image, phone, description) VALUES ('$userId','$name', '$position', '$birthday', '$degree', '$img', '$phone', '$description')";
      if($sql= $this->conn->query($query)){
        header("Location: ../../updatexml.php?error=dataCreated");
        exit();	
      }else{
        header("Location: ../../insertxml.php?error=failed");
        exit();	
      }
    }
  }

  public function update($userId){
    
    //when user click the submit buttom
    if(isset($_POST['insert']))
    {
        //get data from the form
        $name= $_POST["name"];
        $image= $_POST["image"];
        $position= $_POST["position"];
        $degree= $_POST["degree"];
        $birthday= $_POST["birthday"];
        $phone= $_POST["phone"];
        $description= $_POST["description"];
        //check if inputs are empty
        require "../../includes/updatexml.inc/emptycheck.inc.php";
        //update the DB
        $query="UPDATE peopleinformation SET name='$name', position='$position', birthday='$birthday', degree='$degree', image='$image', phone='$phone', description='$description' WHERE id=$userId";
        if($sql= $this->conn->query($query)){
          header("Location: ../../updatexml.php?error=success");
          exit();	
        }else{
          header("Location: ../../updatexml.php?error=failed");
          exit();	
        }
      }
    //when click the delete buttom
    if(isset($_POST['delete'])){     
      //delete data from DB
      $query="DELETE FROM peopleinformation WHERE id = $userId";
      if($sql= $this->conn->query($query)){
        header("Location: ../../insertxml.php");
        exit();	
      }else{
        header("Location: ../../updatexml.php?error=failed");
        exit();	
      }
    }
    //when click 'overview' buttom
    if(isset($_POST['overview'])){
        header("Location: ../../../overview/index.php?id=$userId");
        exit();
    }
  }

  //get the data from DB
  public function getPeopleInfo($userId){
    $query = "SELECT * FROM peopleinformation WHERE id = $userId";
    $sql= $this->conn->query($query);
    return $sql;
  }

}
