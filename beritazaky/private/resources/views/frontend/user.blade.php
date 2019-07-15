@extends('template')
@section('main')
<div id="homepage">
<h2>Beranda</h2>
 <form action="{{ url('/kirim') }}" enctype="multipart/form-data" method="POST">
    {{ csrf_field() }}
    First name:<br>
    <input type="text" name="nama"><br>
    User name:<br>
    <input type="text" name="username"><br>
     Password:<br>
    <input type="password" name="password"><br>
    Email:<br>
    <input type="email" name="email"><br> 
    TTL:<br>
    <input type="text" name="TTL"><br>
    alamat:<br>
    <input type="text" name="alamat">
    <br>
    upload photo :
    <input type="file" class="form-control-file" name="fileToUpload" id="fileToUpload"  aria-describedby="fileHelpId">
    <small id="fileHelpId" class="form-text text-muted"></small>
       
    <input type="submit" class="btn btn-primary" value="simpan" >
    
</form> 

</div>
@stop
@section('footer')
<div id="footer">
    <p>&copy; 2019 | Framework Programming Poltek Tegal </p>
</div>
@stop

