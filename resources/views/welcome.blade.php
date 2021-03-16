@extends('layouts.adminLTE')
@section('title','easyTask')
@section('content')


<!-- Main content -->
<div class="content">
  <div class="container-fluid pt-4">
    <!-- Strat MSG -->
    @if(session()->has('message'))
    <div class="alert alert-success green  fade show " role="alert" id="display-success">
     <strong><i class="fas fa-check "></i> {{ session()->get('message') }}</strong>
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif

  @if ($errors->any())
  <div class="alert-dismissible  alert alert-danger" id="display-success">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <!-- End MSG -->


  <!-- Start Content -->

  <!-- Small boxes (Stat box) -->




  @endsection('content')
