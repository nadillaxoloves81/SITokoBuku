<?php include_once('../_header.php'); ?>
	
	<?php  
		$kode_buku = $_GET["kode_buku"];
		$query = pg_query("SELECT * FROM buku WHERE kode_buku = '$kode_buku'");
		$result = pg_fetch_array($query);
		$id_penerbit = $result["id_penerbit"];
		

	?>
	<div class="col-md-3"></div>
	<div class="col-md-6 " style="margin-top: 20px;">
      <!-- Horizontal Form -->
      <div class="box box-info">
        <div class="box-header with-border text-center">
          <h3 class="box-title">Form Edit Data Buku</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" action="proses.php" method="post">
        <input type="hidden" name="kode" value="<?php echo $kode_buku; ?>">
          <div class="box-body">
            <div class="form-group">
              <label for="kode_buku" class="col-sm-2 control-label">Code</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" name="kode_buku" id="kode_buku" placeholder="Book Code" value="<?php echo $result["kode_buku"]; ?>" disabled>
              </div>
            </div>

            <div class="form-group">
              <label for="judul" class="col-sm-2 control-label">Book Title</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" name="judul" id="judul" placeholder="Book Title" value="<?php echo $result["judul"]; ?>">
              </div>
            </div>

            <div class="form-group">
              <label for="harga" class="col-sm-2 control-label">Price</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" name="harga" id="harga" placeholder="Price" value="<?php echo $result["harga_satuan"]; ?>">
              </div>
            </div>

            <div class="form-group">
              <label for="harga" class="col-sm-2 control-label">Publisher</label>

              <div class="col-sm-10">

                <select name="penerbit" class="form-control select2" style="width: 100%">
                  <option disabled="">--Choose Publisher--</option>

	              <?php  
				  	  $query = pg_query("SELECT * FROM penerbit");
				  	  while($data = pg_fetch_array($query)) {
				  	  if($data['id_penerbit']==$result['id_penerbit']){
				  ?>
                  <option selected="" value="<?= $data["id_penerbit"]; ?>"><?php echo $data["nama_penerbit"]; ?></option>
              	  <?php } 
              	  	else{ ?>
                  <option  value="<?= $data["id_penerbit"]; ?>"><?php echo $data["nama_penerbit"]; ?></option>
              	  	<?php
              	  	}
              	  }
              	  ?>

                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="stock" class="col-sm-2 control-label">Stock</label>

              <div class="col-sm-10">
                <input value="<?= $result['stok_buku']; ?>" type="number" class="form-control" name="stock" id="stock" placeholder="Stock">
              </div>
            </div>

          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <a href="index.php" class="btn btn-default">Cancel</a>
            <button type="submit" class="btn btn-success pull-right" name="update">update</button>
            <button type="reset" class="btn btn-warning pull-right" style="margin-right: 5px;" name="reset">Reset</button>
          </div>
          <!-- /.box-footer -->
        </form>
      </div>
    </div>

<?php include_once('../_footer.php'); ?>