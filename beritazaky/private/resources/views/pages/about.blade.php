@extends('template')

@section('main')
<div id="about">
        <div class="vizew-breadcrumb">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">About</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
<h2>Profil</h2>
<p>Program Sarjana Terapan Teknik Informatika Politeknik
    Harapan Bersama Tegal.
</p>
</div>
@stop

@section('footer')
<div id="footer">
    <p>&copy; 2019 | Framework Programming Poltek Tegal</p>
</div>
@stop
