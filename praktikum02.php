<?php
require_once 'header.php';
require_once 'sidebar.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer = htmlspecialchars($_POST["text"]);
    $produk = htmlspecialchars($_POST["produk"]);
    $jumlah = htmlspecialchars($_POST["jumlah"]);
if ($customer && $produk && $jumlah) {
    $harga = 0;
    if ($produk == "laptop") {
        $harga = 5000000;
    } elseif ($produk == "monitor") {
        $harga = 3000000;
    } elseif ($produk == "handphone") {
        $harga = 2000000;

    }
}
}

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tugas Praktikum</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Praktikum 02</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <h1>Table Nilai Mahasiswa</h1>
              <div class="container mt-5">
        <h1>Praktikum Mandiri Form Request POST</h1>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group row">
                <label for="text" class="col-sm-2 col-form-label">Customer:</label>
                <div class="col-sm-10">
                    <input id="text" name="text" placeholder="Nama Customer" type="text" required class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Pilih Produk:</label>
                <div class="col-sm-10">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="produk_0" name="produk" value="laptop" class="custom-control-input" required>
                        <label for="produk_0" class="custom-control-label">Laptop Rp. 5.000.000</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="produk_1" name="produk" value="monitor" class="custom-control-input" required>
                        <label for="produk_1" class="custom-control-label">Monitor Rp. 3.000.000</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="produk_2" name="produk" value="handphone" class="custom-control-input" required>
                        <label for="produk_2" class="custom-control-label">Handphone Rp. 2.000.000</label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="jumlah" class="col-sm-2 col-form-label">Jumlah Produk:</label>
                <div class="col-sm-10">
                    <input id="jumlah" name="jumlah" placeholder="Jumlah Produk" type="number" required class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

        <div class="container mt-5">

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $customer = htmlspecialchars($_POST["text"]);
                $produk = htmlspecialchars($_POST["produk"]);
                $jumlah = htmlspecialchars($_POST["jumlah"]);
            if ($customer && $produk && $jumlah) {
                $harga = 0;
                if ($produk == "laptop") {
                    $harga = 5000000;
                } elseif ($produk == "monitor") {
                    $harga = 3000000;
                } elseif ($produk == "handphone") {
                    $harga = 2000000;

                }

                $total_belanja = $harga * $jumlah;
            }
                echo "<p><strong>Customer:</strong> $customer</p>";
                echo "<p><strong>Produk:</strong> $produk</p>";
                echo "<p><strong>Jumlah Produk:</strong> $jumlah</p>";
                echo "<p><strong>Total Belanja:</strong> $total_belanja</p>";
            } else {
                echo "<p>Error: Form not submitted.</p>";
            }
            ?>
        </div>
    </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              Footer
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>