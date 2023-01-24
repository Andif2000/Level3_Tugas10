<!DOCTYPE html> 
<html> 
<head> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<style> 
body {font-family: Arial, Helvetica, sans-serif;} 
* {box-sizing: border-box;} 
 
input[type=text], select, textarea { 
  width: 100%; 
  padding: 12px; 
  border: 1px solid #ccc; 
  border-radius: 4px; 
  box-sizing: border-box; 
  margin-top: 6px; 
  margin-bottom: 16px; 
  resize: vertical; 
} 
 
input[type=submit] { 
  background-color: #04AA6D; 
  color: white; 
  padding: 12px 20px; 
  border: none; 
  border-radius: 4px; 
  cursor: pointer; 
} 
 
input[type=submit]:hover { 
  background-color: #45a049; 
} 
 
.container { 
  border-radius: 5px; 
  background-color: #f2f2f2; 
  padding: 20px; 
} 
</style> 
</head> 
<body> 
 
<h3 style="text-Align: center">Add Produk</h3> 
 
<div class="container"> 
  <form action="{{ route('pijar.store') }}" method="POST"> 
    @csrf
    <label for="fname">Nama Produk</label> 
    <input type="text" id="fname" name="nama_produk" placeholder="Nama Produk"> 
 
    <label for="lname">Keterangan</label> 
    <input type="text" id="lname" name="keterangan" placeholder="Keterangan"> 
 
    <label for="lname">Harga</label> 
    <input type="text" id="lname" name="harga" placeholder="Rp ..."> 
 
    <label for="subject">Jumlah</label> 
    <input type="text" id="lname" name="jumlah" placeholder="Jumlah"> 
 
    <div class="">
        <input type="submit" value="Add">
        <!-- <input style="background-color:orange" type="submit" value="Cancel"> -->
    </div>
  </form> 
</div> 
 
</body> 
</html>