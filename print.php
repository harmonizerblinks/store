<?php
	session_start();

	if(empty($_SESSION['inventoryUserEmail']) || !isset($_SESSION['inventoryUserEmail'])){

			header("location: index.php");
	}
?>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<body onload="print()" style="background-color: #252830">
<div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4" style="background-color: #fff">
      <div class="card">
          <div class="card-block">
              <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                      <address>
                          <strong>VEJODIA - MART SUPPERMAKET</strong>
                          <br>
                          <abbr title="Phone">Tel:</abbr> 0246635680
                          <br>
                          Taifa, Accra
                          <br>
                          <br>
                          <p class="h4">Receipt</p>
                      </address>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                      <em>Date: <?php echo date('d-m-y');?></em>
                      <br>
                      <em>Receipt #: <?php echo "RT".date('mdhis');?></em>
                      <br>
                      <em>Cashier: <?php echo $_SESSION['inventoryUserFullname'];?></em>

                  </div>
              </div>
              <div class="row">

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Item</th>
                            <th>Qty</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Total(₡)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(isset($_POST['amount'])){
                          $c = 1;
                            $_SESSION['quantities'] =0;
                            $_SESSION['total_amt'] = 0;

                          $sales = $_SESSION["sales"];
                          foreach($sales as $Sale){
                            $_SESSION['quantities'] += $Sale['quantity'];
                            $_SESSION['total_amt'] += $Sale['total_amount'];
                            echo '<tr>
                              <td>'.$c.'</td>
                              <td class="col-md-9"><em>'.$Sale['items_name'].'</em></td>
                              <td class="col-md-1" style="text-align: center">'.$Sale['quantity'].'</td>
                              <td class="col-md-1 text-center">₵'.$Sale['price'].'</td>
                              <td class="col-md-1 text-center">₵'.$Sale['total_amount'].'</td>
                              </tr>
                            ';
                            $c++;
                          }
                        }
                        ?>
                        <tr>
                          <td>   </td>
                          <td>   </td>
                          <td class="text-right">
                            <p>
                                <strong>Net Total: </strong>
                            </p>
                            <p>
                                <strong>VAT+HNIL: </strong>
                            </p>
                            <p>
                                <strong>TOTAL: </strong>
                            </p>
                          </td>
                            <td colspan="2" class="text-left">
                            <p>
                                <strong>GHC <?php echo $_SESSION['total_amt']; ?></strong>
                            </p>
                            <p>
                                <strong>GHC 0</strong>
                            </p>
                            <p>
                                <strong>GHC <?php echo $_SESSION['total_amt']; ?></strong>
                            </p>
                          </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-right">
                            <p>
                                <h4 class="text-success">Amount Paid: </h4>
                            </p>
                            <p>
                                <h4 class="text-warning">Balance: </h4>
                            </p>
                          </td>
                            <td colspan="3" class="text-left">
                            <p>
                                <h4 class="text-success">GHC <?php echo $_POST['amount']; ?></h4>
                            </p>
                            <p>
                                <h4 class="text-warning">GHC <?php echo $_POST['amount'] - $_SESSION['total_amt']; ?></h4>
                            </p>
                          </td>
                        </tr>
                    </tbody>
                </table>
                <?php
    include 'includes/footer.php';
    ?>
            </div>
        </div>
      </div>
    </div>
  </div>
	<?php
	    unset($_SESSION["sales"]);
	    unset($_SESSION['total_amt']);
	  ?>
</body>
