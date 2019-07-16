<header>
    <div class="container">
        <h1 class="display-3 text-center">Data Peminjaman Barang</h1>
        <br>
        <button id="tambahdata" class="btn btn-primary mb-2" onclick="TambahData()">Tambah</button>
    </div>
</header>

<!-- Disini halamannya -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Disini Tabelnya hehe -->
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tanggal Pinjam</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Jumlah Pinjam</th>
                            <th>Peminjam</th>
                            <th>Tanggal Kembali</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // deklarasi dulu, nanti bertambah sendiri saat perulangan foreach
                        $nomor = 1;

                        // perulangan foreach
                        foreach ($peminjaman as $p) {
                            ?>
                            <tr>
                                <td><?php echo $nomor++; ?></td>
                                <td><?php echo $p['tgl_pinjam']; ?></td>
                                <td><?php echo $p['kode_barang']; ?></td>
                                <td><?php echo $p['nama_brg']; ?></td>
                                <td><?php echo $p['jml_pinjam']; ?></td>
                                <td><?php echo $p['peminjam']; ?></td>
                                <td><?php echo $p['tgl_kembali']; ?></td>
                                <td><?php echo $p['keterangan']; ?></td>
                                <td>
                                    <button type="submit" class="btn btn-primary mb-2" id="<?php echo $p['no_pinjam']; ?>" onclick="editdata(this.id)">Sunting</button>
                                    <button type="submit" class="btn btn-danger mb-2" id="<?php echo $p['no_pinjam']; ?>" onclick="hapusdata(this.id)">Hapus</button>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<script>
    // Modal untuk tambah
    function TambahData()
    {
        Swal.fire({
            title: 'Tambah Data',
            html: 
                '<form action="tabel/tambah" name="tambahdata" id="tambahdata" method="post">'+
                '<input type="number" id="kode_barang" name="kode_barang" class="swal2-input" placeholder="Ketik kode barang disini..." required>'+
                '<input type="text" id="nama_brg" name="nama_brg" class="swal2-input" placeholder="Ketik nama barang disini..." required>'+
                '<input type="number" id="jml_pinjam" name="jml_pinjam" class="swal2-input" placeholder="Ketik jumlah barang disini..." required>'+
                '<input type="text" id="peminjam" name="peminjam" class="swal2-input" placeholder="Ketik nama peminjam barang disini..." required>'+
                '<input type="date" id="tgl_kembali" name="tgl_kembali" class="swal2-input" placeholder="Pilih tanggal pengembalian barang disini..." required>'+
                '<input type="text" id="keterangan" name="keterangan" class="swal2-input" placeholder="Ketik keterangan barang disini...">'+
                '<form>',
            showCancelButton: true,
            showLoaderOnConfirm: true,
            preConfirm: () => {
                return document.tambahdata.submit();
            },
            allowOutsideClick: () => !Swal.isLoading()
        })
    }

    function editdata(id)
    {
        var id = id;
        $.ajax({
            type: "GET",
            url: "<?= base_url(); ?>tabel/ambildata/"+id,
            cache: false,
            success: function(data){
                editmodal(data);
            },
            error: function(errorThrown){
                alert(errorThrown);
            }
        })
    }

    function editmodal(data)
    {
        const brg = JSON.parse(data);

        Swal.fire({
            title: 'Update Data',
            html: 
                '<form action="tabel/update" name="updatedata" id="updatedata" method="post">'+
                '<input type="hidden" id="no_pinjam" name="no_pinjam" class="swal2-input" value="'+brg.no_pinjam+'">'+
                '<input type="number" id="kode_barang" name="kode_barang" class="swal2-input" placeholder="Ketik kode barang disini..." value="'+brg.kode_barang+'" required>'+
                '<input type="text" id="nama_brg" name="nama_brg" class="swal2-input" placeholder="Ketik nama barang disini..." value="'+brg.nama_brg+'" required>'+
                '<input type="number" id="jml_pinjam" name="jml_pinjam" class="swal2-input" placeholder="Ketik jumlah barang disini..." value="'+brg.jml_pinjam+'" required>'+
                '<input type="text" id="peminjam" name="peminjam" class="swal2-input" placeholder="Ketik nama peminjam barang disini..." value="'+brg.peminjam+'" required>'+
                '<input type="date" id="tgl_kembali" name="tgl_kembali" class="swal2-input" placeholder="Pilih tanggal pengembalian barang disini..." value="'+brg.tgl_kembali+'" required>'+
                '<input type="text" id="keterangan" name="keterangan" class="swal2-input" placeholder="Ketik keterangan barang disini..." value="'+brg.keterangan+'">'+
                '<form>',
            showCancelButton: true,
            showLoaderOnConfirm: true,
            preConfirm: () => {
                return document.updatedata.submit();
            },
            allowOutsideClick: () => !Swal.isLoading()
        })
    }

    function hapusdata(id)
    {
        Swal.fire({
            title: 'Yakin nich mau dihapus?',
            type: 'warning',
            showCancelButton: true,
        }).then((result) => {
            if (result.value) {
                document.location.href = "<?= base_url(); ?>tabel/hapus/"+id
            }
        })
    }
</script>