<?php
include_once(__DIR__ . DIRECTORY_SEPARATOR . "/Db.php");
class User
{
    private string $firstname;
    private string $lastname;
    private string $email;
    private string $hashedPassword;
    private string $profilePhoto; // Profielfoto wordt als optioneel beschouwd

    //firstname
    public function setFirstname($pFirstname)
    {
        if (empty($pFirstname)) {
            throw new Exception("First name cannot be empty.");
        }
        $this->firstname = $pFirstname;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }


    //lastname
    public function setLastname($pLastname)
    {
        if (empty($pLastname)) {
            throw new Exception("last name cannot be empty.");
        }
        $this->lastname = $pLastname;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    //email
    public function setEmail($pEmail)
    {
        if (empty($pEmail)) {
            throw new Exception("email cannot be empty.");
        }
        $this->email = $pEmail;
    }

    public function getEmail()
    {
        return $this->email;
    }

    //password
    public function setPassword($pPassword)
    {
        if (empty($pPassword)) {
            throw new Exception("password cannot be empty.");
        }
        $this->hashedPassword = password_hash($pPassword, PASSWORD_DEFAULT);
    }
    public function getHashedPassword()
    {
        return $this->hashedPassword;
    }
    
    public function setProfilePhoto($photoFileName)
    {
        $this->profilePhoto = $photoFileName;
    }

    // Profielfoto ophalen
    public function getProfilePhoto()
    {
        return $this->profilePhoto;
    }

    //save
    public function save()
{
    $conn = Db::getConnection();
    $statement = $conn->prepare("INSERT INTO users (firstname, lastname, email, password, profiel_foto) 
                                 VALUES (:firstname, :lastname, :email, :password, :profiel_foto)");

    // Bind values including profiel_foto or provide a default value
    $statement->bindValue(":firstname", $this->firstname);
    $statement->bindValue(":lastname", $this->lastname);
    $statement->bindValue(":email", $this->email);
    $statement->bindValue(":password", $this->hashedPassword);
    
    // Check if profiel_foto is set, otherwise provide a default value
    if (isset($this->profilePhoto)) {
        $statement->bindValue(":profiel_foto", $this->profilePhoto);
    } else {
        $statement->bindValue(":profiel_foto", 'profiel_picture_leeg.png'); // Default placeholder image
    }

    return $statement->execute();
}

public function canLogin($pEmail, $pPassword)
{
    $conn = Db::getConnection();
    $statement = $conn->prepare("SELECT * FROM users WHERE email = :email");
    $statement->bindValue(":email", $pEmail);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($pPassword, $user['password'])) {
        return $user; // Return user data
    } else {
        return false;
    }
}


    // public static function getUserByEmail($email)
    // {
    //     $conn = new PDO('mysql:host=localhost;dbname=lab2', "root", "root");
    //     $statement = $conn->prepare("SELECT * FROM users WHERE email = :email");
    //     $statement->bindValue(":email", $email);
    //     $statement->execute();
    //     return $statement->fetch(PDO::FETCH_ASSOC);
    // }

    // public static function getAll(){ //static zorgt dat je eraan kunt zonder object
    //     $conn = new PDO('mysql: host=localhost; dbname=studentcards', "root", "root");
    //     $statement = $conn->prepare("SELECT * FROM students"); //bind hier niet nodig, want geen informatie van user of post gebruikt
    //     $statement->execute();
    //     $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    //     // var_dump($result);
    //     return $result;

    // }   
}
/*     public function __construct($pFirstname) //pname staat voor parameter name, heeft andere naam als firstname gekregen, want anders denken wa dat dat hetzelfde moet zijn 
    {
        if(empty($pFirstname)){
            throw new Exception("Firstname cannot be empty");
        }
        else{
            $this->firstname = $pFirstname;
        }
    } */
