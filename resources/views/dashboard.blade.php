@extends('layouts.layout')
@section('main')
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="https://bkacad.com/"><span><img src="../assets/img/logobkacad.png"></span></a>
                </div>
                <?php $sv = Session::get('HoatDong'); ?>
            </div>
        </div>
    </div>
@endsection
