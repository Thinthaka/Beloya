<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    

    <link rel="stylesheet"  href="style.css">
    <link rel="stylesheet"  href="slidebar.css">
    <link rel="stylesheet"  href="home.css">
    <link rel="stylesheet"  href="form.css">
    <link rel="stylesheet"  href="dashstyle.css">
    <link rel="stylesheet" href="addproduct.css">
    <link rel="stylesheet" href="manage.css">

    
</head>
<body>

<nav class="main-menu">

<div class="scrollbar" id="style-1">

<br><br>
    
      
<ul>
<li>                               
<i class="nav-icon"><img src= "logo.png" class="logo"></i>
<span class="nav-text">Admin Panel</span>
</li> 

<br>
  
<li>                                   
<a href="admindashboard.php">
<i class="fa fa-home fa"></i>
<span class="nav-text">Dashboard</span>
</a>
</li>   

<br>
   
<li>                                 
<a href="">
<i class="fa fa-user fa-lg"></i>
<span class="nav-text">Members</span>
</a>
</li>  

<br>
  
<li>                                 
<a href="messageview.php">
<i class="fa fa-envelope-o fa-lg"></i>
<span class="nav-text">Messages</span>
</a>
</li> 

<br>
  
<li>
<a href="addproduct.php">
<i class="fa fa-clock-o fa-lg"></i>
<span class="nav-text">Add product</span>
</a>
</li>

<br>
  
<li>
<a href="manageproduct.php">
<i class="fa fa-desktop fa-lg"></i>
<span class="nav-text">Edit/Remove Product</span>
</a>
</li>
  


</ul>

<br>
<li>
                                   
<a href="">
<i class="fa fa-question-circle fa-lg"></i>
<span class="nav-text">Help</span>
</a>
</li>   
    
<br>  
<form id="form1" action="includes/logout.inc.php" method="post">
</form>
<ul class="logout">
<li  class="darkerli">

    <a href="#" >
    <i class="fa fa-lightbulb-o fa-lg"></i>
    <span class="nav-text"><button  onclick="document.getElementById('form1').submit();" style="background: none!important;border: none;padding: 0!important;cursor: pointer;">Logout</button><span></a>

</li>  
</ul>
</nav>



