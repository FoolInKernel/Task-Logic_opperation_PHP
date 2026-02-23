<?php
$hasil = "";
$showModal = false;

if (isset($_POST['ok'])) {

    $produk1 = isset($_POST['produk1']);
    $produk2 = isset($_POST['produk2']);
    $produk3 = isset($_POST['produk3']);

    $showModal = true;

    if (!$produk1 && !$produk2 && !$produk3) {
        $hasil = "Pilih minimal 1 produk!";
    } 
    elseif ($produk1 && $produk2 && $produk3) {
        $hasil = "Kamu tidak mendapatkan diskon (hanya 2 produk yang mendapatkan diskon)";
    } 
    elseif (
        ($produk1 && $produk2) ||
        ($produk1 && $produk3) ||
        ($produk2 && $produk3)
    ) {
        $hasil = "Kamu mendapatkan diskon";
    } 
    elseif ($produk1 || $produk2 || $produk3) {
        $hasil = "Tambah 1 produk lagi untuk mendapatkan diskon!";
    }
}

require_once "/var/task/user/layout/body.php" ;

?>
<?php if ($showModal): ?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var myModal = new bootstrap.Modal(document.getElementById('resultModal'));
            myModal.show();

            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        });
    </script>
<?php else: ?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var welcome = new bootstrap.Modal(document.getElementById('welcomeModal'));
            welcome.show();
        });
    </script>
<?php endif; ?>