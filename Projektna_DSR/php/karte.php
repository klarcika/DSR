<?php 
 include_once('header.php');
//--------------connection--------------
	include_once('connection.php');
    require_once('connection.php');
    //----------------------POIZVEDBA------------------
    		#*********************************************************************************/
		//if(isset($_POST['submit'])){
            $poizvedba = $povezava->prepare('SELECT * FROM dogodek'); //SPREMENI POIZVEDBO GLEDE NA PODATKOVNO BAZO
       
        // DEJANSKA IZVEDBA POIZVEDBE

        $poizvedba->execute();
        $rezultat = $poizvedba->fetchAll(\PDO::FETCH_OBJ);


        foreach ($rezultat as $vrstica){ // ZANKA, KI SE PONOVI ZA VSAKO VRSTICO IZ REZULTATA
         
           echo  " 
           <div class='container-fluid mt-3'>
           <div class='col-lg-3'>
                    <h3 class='fw-bolder' >$vrstica->naziv</h2>
                        <p class='lead fw-normal text-muted mb-0'>$vrstica->datum</p>
                 <div class='col-lg-4'>
                        <h3 class='fw-bolder' >$vrstica->čas</h2>
                        <h4 class='fw-bolder'>$vrstica->lokacija</h2>
                    </div>
                    </div>
                    </div>"; 
                 }
 




 
?>