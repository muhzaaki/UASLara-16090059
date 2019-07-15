@extends('template')
@section('main')
<div id="homepage">
      
<h2>Biodata</h2>

<p>nama : {{{ $_POST['nama'] }}} </p>
<p>username : {{{ $_POST['username'] }}} </p>
<p>password : {{{ $_POST['password'] }}} </p>
<p>email  : {{{ $_POST['email'] }}} </p>
<p>TTL : {{{ $_POST['TTL'] }}}</p>  
<p>alamat : {{{ $_POST['alamat'] }}}</p>
<p>photo : </p>
<img src="{{ $nama }}"
style="width: 150px; height: 150px;" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">

</div>
@stop
@section('footer')
<div id="footer">
    <p>&copy; 2019 | Framework Programming Poltek Tegal </p>
</div>
@stop

