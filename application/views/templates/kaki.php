    <!-- Popper.js -->
    <script src="<?= npmURL(); ?>popper.js/dist/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="<?= npmURL(); ?>bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- SweetAler2 JS nya, pengganti BS Modal -->
    <script src="<?= npmURL(); ?>sweetalert2/dist/sweetalert2.all.min.js"></script>

    <!-- Untuk plugin JqueryDataTabel -->
    <script src="<?= jsURL(); ?>jquery.dataTables.min.js"></script>

    <!-- Untuk plugin JquertDataTabel juga, tapi semenjak kita make Bootstrap, jadi stylingnya gak pake bawaan pluginnya. -->
    <script src="<?= jsURL(); ?>dataTables.bootstrap4.min.js"></script>
    
    <!-- Dialog kalo sukses. Hapus aja gak usah pake dari baris 16-34 -->
    <?php
    if ($this->session->userdata('status') == TRUE)
    {
        ?>
        <script>
        Swal.fire({
        position: 'bottom-end',
        backdrop: false,
        type: 'success',
        title: 'Sukses diproses!',
        showConfirmButton: false,
        timer: 1900
        })
        </script>
        <?php
    }
    ?>
    <script>
    // Inisialisasi plugin JqueryDataTable
    $(document).ready(function() {
        $('.table').DataTable({
            "language": {
                "url": "<?= jsURL(); ?>indonesian-gaul.json"
            }
        });
    });
    </script>
</body>
</html>
