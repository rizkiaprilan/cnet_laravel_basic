@extends('layouts.master')

@section('content-header')

<section class="content-header">
    <h1>
        {{$judul}}
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{$judul}}</a></li>
        <li><a href="#"></a></li>
    </ol>
</section>

@endsection

@section('content')

<div class="col-md-8">

    <div class="box">
        <div class="box-header">
          <h3 class="box-title">Detail Student in {{$data->name}}</h3>
        </div>

        <!-- /.box-header -->
        <div class="box-body no-padding">
          <table class="table table-striped">
            <tr>
                <th style="width: 10px">#</th>
                <th>Student Name</th>
                <th>Student Address</th>

            @foreach ($data->student as $d)
            <tr>
                <td>#</td>
                <td>{{$d->name}}</td>
                <td>{{$d->address}}</td>
            </tr>

            @endforeach
            </tr>
          </table>
        </div>

</div>

@endsection

