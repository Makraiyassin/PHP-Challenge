<h1>Exercice 10.1</h1> 

<form action="">
    <label for="you">you are: </label>
    <br>
    <select name="you" id="you">
        <option value="M">male</option>
        <option value="F">female</option>
    </select>
    <input type="submit" value="ok">
</form>
<br>
<?php

if(isset($_GET['you'])){
    $gender = $_GET['you'];
    $hello = ($gender == "M") ? "Hello boy" : "Hello girl" ;
  
    echo $hello;
}
?>