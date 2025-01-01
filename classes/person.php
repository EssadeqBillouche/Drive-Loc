<?php
namespace classes;

class person {
    protected $name;
    protected $email;
    protected $password;
    protected $role;

    public function __construct($name, $email, $password, $roleId) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->role = $roleId;
    }

    public function login($email, $password, $roleId) {

        $dbConnection = new dbConnaction();
        $dbConnection = $dbConnection->getConnection();
        $stetment = $dbConnection->prepare("SELECT * FROM users WHERE email = :email");
        $stetment->bindParam(':email', $email);
        $stetment->execute();
        echo $stetment;
        if ($stetment->rowCount() === 1) {
            $stetment->fetch();
            if (password_verify($password, $stetment['password']))
            {
                    session_start();
                    $_SESSION['id'] = $stetment['id'];
                    $_SESSION['name'] = $stetment['name'];
                    $_SESSION['email'] = $stetment['email'];
                    $_SESSION['role'] = $stetment['role'];
                    if ($roleId == 1) {
                        header('Location: adminDashboard.php');
                    }else{
                        header('Location: index.php');
                    }
            }else{
                    echo "Wrong password";
            }
        }
    }
}
