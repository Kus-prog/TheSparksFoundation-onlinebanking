<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
	<style type="text/css">
        *{
            margin:0px;
            padding:0px;
        }
	.bgcolor{
		background-color:grey;
		background-size: 100% 110%;
		width: 100%;
		height: 100vh;
	  }
	tr{
		color:black;
    padding:20px 40px;
    text-align:center;
	}
  
  
    li {
  }
  list-style: none;
}
.head{
  color:black;
  font-size: 40px;
  padding:30px 20px;
  margin-left:300px;


}

.header {
  background-color: #6495ED;
  color: #fff;
  height: 90px;
}

.header-logo {
  float: left;
  font-size: 36px;
  padding: 20px 40px;

}

.header-list li {
  float: left;
  padding: 33px 20px;
  color:black;
  font-size:30px;
}
	</style>
</head>

<body>

<?php
  include 'nav1.php';
?>
<div class = "bgcolor">
	<div class="container">
        <h1 class="head">Transaction History</h1>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
              
            </tr>
        </thead>
        <tbody>
        <?php

            include 'database.php';

            $sql ="select * from transact";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
          
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</div>
</body>
</html>