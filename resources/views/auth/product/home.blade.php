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
    <a href="karyawan/create">
        <button class="btn-primary">
            Insert Product
        </button>
    </a>

    <div class="box">
        <div class="box-header">
          <h3 class="box-title">Table {{$judul}}</h3>
        </div>

        <!-- /.box-header -->
        <div class="box-body no-padding">
          <table class="table table-striped">
            <tr>
                <th style="width: 10px">#</th>
                <th>Car Type</th>
                <th>Description</th>
                <th>Price</th>
                <th>Preview</th>
                <th>ACTION</th>
            </tr>

            @foreach ($data as $d)
            <tr>
                <td>{{$d->id}}</td>
                <td>{{$d->car}}</td>
                <td>{{$d->type}}</td>
                <td>{{$d->address}}</td>
                <td>{{$d->preview}}</td>
                <td><a href="product/edit/{{$d->id}}">EDIT</a>|<a href="product/delete/{{$d->id}}">DELETE</a></td>
            </tr>
            @endforeach

          </table>
        </div>

</div>

@endsection

