<?php
session_start();
$mysqli= new mysqli('localhost','root','','krstenja') or die(myqli_error($myqli));

$id=0;
$ime='';
$prezime='';
$telefon='';
$mesto_krstenja='';
$adresa_krstenja='';
$datum_krstenja='';
$update=false;

if(isset($_POST['sacuvaj'])){
    $ime=$_POST['ime'];
    $prezime=$_POST['prezime'];
    $telefon=$_POST['telefon'];
    $mesto_krstenja=$_POST['mesto_krstenja'];
    $adresa_krstenja=$_POST['adresa_krstenja'];
    $datum_krstenja=$_POST['datum_krstenja'];

    $mysqli->query("INSERT INTO raspored (ime,prezime,telefon,mesto_krstenja,adresa_krstenja,datum_krstenja) 
    values ('$ime ','$prezime','$telefon','$mesto_krstenja','$adresa_krstenja','$datum_krstenja')") or die($mysqli->error());

    $_SESSION['message']="Sacuvan je podatak u bazi";
    $_SESSION['msg_type']="success";
    
    header('location:index.php');
}

if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    
    
    $mysqli->query("DELETE FROM raspored where id=$id") or die($mysqli->error());

    $_SESSION['message']="Podatak je izbrisan";
    $_SESSION['msg_type']="danger";

    header('location:index.php');

}




if(isset($_GET['edit'])){
    $id=$_GET['edit'];
    $update=true;
    $result= $mysqli->query("SELECT * FROM raspored where  id=$id") or die($mysqli->error());
  
    if(count($result)==1){
        $row=$result->fetch_array();
        $ime=$row['ime'];
        $prezime=$row['prezime'];
        $telefon=$row['telefon'];
        $mesto_krstenja=$row['mesto_krstenja'];
        $adresa_krstenja=$row['adresa_krstenja'];
        $datum_krstenja=$row['datum_krstenja'];
    }
}

if(isset($_POST['update'])){
    $id=$_POST['id'];
    $ime=$_POST['ime'];
    $prezime=$_POST['prezime'];
    $telefon=$_POST['telefon'];
    $mesto_krstenja=$_POST['mesto_krstenja'];
    $adresa_krstenja=$_POST['adresa_krstenja'];
    $datum_krstenja=$_POST['datum_krstenja'];
   
    $mysqli->query("UPDATE raspored set ime='$ime', prezime='$prezime', telefon='$telefon',mesto_krstenja='$mesto_krstenja',adresa_krstenja='$adresa_krstenja',datum_krstenja='$datum_krstenja' where id=$id") or die($mysqli->error());

    
    $_SESSION['message']="Podatak  je izmenjen";
    $_SESSION['msg_type']="warning";
    header('location:index.php');
}



  
?>