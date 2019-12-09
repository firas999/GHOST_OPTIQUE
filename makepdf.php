<?php 
require_once __DIR__ . '/vendor/autoload.php';
session_start();

$nom=$_SESSION['Fnom'];
$email=$_SESSION['Femail'];
$tele=$_SESSION['Ftele'];
$ville=$_SESSION['Fville'];
$adresse=$_SESSION['Fadresse'];
$codeP=$_SESSION['FcodeP'];

$mpdf = new \Mpdf\Mpdf();


$data = "";

$data.='<p style="text-align:center; color:#60adde;   font-size:35px;  text-decoration: underline;">Profile</p> <br><br>';
$data.='<ul>';
$data.= '<li > <strong style="color:gray;">Nom :  </strong> '. $nom . '</li> <br/> <br/>';
$data.= '<li> <strong style="color:gray;">E-mail :   </strong>'. $email . '</li><br/> <br/>';
$data.= ' <li> <strong style="color:gray;">Telephone :    </strong>'. $tele . '</li><br/> <br/>';
$data.= '<li> <strong style="color:gray;">ville :    </strong>'. $ville . '</li><br/> <br/>';
$data.= '<li> <strong style="color:gray;">adresse :  </strong>'. $adresse . '</li><br/> <br/>';
$data.= '<li> <strong style="color:gray;">codeP :    </strong>'. $codeP . '</li><br/> <br/>';
$data.='</ul>';
$mpdf->WriteHTML($data);

$mpdf->Output('profile.pdf','D');

?>