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
            <form role="form" action="/student" method="post">
              <div class="box-body">

                <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="id" value="{{$data->id}}">
                </div>

                <div class="form-group">
                    <label >Student Name</label>
                    <input type="text" name="name" value="{{$data->name}}"
                    class="form-control" placeholder="Masukkan Position Name">
                </div>

                <div class="form-group">
                    <label >Student Address</label>
                    <input type="text" name="address" value="{{$data->address}}"
                    class="form-control" placeholder="Masukkan Position Code">
                </div>

                <div>
                    <label >Majority</label>
                    <select class="form-control" name="majority_id">

                        {{-- nampilin data faculty langsung --}}
                        <option value="{{$data->majority_id}}">
                            {{$data->majority->name}}</option>

                        {{-- kalo mau milih faculty yang lain --}}
                        @foreach ($majority as $m)
                            @if ($data->majority_id != $m->id)
                                <option value="{{$m->id}}">
                                    {{$m->name}}
                                </option>
                            @endif
                        @endforeach
                    </select>
                </div>

              <!-- /.box-body -->

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
