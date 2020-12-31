<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ERENHOUSES</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <style > 
   img{
    height: 682px;
    width: 100%;
   }
     /*.bg{
      background: url("site.png") no-repeat;
      background-size: 100% 770px;
      width: 100%;
      height: 770px;
      }*/
    </style>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg text-white"> 
      <div class="container py-2"> <a href=""  class="navbar-brand">EREN HOUSES</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-houses" aria-controls="navbar-houses" >
          <span class="navbar-toggler-icon"> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-houses">
          <ul class="navbar-nav ml-auto ">
            <li class="nav-item px-4">
              <a href="admin.php" class="nav-link text-white ">ADMIN LOGIN</a>
            </li>
            <li class="nav-item px-4">
              <a href="project2.php" class="nav-link text-white">USER LOGIN</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    

    <div id="carouselExampleIndicators" class="carousel slide"  data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
        
      </ol>
      <div class="carousel-inner text-center style=">
        <div class="carousel-item active ">
          <img src="houses1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="houses2.jpg" class="d-block w-100" alt="...">
        
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
  </html>