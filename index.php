<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    
    <title>Basic Banking system</title>
    <style>
    

    h3{
      position: relative;
      bottom:300px;
      left:730px;
      color:rgb(0, 128, 0);
      font: size 34px;
      transition: 0.5s;
      width:300px;
      margin-left:40px;
    }
   
    h3:hover{
      transition:3.2s;
      border:1px solid ;
      padding:25px;
      box-sizing:border-box;
      border: radius 3px;;
      background-color:lightgrey;
      color:#ff0066;
    }

    body {
        
        background-repeat: no-repeat, repeat;
        background-size: 1380px 1380px ;
        background-image:url(https://static.vecteezy.com/system/resources/previews/002/910/128/non_2x/closeup-of-business-woman-hand-putting-money-coin-into-piggy-bank-for-saving-money-saving-money-and-financial-concept-free-photo.jpg);

}
  .img-fluid {
        height:180px;
        weight: 250px;
        margin-left:150px;
        border-radius:50%;
        background-color:grey;
        position:relative;
        right:90px;
        top:60px;
        
  }
  #image-fluid{
        position:relative;
        right:200px;
        height:500px;
        width:700px;
  }

 .row {
        background-color: #9999ff;
       

}
 .mainsec{
      display:flex;
}
 #wraper{
      color:;
      font-size:28px;
      font-weight:bold;
      transition: 0.5em;
}

    </style>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
              
                    <a href="#" style="text-decoration:none;" id="wraper" >Task -1 BASIC BANKING SYSYTEM</div></a>
                </div>
</div>
</div>
              

      <!-- Activity section -->
            <div class=" activity text-center">
              <div class="mainsec">
                  <div class="col-md act">
                    <img src="https://cdn.dribbble.com/users/2095589/screenshots/4166422/user_1.png?compress=1&resize=400x300" class="img-fluid">
                    <br><br><br><br>
                    <a href="createuser.php"><button style="background-color : #2785C4;">Create a User</button></a>
                  </div>
                  <br>
                  <div class="col-md act">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_2hlc0qIx8cxplSpDX-HMWaCPWqjSUFuaGObLZamNdPSPiCmer_kr2q1CHVtG7VRwlFU&usqp=CAU" class="img-fluid">
                    <br><br><br><br>
                    <a href="transfermoney.php"><button style="background-color : #2785C4;">Make a Transaction</button></a>
                  </div>
                  <br>
                  <div class="col-md act">
                    <img src="https://cdn.dribbble.com/users/5010501/screenshots/12251026/transaction_history_4x.jpg" class="img-fluid">
                    <br><br><br><br>
                    <a href="transactionhistory.php"><button style="background-color : #2785C4;">Transaction History</button></a>
                  </div>
            </div>
           </div>
           
            
      </div>
  
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
     