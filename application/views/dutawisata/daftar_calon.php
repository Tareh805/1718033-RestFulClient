<!DOCTYPE html>
<font color="black">
<?php echo $this->session->flashdata('info'); ?>
</font>
<h1>DATA CALON DUTAWISATA</h1>
<table border="1">
    <tr>
    <th>No</th>
        <th>ID Peserta</th>
        <th>Nama Peserta</th>
        <th>Tanggal Lahir</th>
        <th>Usia</th>
        <th>Jenis Kelamin</th>
        <th>Tinggi Badan</th>
        <th>Berat Badan</th>
        <th>Agama</th>
        <th>Alamat</th>
        <th>Kota</th>
        <th>Pendidikan</th>
        <th>Nama Orang Tua</th>
        <th>ID Data Kota</th>
    </tr>
    <?php
    foreach ($data_dutawisata as $dutawisata) {
        echo "<tr>
                <td>$dutawisata->Nama Peserta</td>
                <td>$dutawisata->Tanggal Lahir</td>
                <td>$dutawisata->Usia</td>
                <td>$dutawisata->Jenis Kelamin</td>
                <td>$dutawisata->Tinggi Badan</td>
                <td>$dutawisata->Berat Badan</td>
                <td>$dutawisata->Agama</td>
                <td>$dutawisata->Alamat</td>
                <td>$dutawisata->Kota</td>
                <td>$dutawisata->Pendidikan</td>
                <td>$dutawisata->Nama Orang Tua</td>
                <td>$dutawisata->ID Data Kota</td>
              <td>" . anchor('$dutawisata/edit/' . $$dutawisata->id_peserta, 'Edit') . "
                  " . anchor('$dutawisata/delete/' . $$dutawisata->id_peserta, 'Delete') . "</td>
              </tr>";
    }
    ?>
</table>
<a href=<?=base_url()?>index.php/$dutawisata/simpan_data>+ Tambah data</a>
</html>