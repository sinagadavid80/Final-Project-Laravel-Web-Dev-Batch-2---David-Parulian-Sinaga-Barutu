@extends('tampilandasar')

<link rel="stylesheet" href="/css/form.css">

<form action="" method="POST">
    @csrf
    
    <h2 class="cl">Edit Data Guru :</h2>
    <br>
    <br>
    
    <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" value="{{$guru->nama_lengkap}}">
    <br>

    <input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" value="{{$guru->tanggal_lahir}}">
    <br>

    <textarea name="alamat" placeholder="Alamat" id="" cols="30" rows="10">"{{$guru->alamat}}"</textarea>
    <br>

    <p>Jenis Kelamin :</p>
        <p><input type="checkbox" name="jenis_kelamin" value="Laki-Laki">Laki-Laki</p>
        <p><input type="checkbox" name="jenis_kelamin" value="Perempuan">Perempuan</p>

    <p>Mata Pelajaran :</p>
        <p><input type="checkbox" name="mata_pelajaran" value="Fisika">Fisika</p>
        <p><input type="checkbox" name="mata_pelajaran" value="Kimia">Kimia</p>
        <p><input type="checkbox" name="mata_pelajaran" value="Matematika">Matematika</p>
        <p><input type="checkbox" name="mata_pelajaran" value="Biologi">Biologi</p>
        <p><input type="checkbox" name="mata_pelajaran" value="Bahasa Inggris">Bahasa Inggris</p>
        <p><input type="checkbox" name="mata_pelajaran" value="Bahasa Indonesia">Bahasa Indonesia</p>


    <input type="file" name="Gambar" placeholder="Upload Foto" value="{{$guru->gambar}}">
    <br>

    <input type="submit" value="Perbaharui Data">
    <br>
</form>

<br>

<a href='/'><h2>Kembali</h2></a>
