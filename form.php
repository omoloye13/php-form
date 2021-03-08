<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
   h1{
       text-align: center;
   } 
   input{
       display: block;
       margin-bottom: 2%;
       width: 50%;
       /* margin: auto;  */
   }
  
    
    </style>
</head>
<body>

<h1>Registration Form</h1>
<form action="form.php" method="get">
<!-- <input type="file"> -->
   FirstName:<input type="text" name="fname" required>
   LastName:<input type="text" name="lname" required>
   Email:<input type="email" name="email" required>
   PhoneNumber:<input type="number" name="num" required>
   <button type="submit">Submit</button><br>
</form>
Your FirstName is <?php echo $_GET["fname"]?><br>
Your LastName is <?php echo $_GET["lname"]?><br>
Your Email is <?php echo $_GET["email"]?><br>
Your PhoneNumber is <?php echo $_GET["num"]?><br>

</body>
</html>