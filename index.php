<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<body>
   <div class="container">
      <div class="col-md-6 mx-auto text-center">
         <div class="header-title">
            <h2 class="wv-heading--subtitle">
               Barcodes Generator
            </h2>
         </div>
      </div>
   </div>
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#barcodeModal">New Barcode</button>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Prodcut Name</th>
                              <th scope="col">Barcode</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                            </tr>
                          </tbody>
                        </table>
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
                    <form action="php/insert.php" method="POST">
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label" required>Product name:</label>
                        <input type="text" class="form-control" id="name">
                      </div>
                      <hr>
                      <button type="submit" class="btn btn-primary">Generate barcode</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
