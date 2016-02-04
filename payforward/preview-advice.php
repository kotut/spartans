<?php

echo "<p>Advice Title: <b>" .$_POST["title"]. "</b></p>"; 
echo "<p>Your Advice: " .$_POST["advice"]. "</p>"; 

echo "<p> " .$_POST["name"]. ", " .$_POST["role"]. ", " .$_POST["affiliation"]. ", " .$_POST["year"]." </p>"; 


echo "<p>Tags: " .$_POST["tags"]. "<p> " . "Category: " .$_POST["category"]. "</p>";



?>

<form method="POST" action="process-advice.php">

        <input type="Submit" value="Publish">
        <input type="hidden" name="title" value="<?=$_POST['title']?>">
        <input type="hidden" name="advice" value="<?=$_POST['advice']?>">
        <input type="hidden" name="name" value="<?=$_POST['name']?>">
        <input type="hidden" name="role" value="<?=$_POST['role']?>">
        <input type="hidden" name="affiliation" value="<?=$_POST['affiliation']?>">
        <input type="hidden" name="tags" value="<?=$_POST['tags']?>">
        <input type="hidden" name="category" value="<?=$_POST['category']?>">
        

</form>