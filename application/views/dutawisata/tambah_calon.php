<?php echo form_open_multipart('dutawisata/simpan_data'); ?>
<h1>TAMBAH DATA CALON DUTAWISATA</h1>
<table>
    <tr>
        <td>Nama Peserta</td><td><?php echo form_input('nama_peserta'); ?></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td><td><?php echo form_input('tanggal_lahir'); ?></td>
    </tr>        
    <tr>
        <td>Usia</td><td><?php echo form_input('usia'); ?></td>
    </tr> 
    <tr>
        <td>Jenis Kelamin</td><td><?php echo form_input('jenis_kelamin'); ?></td>
    </tr>
    <tr>
        <td>Tinggi Badan</td><td><?php echo form_input('tinggi'); ?></td>
    </tr>
    <tr>
        <td>Berat</td><td><?php echo form_input('berat'); ?></td>
    </tr>
    <tr>
        <td>Agama</td><td><?php echo form_input('agama'); ?></td>
    </tr>
    <tr>
        <td>alamat</td><td><?php echo form_input('alamat'); ?></td>
    </tr>
    <tr>
        <td>Kota</td><td><?php echo form_input('kota'); ?></td>
    </tr>
    <tr>
        <td>Pendidikan</td><td><?php echo form_input('pendidikan'); ?></td>
    </tr>
    <tr>
        <td>Nama Orang Tua</td><td><?php echo form_input('nama_ortu'); ?></td>
    </tr> 
    <tr>
        <td>ID Data Kota</td><td><?php echo form_input('id_datakota'); ?></td>
    </tr>
    <tr>
        <td></td>
        <td colspan="2">
            <?php echo form_submit('submit', 'Simpan'); ?>
            <?php echo anchor('Data Calon Dutawisata', 'Kembali'); ?></td></tr>
</table>
<?php
echo form_close();
?>