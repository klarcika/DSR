<?php 
 include_once('header.php');
//--------------connection--------------
	include_once('connection.php');
    require_once('..\tcpdf\tcpdf.php');

    //----------------------POIZVEDBA------------------

    $poizvedba = $povezava->prepare('SELECT * FROM dogodek'); //SPREMENI POIZVEDBO GLEDE NA PODATKOVNO BAZO
       
    // DEJANSKA IZVEDBA POIZVEDBE

    $poizvedba->execute();
    $rezultat = $poizvedba->fetchAll();
  $data=array();

foreach ($rezultat as $vrstica){

    $data[]=$rezultat;
}

echo json_encode($data);

 
if(isset($_POST['submit'])){ 
// Create a new PDF document
$pdf = new TCPDF();

// Iterate through the data and add it to the PDF
foreach ($rezultat as $row) {
    $pdf->Cell(0, 0, $row['column']);
    $pdf->Ln();
}

// Set the appropriate HTTP headers
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="file.pdf"');

// Output the PDF to the browser
$pdf->Output('file.pdf', 'D');
}
?>