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
                    <input type="hidden" name="_method" value="POST">
                </div>

                <div class="form-group">
                    <label >Card NIM</label>

                    @if ($errors->has('nim'))
                        <div class="alert alert-danger">
                            <ul>
                                <li>{{$errors->first('nim')}}</li>
                            </ul>
                        </div>
                    @endif

                    <input type="text" name="nim" class="form-control"
                    placeholder="Input Card NIM">
                </div>

                <div class="form-group">
                    <label >Card Amount</label>

                    @if ($errors->has('balance'))
                        <div class="alert alert-danger">
                            <ul>
                                <li>{{$errors->first('balance')}}</li>
                            </ul>
                        </div>
                    @endif

                    <input type="text" name="balance" class="form-control"
                    placeholder="Input Card Amount">
                </div>

                <div class="form-group">
                    <label >Credit Bank</label>

                    @if ($errors->has('credit_name'))
                        <div class="alert alert-danger">
                            <ul>
                                <li>{{$errors->first('credit_name')}}</li>
                            </ul>
                        </div>
                    @endif

                    <input type="text" name="credit_name" class="form-control"
                    placeholder="Input Credit Bank Name">
                </div>

                <div class="form-group">
                    <label >Credit Amount</label>

                    @if ($errors->has('credit_balance'))
                        <div class="alert alert-danger">
                            <ul>
                                <li>{{$errors->first('credit_balance')}}</li>
                            </ul>
                        </div>
                    @endif

                    <input type="text" name="credit_balance" class="form-control"
                    placeholder="Input Credit Bank Amount">
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
