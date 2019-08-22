
<?php
class User extends DataRecordModel
{
    public $name;
    public $password;
    public $email;
    public $rate;


    public function addUserFromForm(){
        $this->name = $_POST['name'];
        $this->password = $_POST['password'];
        $this->email = $_POST['email'];
        $this->rate = (int)$_POST['rate'];
        $this->commit();
    }
}