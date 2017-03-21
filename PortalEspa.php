<?php

// Report simple running errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include("error.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {
      background-image:url("apple.jpg");
      background-size:cover;  
      background-position:center;  
      height: 100%;
      padding-top: 120px;


    }
    .frm-main{
       border:1px solid grey;
       border-radius:10px;
       margin-bottom: 180px;
       padding: 10px;
       background-color: white;

    }
    
    
    .owhite{
        /*color:white;*/
        font-family: Tahoma, Geneva, sans-serif;
      }

    
    .white {
        font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;  
        /*color:white;  */
      } 
      .btn{
      margin-bottom: 20px;
      margin-top: 5px;
      }
       
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="http://dipechan.blogspot.gr">Δ/νση Π.Ε. Χανίων</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">

        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Εφαρμογές
        <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="http://www.dipechan.gr/espa-payments/">Εφαρμογή Εκτύπωσης Μισθοδοσίας</a></li>
          <li><a href="http://www.dipechan.gr/espa_prog/index.php">Εύρεση Πράξης ΕΣΠΑ/ΠΔΕ Εκπαιδευτικού</a></li>
          </ul>
        </li>      
        
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Παρουσιολόγια
        <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="parousiologia/odigies.doc">Οδηγίες Συμπλήρωσης</a></li>
          <li role="presentation" class="divider"></li>
          <li><a href="parousiologia/eniaioy.xls">Ενιαίου Τύπου Δημοτικό</a></li>
          <li><a href="parousiologia/prosxoliki.xls">Ενίσχυση Προσχολικής Αγωγής</a></li>
          <li><a href="parousiologia/eksatomikeumeni.xls">Εξατομικευμένη</a></li>
          <li><a href="parousiologia/exeidikeumeni.xls">Εξειδικευμένη</a></li>
          <li><a href="parousiologia/pep.xls">ΠΕΠ-ΕΒΠ</a></li>
          <li><a href="parousiologia/ypostiriktikes.xls">Υποστηρικτικές Δομές</a></li>
          <li><a href="parousiologia/eko.xls">ΕKO</a></li>
          <li role="presentation" class="divider"></li>
          <li><a href="parousiologia/pde.xls">ΠΔΕ</a></li>
          <li><a href="parousiologia/pde_eep_evp.xls">ΠΔΕ ΕΕΠ-ΕΒΠ</a></li>
          </ul>
        </li>   
        <li><a href="https://drive.google.com/drive/folders/0BxqB63k_FMnpbWphWnlrU0lWQms" target="_blank">Οδηγοί Υλοποίησης</a></li>
        <li><a href="https://drive.google.com/drive/folders/0BxqB63k_FMnpbDhNd0JDLUliRjA" target="_blank">Χρήσιμα Έντυπα</a></li>
        <li><a href="http://dipechan.blogspot.gr/search/label/Αναπληρωτές ΕΣΠΑ" target="_blank">Αναρτήσεις</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    
    <div class="col-sm-8 col-md-offset-2 text-center"> 
      <form method="post" class="frm-main" accept-charset='UTF-8' >

      <h1 class="center white">Portal Αναπληρωτών Εκπαιδευτικών ΕΣΠΑ/ΠΔΕ</h1>

      <h3 class="center white">Συνδεθείτε με το ΑΦΜ και το Επώνυμό σας </h3>
      </br>

      <div class="form-group">
      <label for="name" class="owhite">ΑΦΜ:</label>
      <input type="text" name="afm" id="nm" class="form-control" placeholder="ΑΦΜ" value="<?php echo $_POST['afm']; ?>" />
      </div>

      <div class="form-group">

      <label for="surname" class="owhite">Επώνυμο:</label>
      <input type="text" name="surname" id="snm" class="form-control" placeholder="Επώνυμο" value="<?php echo $_POST['surname']; ?>"/>

    </div>



  <input type="submit" name="submit" class="btn btn-success btn-lg" value="Υποβολή"" />

  <?php echo $result; ?>


  </form>

    </div>
    
  </div>
</div>

<footer class="container-fluid text-center">
  <p>&copy; Χαραλαμπάκης Στέργιος  <a href="mail@dipe.chan.sch.gr"> ΔΙ.Π.Ε. Χανίων</a</p>
</footer>

 <script type="text/javascript">  
 
 // $(".content").css("min-height",$(window).height()-200);  
 


 </script>


</body>
</html>
