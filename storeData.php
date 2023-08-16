<?php
    include_once 'connect.php';
    if(!$connect){
        die("Conncetion Failed: ".mysqli_connect_error());
    }
    
    if(isset($_POST['submit'])){
    
        $name=$_POST['name'];
        $surname=$_POST['surname'];
        $idType=$_POST['idType'];
        $idValue=$_POST['idPassport'];
        $cell=$_POST['cell'];
        $address1=$_POST['address1'];
        $address2=$_POST['address2'];
        $suburb=$_POST['suburb'];  
        $code=$_POST['code'];
        $city=$_POST['city'];
        $total=$_POST['submit'];
        $cardName=$_POST['cardName'];
        $cardNum=$_POST['cardNumber'];
        $exp=$_POST['expDate'];
        $ccv= $_POST['ccv'];
        
        function storeDetails($connect,$name,$surname,$idType,$idValue,$cell,$address1,$address2,$suburb,$code,$city,$total){
            $sql="INSERT INTO purchase_details(name, surname, id_type, id_value, cell_num, address1, address2, suburb, postal_code,city,total) VALUES(?,?,?,?,?,?,?,?,?,?,?);";
            $statement=mysqli_stmt_init($connect);
            if(!mysqli_stmt_prepare($statement,$sql)){
             header("location: indexx.php?error=Statment_Failed");
             exit();
            }
         
            mysqli_stmt_bind_param($statement,"sssssssssss",$name,$surname,$idType,$idValue,$cell,$address1,$address2,$suburb,$code,$city,$total);
            mysqli_stmt_execute($statement);
            mysqli_stmt_close($statement);

            header("location: indexx.php?error=none");
            exit();
        }
        storeDetails($connect,$name,$surname,$idType,$idValue,$cell,$address1,$address2,$suburb,$code,$city,$total);
    }
    else{
        header("location: index.php");
        exit();
    }

