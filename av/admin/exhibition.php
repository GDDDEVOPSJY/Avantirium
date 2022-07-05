<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="css/style-1.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
<?php include("side-bar.php"); ?>

  <section class="home-section">
  <?php include("nav-header.php"); ?> 
    <style>
    * {
      box-sizing: border-box;
    }
    
    body {
      font-family: Arial, Helvetica, sans-serif;
    }
    
    /* Float four columns side by side */
    .column {
      float: left;
      width: 25%;
      height:100px;
      padding: 0 10px;
    }
    
    /* Remove extra left and right margins, due to padding */
    .row {margin: 0 -5px;
    padding-top:25px;}
    
    
    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    
    /* Responsive columns */
    @media screen and (max-width: 600px) {
      .column {
        width: 100%;
        display: block;
        margin-bottom: 20px;
        
      }
    }
    
    /* Style the counter cards */
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      padding: 16px;
      text-align: center;
      border-radius:20px;
      border-style: solid;
      border-color: hsl(89, 43%, 51%);
      background-color: #f5f5f5;
      height:500%
      
      
      
    }

    .h4{
        padding-top:100px;
        padding-left:20px;
    }
    </style>
    </head>
    <body>
    
    <h4 class="h4">current exhibitions</h2>
    
    <div class="row">
      <div class="column">
        <div class="card">
          <h3>Card 1</h3>
          <p>Some text</p>
          <p>Some text</p>
        </div>
      </div>
    
      <div class="column">
        <div class="card">
          <h3>Card 2</h3>
          <p>Some text</p>
          <p>Some text</p>
        </div>
      </div>
      
      <div class="column">
        <div class="card">
          <h3>Card 3</h3>
          <p>Some text</p>
          <p>Some text</p>
        </div>
      </div>
      
      <div class="column">
        <div class="card">
          <h3>Card 4</h3>
          <p>Some text</p>
          <p>Some text</p>
        </div>
      </div>
    </div>
</section>
</body>
</html>