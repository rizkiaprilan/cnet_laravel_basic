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
    <a href="club/create">
        <button class="btn-primary">
            Create New Club
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
                <th>Club Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>

            @foreach ($data as $d)
            <tr>
                <td>#</td>

                <td><a href="/club/show/{{$d->id}}">{{$d->name}}</a></td>
                <td>{{$d->description}}</td>

                <td><a href="/club/edit/{{$d->id}}">EDIT</a>|
                    <a href="/club/delete/{{$d->id}}">DELETE</a></td>
            </tr>
            @endforeach

          </table>
        </div>

</div>

@endsection

