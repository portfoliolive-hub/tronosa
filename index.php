<!DOCTYPE html>
<html>
<head>
    <title>Baza svestenika</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  
</head>
    <body>
        <?php include_once 'proces.php';?>
        <?php 
            if (isset($_SESSION['message'])):?>
            <div class="alert alert-<?=$_SESSION['msg_type']?>">
                <?php 
                        echo $_SESSION['message'];
                        unset ($_SESSION['message']);
                ?>
            </div>
        <?php endif;?>
      
        <?php
        
        $mysqli= new mysqli('localhost','root','','krstenja') or die (mysqli_error($mysqli));
        $result= $mysqli->query("SELECT * FROM raspored") or die ($mysqli_error);
         
        ?>


        <div class="container justify-content-center">     
                <table class="table">
                    <thead>
                        <tr>
                            <th>Ime</th>
                            <th>Prezime</th>
                            <th>Telefon</th>
                            <th>Mesto krstenja</th>
                            <th>Adresa krstenja</th>
                            <th>Datum krstenja</th>
                            <th colspan=2>Akcije</th>
                        </tr>
                    </thead>
               
                    <?php while($row=$result->fetch_assoc()):?>
                       <tr>
                           <td><?php echo $row['ime'];?></td>
                           <td><?php echo $row['prezime'];?></td>
                           <td><?php echo $row['telefon'];?></td>
                           <td><?php echo $row['mesto_krstenja'];?></td>
                           <td><?php echo $row['adresa_krstenja'];?></td>
                           <td><?php echo $row['datum_krstenja'];?></td>
                           <td>
                               <a href="index.php?edit=<?php echo $row['id'];?>"
                                    class="btn btn-info">Edit</a>
                               <a href="proces.php?delete=<?php echo $row['id'];?>"
                                    class="btn btn-danger">Delete</a>    
                           </td>
                       </tr>
                    <?php endwhile; ?>
                </table>
             </div>

            <div class="container justify-content-center">
                <form action="proces.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id;?>"> 
                    <div class="form-group">
                    <label>ime</label>   
                    <input type="text" name="ime" class="form-control" value="<?php echo $ime;?>">
                    </div> 
                    <div class="form-group">
                    <label>Prezime</label>   
                    <input type="text" name="prezime" class="form-control" value="<?php echo $prezime;?>">
                    </div> 
                    <div class="form-group">
                    <label>Telefon</label>   
                    <input type="number" name="telefon" class="form-control" value="<?php echo $telefon;?>">
                    </div> 
                    <div class="form-group">
                    <label>Mesto krstenja</label>   
                    <input type="text" name="mesto_krstenja" class="form-control" value="<?php echo $mesto_krstenja;?>">
                    </div> 
                    <div class="form-group">
                    <label>Adresa krstenja</label>   
                    <input type="text" name="adresa_krstenja"class="form-control" value="<?php echo $adresa_krstenja;?>">
                    </div> 
                    <div class="form-group">
                    <label>Datum krstenja</label>   
                    <input type="datum" name="datum_krstenja" class="form-control" value="<?php echo $datum_krstenja;?>">
                    </div> 
                    <div class="form-group">
                    <?php if($update == true):?>
                     <button type="submit" class="btn btn-info" name="update">Update</button>
                    <?php else: ?>   
                    <button type="submit"  class="btn btn-primary" name="sacuvaj">Sacuvaj</button>
                    <?php endif; ?>
                    </div>
                </form>
            </div>    
    </body>
</html>