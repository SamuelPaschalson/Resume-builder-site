<?php

class RegisterUser{
  private $id;
  private $username;
  private $raw_password;
  private $encrypted_password;
  public $error;
  public $success;
  private $storage = "userdata.json";
  private $stored_user;
  private $new_users;
  
  public function __construct($id, $username, $password){
    
    $this->id = filter_var($id);
    $this->username = trim($this->username);
    $this->username = filter_var($username, FILTER_SANITIZE_STRING);
    $this->raw_password = trim($this->password);
    $this->raw_password = filter_var($password, FILTER_SANITIZE_STRING);
  //  $this->encrypted_password = password_hash($this->raw_password, PASSWORD_DEFAULT);
    $this->stored_user = json_decode(file_get_contents($this->storage), true);
    $this->new_users = [
      "id" => $this->id,
      "username" => $this->username,
      "password" => $this->raw_password,
      ];
      if ($this->checkFieldValues()) {
        $this->insertUsers();
      }
    
  }
  
  private function checkFieldValues(){
    
    if (empty($this->username) || empty($this->raw_password)) {
      $this->error = "Both Fields are required";
      return false;
    } else {
      return true;
    }
  }
  
  private function usernameExists(){
    
    foreach ($this->stored_user as $user) {
      if ($this->username == $user["username"]) {
        $this->error = "Username already taken, please choose a new one";
        return true;
      }
    }
    return false;
  }
  
  private function insertUsers(){
    if ($this->usernameExists() == FALSE) {
      array_push($this->stored_user, $this->new_users);
      if (file_put_contents($this->storage, json_encode($this->stored_user, JSON_PRETTY_PRINT))) {
       // return $this->success = "Successful";
    foreach ($this->stored_user as $user) {
      if ($this->id == $user["id"]) {
        $_SESSION['id'] = $user["id"];
        header("location: contact-info.php?id=".$user['id']."");
         }
       }
      } else {
        return $this->error = "Sorry something went wrong";
      }
    }
  }
  
}
