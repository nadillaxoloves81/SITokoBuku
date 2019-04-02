<?php include_once('../_header.php'); ?>

	  <section class="content-header">
      <h1>
        List
        <small>Daftar Penerbit</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

	<!-- Main content -->
    <section class="content">
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Table With Full Features</h3>
        </div>

        <a href="add.php" style="margin-right: 10px;" class="btn btn-success pull-right"><i class="fa fa-plus"> <b>Add</b></i></a>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
	            <tr>
	              <th>Kode Buku</th>
	              <th>Judul</th>
	              <th>Harga</th>
	              <th>Penerbit</th>
	              <th>Stok</th>
	              <th>Action</th>
	            </tr>
            </thead>

            <tbody>
            <?php  
      				$query = pg_query("SELECT * FROM buku");
      				while ( $result = pg_fetch_array($query) ) { 
      			?>
	            <tr>
	              <td><?php echo $result["kode_buku"]; ?></td>
	              <td><?php echo $result["judul"]; ?></td>
	              <td align="right">Rp <?php echo $result["harga_satuan"]; ?>,00-</td>
                <?php  
                  $id_penerbit = $result["id_penerbit"];
                  $nama_penerbit = pg_query("SELECT nama_penerbit FROM penerbit WHERE id_penerbit = '$id_penerbit'");
                ?>
	              <td><?php echo $nama_penerbit["nama_penerbit"]; ?></td>
	              <td><?php echo $result["stok_buku"]; ?></td>
	              <td align="center">
	              	<a href="edit.php?kode_buku=<?php echo $result['kode_buku']; ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
	              	<a href="del.php?kode_buku=<?php echo $result['kode_buku']; ?>" class="btn btn-danger" onclick="return confirm('Apakah yakin akan menghapus data ini?')"><i class="fa fa-trash"></i></a>
	              </td>
	            </tr>
  	        <?php } ?>
            </tbody>
          </table>
        </div>
        <?php  
          $id_penerbit = $result["id_penerbit"];
          var_dump($id_penerbit);
          exit();
          $nama_penerbit = pg_query("SELECT nama_penerbit FROM penerbit WHERE id_penerbit = '$id_penerbit'");
        ?>
      </div>  
	</section>


<?php include_once('../_footer.php'); ?>