<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Form Fields with Styles</title>
  <link rel="stylesheet" href="{{ asset('css//form.css') }}">

</head>
<body>
<!-- partial:index.partial.html -->
<form method="post" action="{{route('simpanMahasiswa')}}" class="submission-form">
  @csrf
    <h1>Pendaftaran Mahasiswa Baru</h1>
 
  <label for="nama">
    Nama 
  </label>
  <input type="text" name="nama_mahasiswa">

  <label for="NIM">
      NIM
  </label>
  <input type="text" name="nim">

  <label for="jurusan">
    Jurusan
  </label>

  <select name="jurusan" required>
    <option value="" disabled selected> Pilih Jurusan </option>
    <option value="animasi"> Digital Animasi </option>
    <option value="event"> Event Management </option>
    <option value="ecomlog"> E-Commerce Logistic </option>

  <input type="submit" value="Send" id="sendBtn">
  
  
  
</form>
<!-- partial -->
  
</body>
</html>
