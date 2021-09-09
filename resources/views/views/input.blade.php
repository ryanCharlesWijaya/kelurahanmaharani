@extends('layouts.nav')

@section('container')
<style>
    .files input {
    outline: 2px dashed #92b0b3;
    outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear;
    padding: 120px 0px 85px 35%;
    text-align: center !important;
    margin: 0;
    width: 100% !important;
}
.files input:focus{     outline: 2px dashed #38c172;  outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear; border:1px solid #92b0b3;
 }
.files{ position:relative}
.files:after {  pointer-events: none;
    position: absolute;
    top: 60px;
    left: 0;
    width: 50px;
    right: 0;
    height: 56px;
    content: "";
    background-image: url(https://image.flaticon.com/icons/png/128/109/109612.png);
    display: block;
    margin: 0 auto;
    background-size: 100%;
    background-repeat: no-repeat;
}
.color input{ background-color:#f1f1f1;}
.files:before {
    position: absolute;
    bottom: 10px;
    left: 0;  pointer-events: none;
    width: 100%;
    right: 0;
    height: 45%;
    content: "drag it here. ";
    display: block;
    margin: 0 auto;
    color: #38c172;
    font-weight: 600;
    text-transform: capitalize;
    text-align: center;
}
</style>
<h1 style="padding-top:4%;">Arsip Baru</h1>
<form id="form-arsip">
    <div class="form-group">
      <label for="inputEmail4">Nama Lengkap(Sesuai KTP)</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Nama Lengkap">
    </div>
    <div class="form-group">
      <label for="inputPassword4">NIK</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="NIK">
    </div>
  <div class="form-group">
    <label for="inputAddress">Alamat</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Alamat">
  </div>
    <div class="form-group files color">
        <label>Upload Your File </label>
        <input type="file" class="form-control" multiple="">
    </div>
  <button type="submit" class="btn btn-success">Upload</button>
</form>
@endSection