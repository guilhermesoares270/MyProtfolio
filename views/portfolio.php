<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <!-- Our Custom CSS -->
  <link rel="stylesheet" href="../css/myCss.css">
</head>
<body>

  <div class="wrapper">
    <?php include('../templates/sidebar.php');?>

    <div class="content">
      <?php include('../templates/navbar.php');?> 
      
      <div class="container-fluid">
        <div class="container-fluid">
          <?php include('../languages/portuguese/sobreMim.php');?>
        </div>
      </div>
    
      
      

      <!-- <div class="container-fluid">
        <div class="row">

          <div class="card col-sm-4">
            <h5 class="card-header">Backpackers</h5>
            <div class="card-body">
              <p class="card-text">Backpackers is an cellphone application developed for studies purposes with flutter.</p>
              <a href="#" class="btn" style="color:#fff">See repository</a>
            </div>
          </div>

          
          
        
        </div>
      </div> -->

    </div>
</div>

</body>
</html>