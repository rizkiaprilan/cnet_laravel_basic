@extends('layouts.master')

@section('content-header')

<section class="content-header">
    <h1>
        {{$judul}}
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{$judul}}</a></li>
        <li><a href="#">Create</a></li>
    </ol>
</section>

@endsection

@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">{{ $judul }}</h3>
            </div>
            <!-- /.box-header -->

            <!-- form start -->
            <form role="form" action="/card" method="post">
              <div class="box-body">

                <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="id" value="{{$data->id}}">
                    <input type="hidden" name="id_credits" value="{{$data->credit->id}}">
                </div>

                <div class="form-group">
                    <label >Student NIM</label>
                    <input type="text" name="nim" value="{{$data->nim}}"
                    class="form-control" placeholder="Input Student NIM">
                </div>

                <div class="form-group">
                    <label >Card Amount</label>
                    <input type="text" name="balance" value="{{$data->balance}}"
                    class="form-control" placeholder="Input Card Amount">
                </div>

                <div class="form-group">
                    <label >Credit Bank Name</label>
                    <input type="text" name="credit_name" value="{{$data->credit->name}}"
                    class="form-control" placeholder="Input Credit Bank Name">
                </div>

                <div class="form-group">
                    <label >Credit Bank Amount</label>
                    <input type="text" name="credit_balance" value="{{$data->credit->balance}}"
                    class="form-control" placeholder="Input Credit Bank Amount">
                </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
          <div class="col-md-4">

          </div>

    </div>
</div>

@endsection
