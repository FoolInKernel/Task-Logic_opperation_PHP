<?php
$hasil = "";
$showModal = false;

if (isset($_POST['ok'])) {
    $produk1 = isset($_POST['produk1']);
    $produk2 = isset($_POST['produk2']);
    $showModal = true;

    if (!$produk1 && !$produk2) {
        $hasil = "pilih minimal 1 produk!";
    } elseif ($produk1 && $produk2) {
        $hasil = "kamu mendapatkan diskon";
    } else {
        $hasil = "kamu tidak mendapatkan diskon. Tambah 1 produk lagi untuk mendapatkan diskon!";
    }
}

require_once __DIR__ . "/../Layout/body.php";

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