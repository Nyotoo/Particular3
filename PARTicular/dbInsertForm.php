<html>
<body>
<h1>Add a computers parts using this form</h1>
<form action="insert.php" method="post">

Name: <input type="text" name="Name" /><br><br>

<input type="radio" name="Type" value="Motherboard">Motherboard<br>
<input type="radio" name="Type" value="GPU">GPU<br>
<input type="radio" name="Type" value="Case">Case<br>
<input type="radio" name="Type" value="RAM">RAM<br><br>

<!-- Type: <input type="text" name="Type" /><br><br> -->
Price: <input type="text" name="Price" /><br><br>
 
<input type="submit" />
</form>

<form action="index.html">
    <input type="submit" value="Return" />
</form>

</body>
</html>