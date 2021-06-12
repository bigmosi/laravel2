@extends('layouts.admin')
@section('content')
 @if(Session::has('info'))
  <div class="row">
    <div class="col-md-12">
      <p class="alert alert-info"> {{ Session::get('info') }} </p>
    </div>
  </div>
@endif
 <div class="row">
    <div class="col-md-12">
       <a href="{{ Route('admin.create')}}" class=btn btn-success>New Post</a>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
           <p><strong>Learning Laravel</strong><a href="{{ Route('admin.edit',['id' => 1]) }}">Edit</a></p>
        </div>
    </div>
 </div>
@endsection