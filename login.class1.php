<?php

class LoginUser{
  private $username;
  private $password;
  public $success;
  public $error;
  private $storage = "userdata.json";
  private $stored_user;
  
  public function __construct($username, $password){
    $this->username = $username;
    $this->password = $password;
    $this->stored_user = json_decode(file_get_contents($this->storage), true);
    $this->login();
  }
  
  private function login(){
    foreach ($this->stored_user as $user){
      if ($user["username"] == $this->username || $user["email"] == $this->username) {
        if ($user["password"] == $this->password) {
          $_SESSION['id'] = $user["id"];
        header("location: contact-info?id=".$user['id']."");
        } else {
          return $this->error = "Wrong Password";
        }
      }
    }
    return $this->error = "Wrong Username or Email";
  }
  
}