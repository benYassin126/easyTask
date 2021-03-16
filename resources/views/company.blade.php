@extends('layouts.adminLTE')
@section('title','طباعة')
@section('content')
<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <!-- Strat MSG -->
    <!-- Strat MSG -->
    @if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="display-success">
      <strong>{{ session()->get('message') }}</strong>
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
    <!-- Strat MSG -->
    @section('content')
    <div class="print text-center pt-4">
      <div class="row">
        <div class="col-sm-12">
          <h4></h4>
          <div class="card" style="height: 350px;" >
            <div class="card-footer">
              <h6><i class="fas fa-print"></i> الشركات  </h6>
            </div>
            <div class="card-body">
              <form action="{{route('company.search')}}" method="post">
                @csrf
                <!-- select -->
                <div class="form-group mb-4">
                  <label>جميع الشركات</label>
                  <select id="search" class="form-control"name="search" style="width: 50%; margin: 0 auto;" >
                    <option value="0">عرض جميع الشركات</option>
                    @foreach ($allCompany as $company)
                    <option  value="{{$company->id}}" >{{$company->companyName}}</option>
                    @endforeach
                  </select>
                </div>
              </form>
              <div class="showRes">
                <table class="table  table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>اسم الموظف</th>
                      <th>ايميل الموظف</th>
                      <th>مدينة الموظف</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection('content')
