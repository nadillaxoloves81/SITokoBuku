<?php include_once('../_header.php'); ?>

	<div class="col-md-3"></div>
	<div class="col-md-7 " style="margin-top: 20px;" class="center">
      <!-- Horizontal Form -->
      <div class="box box-info">
        <div class="box-header with-border text-center">
          <h3 class="box-title">Form Insert Data Buku</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" action="proses.php" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="kode_buku" class="col-sm-2 control-label">Code</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" name="kode_buku" id="kode_buku" placeholder="Book Code">
              </div>
            </div>

            <div class="form-group">
              <label for="judul" class="col-sm-2 control-label">Book Title</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" name="judul" id="judul" placeholder="Book Title">
              </div>
            </div>

            <div class="form-group">
              <label for="harga" class="col-sm-2 control-label">Price</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" name="harga" id="harga" placeholder="Price">
              </div>
            </div>

            <div class="form-group">
              <label for="harga" class="col-sm-2 control-label">Publisher</label>

              <div class="col-sm-10">

                <select name="penerbit" class="form-control select2" style="width: 100%;">
                  <option selected="selected" disabled="">--Choose Publisher--</option>

	              <?php  
				  	  $query = pg_query("SELECT * FROM penerbit");
				  	  while($result = pg_fetch_array($query)) {
				  ?>
                  <option value="<?php echo $result["id_penerbit"]; ?>"><?php echo $result["nama_penerbit"]; ?></option>
              	  <?php } ?>

                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="stock" class="col-sm-2 control-label">Stock</label>

              <div class="col-sm-10">
                <input type="number" class="form-control" name="stock" id="stock" placeholder="Stock">
              </div>
            </div>

          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <a href="index.php" class="btn btn-default">Cancel</a>
            <button type="submit" class="btn btn-success pull-right" name="save">Save</button>
            <button type="reset" class="btn btn-warning pull-right" style="margin-right: 5px;" name="reset">Reset</button>
          </div>
          <!-- /.box-footer -->
        </form>
      </div>
    </div>


<?php include_once('../_footer.php'); ?>