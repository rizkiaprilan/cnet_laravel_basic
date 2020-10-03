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

<div class="col-md-14">
    <a href="student/create">
        <button class="btn-primary">
            Insert Student
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
                <th>Majority</th>
                <th>Name</th>
                <th>Address</th>
                <th>Action</th>
            </tr>

            @foreach ($data as $d)
            <tr>
                <td>#</td>
                <td>{{$d->majority->name}}</td>
                <td><a href="/student/show/{{$d->id}}">
                    {{$d->name}}</a></td>
                <td>{{$d->address}}</td>

                <td><a href="/student/edit/{{$d->id}}">EDIT</a>|
                    <a href="/student/delete/{{$d->id}}">DELETE</a></td>
            </tr>
            @endforeach

          </table>
        </div>

</div>

@endsection

