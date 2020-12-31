<?php echo form_open('dutawisata/edit_data'); ?>
<?php echo form_hidden('id_peserta', $data_dutawisata[0]->id_peserta); ?>
<h1>EDIT NOVEL</h1>
<table>
    <tr><td>ID</td><td><?php echo form_input('', $data_dutawisata[0]->id_peserta, "disabled"); ?></td></tr>
    <tr><td>Nama Peserta</td><td><?php echo form_input('nama_peserta', $data_dutawisata[0]->nama_peserta); ?></td></tr>
    <tr><td>Tanggal Lahir</td><td><?php echo form_input('tanggal_lahir', $data_dutawisata[0]->tanggal_lahir); ?></td></tr>
    <tr><td>Usia</td><td><?php echo form_input('usia', $data_dutawisata[0]->usia); ?></td></tr>
    <tr><td>Jenis Kelamin</td><td><?php echo form_input('jenis_kelamin', $data_dutawisata[0]->jenis_kelamin); ?></td></tr>
    <tr><td>Tinggi Badan</td><td><?php echo form_input('tinggi', $data_dutawisata[0]->tinggi); ?></td></tr>
    <tr><td>Berat Badan</td><td><?php echo form_input('berat', $data_dutawisata->berat); ?></td></tr>
    <tr><td>Agama</td><td><?php echo form_input('agama', $data_dutawisata[0]->agama); ?></td></tr>
    <tr><td>Alamat</td><td><?php echo form_input('alamat', $data_dutawisata[0]->alamat); ?></td></tr>
    <tr><td>Nama Kota</td><td><?php echo form_input('nama_kota', $data_dutawisata[0]->nama_kota); ?></td></tr>
    <tr><td>Pendidikan</td><td><?php echo form_input('pendidikan', $data_dutawisata[0]->pendidikan); ?></td></tr>
    <tr><td>Nama Orang Tua</td><td><?php echo form_input('nama_ortu', $data_dutawisata[0]->nama_ortu); ?></td></tr>
    <tr><td>ID Data Kota</td><td><?php echo form_input('id_datakota', $data_dutawisata->id_datakota); ?></td></tr>
    <tr><td colspan="2">
            <?php echo form_submit('submit', 'Simpan'); ?>
            <?php echo anchor('Data Calon Dutawisata', 'Kembali'); ?></td></tr>
</table>
<?php
echo form_close();
?>