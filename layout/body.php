<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Diskon_harga</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <h1 class="text-center">Diskon Harga Barang</h1>
  <hr />
  <h3 class="text-center">Pilih produk</h3>
  <form action="index.php" method="POST">
    <div class="container-produk">
      <!-- Produk 1 -->
      <div class="item-produk">
        <div class="card h-100" style="width: 18rem">
          <div class="ratio ratio-1x1">
            <img
              class="card-img-top"
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThEizV36CEsUuc5Jj-cn32oW7hquW5gRhWrQ&s"
              alt="Card image cap" />
          </div>
          <div class="card-body">
            <p class="card-text">Laptop Lenovo LOQ</p>
          </div>
        </div>
        <input type="checkbox" name="produk1" class="checkbox" />
      </div>

      <!-- Produk 2 -->
      <div class="item-produk">
        <div class="card h-100" style="width: 18rem">
          <div class="ratio ratio-1x1">
            <img
              class="card-img-top"
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5vWwW5WTMDCr-uzPDNSk3aqX8zEBxzklryw&s"
              alt="Card image cap" />
          </div>
          <div class="card-body">
            <p class="card-text">Laptop Lenovo ThinkPad</p>
          </div>
        </div>
        <input type="checkbox" name="produk2" class="checkbox" />
      </div>
    </div>

    <br />
    <div class="text-center mt-4 mb-5">
      <button type="submit" name="ok" class="btn btn-primary btn-lg buton">
        ok
      </button>
    </div>
  </form>

  <div class="modal fade" id="welcomeModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Selamat Datang!</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
          <p class="fs-5">Ini adalah web cek diskon barang yang di pilih menggunakan logika AND 
            <br>
            !Catatan!
            Pilih minimal 2 produk untuk mendapatkan diskon
          </p>
        </div>
        <div class="modal-footer justify-content-center">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Mulai</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="resultModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Hasil Cek Diskon</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
          <p class="fs-5"><?php echo $hasil; ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

</body>

<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
  crossorigin="anonymous"></script>

</html>