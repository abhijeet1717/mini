<!DOCTYPE html>
<html lang="en">
<head>
    <title>PhotoStock</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
</head>
<body>
<?php include'menu.php'?>
<section class="my-5">
<div class="py-5">
<h2 class="text-center">Contact</h2>
<center>
<div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <p>Drop Us a Message</p>
</center>
    <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
    <div class="'form-group">
    <label>USername</label>
    <input type="text" name="user" autocomplete="off" class="form-control">

    </div>
    <div class="'form-group">
    <label>Email</label>
    <input type="text" name="email" autocomplete="off" class="form-control">

    </div>
    <div class="'form-group">
    <label>Mobile</label>
    <input type="text" name="mobile" autocomplete="off" class="form-control">

    </div>
    <div class="'form-group">
    <label>Comments</label>
    <textarea class="form-control" name="comment">
    </textarea>
    </div>
    <button type="submit" class="btn btn-success">Submit
    </button>
    </form>
    </div>
</section>
<footer>
<p class="p-3 bg-dark text-white text-center" >@photostock.com</p>
</footer>
</body>
</html>