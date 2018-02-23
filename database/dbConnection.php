<?php
/*
*Database connection class
*/

//Include database credentials
require_once('dbCredentials.php');

class datbconnection 
{
    //properties
    //constructor
    //methods

  public $datbcon;
  public $result;
  public $lastid;

  public function connect() {
   $this->datbcon = mysqli_connect(DBHOST, DBUSERNAME,DBPASS,DBNAME);

   if (mysqli_connect_errno()) {
    return false;
  }

  else {
    return true;
  }
}

public function getRows(){
 if($this->result == false){
  return false;
}

else {
         //get the total number of rows affected
  return mysqli_num_rows($this->result);
}
}

/*function getLastID() {
  $lastid = mysqli_insert_id($this->datbcon);
  return $lastid;
}*/

public function query($sql) {
    //check if the connection works
  if(!$this->connect())
  {
    return false;
  }

  //run query
  $this->result = mysqli_query($this->datbcon,$sql);

  //check if any record return
  if($this->result == false)
  {
    return false;
  }
  else {
    //return true;
    return $this->result;
  }
}

function fetchAssoc()
{
 return mysqli_fetch_assoc($this->result);
}

function fetchArray()
{
 return mysqli_fetch_array($this->result);
}

function getNumRows() {
  return mysqli_num_rows($this->result);
}

}

?>