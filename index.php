<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="JsBarcode.all.min.js"></script>
    <title> Barcodes Generator</title>
  </head>
<body>
  <br>
   <div class="container">
      <div class="col-md-6 mx-auto text-center">
         <div class="header-title">
            <h2 class="wv-heading--subtitle">
               Barcodes Generator
            </h2>
         </div>
      </div>
   </div>
   <br>
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#barcodeModal">New Barcode</button>
                    </div>
                    <div class="card-body">
                      <?php

                      $connection=mysqli_connect('localhost','root','','egm_barcodes');
                      $sql="SELECT * FROM tbl_products";
                      $result=mysqli_query($connection,$sql);

                      // Where all the code are store.
                      $arrayBarcodes=array();
                      ?>

                      <div class="row">
                        <div class="col-sm-12">
                          <table class="table table-sm">
                            <tr>
                              <th scope="col">#</th>
                                      <th scope="col">Prodcut Name</th>
                                      <th scope="col">Barcode</th>
                                      <th scope="col">Created Date</th>
                            </tr>
                            <?php 
                            while($ver=mysqli_fetch_row($result)):
                              $arrayBarcodes[]=(string)$ver[2]; 
                              ?>
                              <tr>
                                <td><?php echo $ver[0] ?></td>
                                <td><?php echo $ver[1] ?></td>
                                <td>
                                  <svg id='<?php echo "barcode".$ver[2]; ?>'>
                                </td>
                                <td><?php echo $ver[3] ?></td>
                              </tr>
                            <?php endwhile; ?>
                          </table>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="barcodeModal" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New barcode</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <div class="modal-body">
                    <form action="php/insert.php" method="post">
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label" required>Product name:</label>
                        <input type="text" class="form-control" id="name" name="name" maxlength="20" required>
                      </div>
                      <hr>
                      <button type="submit" class="btn btn-primary">Generate barcode</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

  <script type="text/javascript">

    function arrayjsonbarcode(j){
      json=JSON.parse(j);
      arr=[];
      for (var x in json) {
        arr.push(json[x]);
      }
      return arr;
    }

    jsonvalor='<?php echo json_encode($arrayBarcodes) ?>';
    
    values=arrayjsonbarcode(jsonvalor);

    for (var i = 0; i < values.length; i++) {

      JsBarcode("#barcode" + values[i], values[i].toString(), {
        format: "codabar",
        lineColor: "#000",
        width: 2,
        height: 30,
        displayValue: true
      });
    }
    
  </script>
