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
            <form role="form" action="/club" method="post">
              <div class="box-body">

                <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="POST">
                </div>

                <div class="form-group">
                    <label >New Club Name</label>

                    @if ($errors->has('name'))
                        <div class="alert alert-danger">
                            <ul>
                                <li>{{$errors->first('name')}}</li>
                            </ul>
                        </div>
                    @endif

                    <input type="text" name="name" class="form-control"
                    placeholder="Input Club Name">
                </div>

                <div class="form-group">
                    <label >Club Description</label>

                    @if ($errors->has('description'))
                        <div class="alert alert-danger">
                            <ul>
                                <li>{{$errors->first('description')}}</li>
                            </ul>
                        </div>
                    @endif

                    <input type="text" name="description" class="form-control"
                    placeholder="Insert Club Description">
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
