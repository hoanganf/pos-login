<?php
class UserDAO extends BaseDAO{
  function __construct(){
     parent::__construct("`user`");
  }

  function login($userName,$password){
    return $this->getOnceWhere('user_name=\''.$userName.'\' AND password=\''.$password.'\' AND available=1');
  }
}
?>
