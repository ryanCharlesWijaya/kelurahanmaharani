@extends('layouts.nav')

@section('container')
<style>
    .files input {
    outline: 2px dashed #92b0b3;
    outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear;
    padding: 120px 0px 85px 37.5%;
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
<form action="" id="form-arsip2">
    <h2 class="pt-5">Edit Data Pemilik</h2>
    <h3 class="pt-3 text-success">Pemilik:</h3>
    <input type="text" value="Giorno Giovanna">
    <h3 class="pt-3 text-success">NIK:</h3>
    <input type="text" value="1471071234560001">
    <h3 class="pt-3 text-success">Kode Dokumen:</h3>
    <input type="text" value="123321">
    <h3 class="pt-3 text-success">Keterangan:</h3>
    <input type="text" value="FIle Invoice">
    <div class="button-group pt-3">
        <button type="submit" class="btn btn-success mb-4">Simpan Perubahan Data Pemilik</button>
    </div>
</form>
<form action="">
    <h2>Edit File</h2>
    <div class="form-group files color w-75">
        <label>Upload Your File </label>
        <input type="file" class="form-control" multiple="">
    </div>
    <div class="button-group">
        <button type="submit" class="btn btn-success mb-4">Simpan Perubahan File</button>
    </div>
</form>
    
@endsection