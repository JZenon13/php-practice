<html>
    <head>
        <meta charset="UTF-8" >
        <title></title>
    </head>
    <body>
   
       
<form action="site.php" method="get">
Name: <input type="text" name="name">
Age: <input type="number" name="age">
<input type="submit">
</form>
<br>
 blahh <?php echo $_GET [ "name" ]; ?>
 <?php echo $_GET ["age"]; ?>
    </body>
</html>