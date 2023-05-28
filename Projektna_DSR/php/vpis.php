<?php


    include_once('connection.php');
   // include('header.php');

   try{
   $message="";

   if(isset($_POST["submit"])){
    if(empty($_POST["email"]) || empty($_POST["geslo"])){
        $message='<label>Mankajoca polja</label>';
    }else{
        $poizvedba = $povezava->prepare('SELECT * FROM registriran_uporabnik WHERE email= :email' ); //SPREMENI POIZVEDBO GLEDE NA PODATKOVNO BAZO
    //    $geslo= password_verify($_POST["geslo"], 'geslo');
    //    echo $geslo;
        $poizvedba->execute(
            array(
                'email'=> $_POST["email"]
                )
        );
        
        $_SESSION["email"]=$_POST['email'];
        $geslo=$_POST['geslo'];

        $row= $poizvedba->fetch(PDO::FETCH_ASSOC);
        $hashed_password = $row['geslo'];
       if( password_verify($geslo, $hashed_password)){

            header( 'Location: \Projektna\uporabnik.html' );
        }
        else{
            $message='<label>email ali geslo je napacno</label>';
        }
    }
   }
}
catch(PDOException $error){
    $message= $error-> getMessage();
}

?>


