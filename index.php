<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="page.php" method="post">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="name" ><br>
  <label for="Email">Email:</label><br>
  <input type="text" id="email" name="email" ><br><br>
  <label for="phone">Phone:</label><br>
  <input type="text" id="phone" name="phone" ><br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>

