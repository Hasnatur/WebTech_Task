

<!DOCTYPE html>
<head>
    <title>Document</title>
    <style>
    .button {
        display: inline-block;
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      border-radius: 4px;
      border: none;
      transition: background-color 0.3s ease;
      cursor: pointer;
      font-size: 16px;
      font-weight: bold;
      
    }


  </style>
</head>
<body>
    <?php 
    include 'layout.php';
   ?>
    <div id ="header">

    <header> <H1>Welcome To Our Page</H1></header>
 </div>
 <br><br>
   
    
 
 
<div id = nav>
    <ul>
    <a href="index.php" class="button">HOME</a>
    <a href="login.php" class="button">LOGIN</a>
    <a href="regristration.php" class="button">REGISTRATION</a>
    <a href="ads_login.php" class="button">ADMINISTRATION LOGIN</a><br>

       
    </ul>
    
</div>

    <div class="text">
        <h3>
            <p>Your Advisor is a tech based platform that provides easy access to legal solutions by connecting people with the right lawyer, accountant or consultant for their specific legal or company need. Your Advisor ensures every single person gets access to justice by guiding individuals through timely, efficient and professional delivery of specialized legal and company services online at the most competitive market prices.

        </p>
    </h3>
    </div>
    

    

    <?php include 'footer.php';   ?>

  
</body>
</html>


