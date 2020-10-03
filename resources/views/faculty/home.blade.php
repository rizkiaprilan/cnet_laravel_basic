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
    <a href="faculty/create">
        <button class="btn-primary">
            Insert Faculty
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
                <th>Faculty Name</th>
                <th>Faculty Code</th>
                <th>Action</th>

            @foreach ($data as $d)
            <tr>
                <td>#</td>

                <td><a href="faculty/show/{{$d->id}}">{{$d->name}}</a></td>
                <td>{{$d->code}}</td>

                <td><a href="faculty/edit/{{$d->id}}">EDIT</a>|
                    <a href="faculty/delete/{{$d->id}}">DELETE</a></td>
            </tr>

            @endforeach
            </tr>
          </table>
        </div>

</div>

@endsection

