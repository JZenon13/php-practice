<html>
    <head>
        <meta charset="UTF-8" >
        <title></title>
    </head>
    <body>
   <form action="madlib.php" method="get">
   Color: <input type="text" name="color">
    <br>
    Plural Noun: <input type="text" name="pluralNoun">
    <br>
    Celebrity: <input type="text" name="celebrity">
       <input type="submit">

 <?php 
 $color = $_GET["color"];
 $pluralNoun = $_GET["pluralNoun"];
 $celebrity = $_GET["celebrity"];

 echo "Roses are {color}";
 echo "{pluralNoun} are blue";
 echo "I love {celebrity}";
    
 ?>

    </body>
</html>