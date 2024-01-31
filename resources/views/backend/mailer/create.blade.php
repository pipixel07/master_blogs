@extends('backend.layout.app') @section('content')
<!--App-Content-->
<div class="app-content my-3 my-md-5">
    <div class="side-app">
        @if (session('success'))
        <div class="alert alert-dismissible alert-success">
            <button class="close" type="button" data-dismiss="alert">×</button>
            {{ session('success') }}
        </div>
        @endif
        @if (session('error'))
        <div class="alert alert-dismissible alert-danger">
            <button class="close" type="button" data-dismiss="alert">×</button>
            {{ session('error') }}
        </div>
        @endif
        @if (count($errors)>0)
        <div class="alert alert-dismissible alert-danger">
            <button class="close" type="button" data-dismiss="alert">×</button>
            @foreach($errors->all() as $error)
            <ul>
                <li>
                    {{ $error }}
                </li>
            </ul>
            @endforeach
        </div>
        @endif

        <!--Page-Header-->
        <div class="page-header">
            <h1 class="page-title">Add New Mailer</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Mailer</li>
            </ol>
        </div>
        <!--/Page-Header-->

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content">
                            <form action="{{ url('/admin/mailers') }}" method="POST" enctype="multipart/form-data" id="form">
                                @csrf
                                <div class="tab-pane active" id="tab1">
                                    <div class="table-responsive">
                                        <div class="control-group form-group">
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16"> Driver
                                                </label>
                                                <input type="text" class="form-control" placeholder=" Driver" name="driver" required value="{{old('driver')}}" />
                                            </div>
                       
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">Host </label>
                                                <input type="text" class="form-control" placeholder=" Host" name="host" value="{{old('host')}}" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">Port </label>
                                                <input type="text" class="form-control" placeholder=" Port" name="port"  value="{{old('port')}}"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">From Address </label>
                                                <input type="text" class="form-control" placeholder=" From Address " name="from_address" value="{{old('from_address')}}" />
                                            </div>
                       
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">From Name </label>
                                                <input type="text" class="form-control" placeholder=" From Name" name="from_name" value="{{old('from_name')}}" />
                                            </div>
                       
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">Encryption </label>
                                                <input type="text" class="form-control" placeholder=" Encryption" name="encryption" value="{{old('encryption')}}" />
                                            </div>
                       
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">Username </label>
                                                <input type="text" class="form-control" placeholder=" Username"  name="username" value="{{old('username')}}" />
                                            </div>
                       
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">Password </label>
                                                <input type="text" class="form-control" placeholder=" Password"  name="password" value="{{old('password')}}" />
                                            </div>
                       
                                           
                                        </div>

                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Continue</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection