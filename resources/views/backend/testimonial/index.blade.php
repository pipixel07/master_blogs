@extends('backend.layout.app') @section('content')
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
            <h1 class="page-title">Testimonial</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">All Testimonial</li>
            </ol>
        </div>
        <!--/Page-Header-->

        <!-- Latest User Details -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Testimonial</h3>
                    </div>

                    <div class="card-body">
                        <div class="ads-tabs">
                            <div class="tabs-menus">
                                <!-- Tabs -->
                                <ul class="nav panel-tabs">
                                    <li class=""><a href="#tab1" class="active" data-toggle="tab">All Testimonial {{"(".count($test).")"}}</a></li>
                                   
                                    <li><a href="#tab5" data-toggle="tab">Featured</a></li>
                                    <li><a href="#" data-toggle="" id="delete-all">Delete Selected</a></li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active table-responsive border-top userprof-tab" id="tab1">
                                    <table class="table table-bordered table-hover mb-0 text-nowrap display nowrap" id="example">
                                        <thead>
                                            <tr>
                                                <th><input type="checkbox" class='checkall' id='checkall' value="course"></th>
                                                <th>Name</th>
                                                <th>Designation</th>
                                                <th>Image</th>
                                        
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($test as $team)
                                            <tr>
                                                <td><input type="checkbox" class='check' id='check' value="{{$team->id}}"></td>

                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <h4 class="font-weight-semibold">{{ $team->name}}</h4>
                                                       
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                    <h4 class="font-weight-semibold">{{ $team->job_title}}</h4>
                                                        
                                                       
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                    <h4 class="font-weight-semibold"><img src="{{ $team->image}}" height="50px" width="50px" alt="image"/></h4>
                                                       
                                                    </div>
                                                </td>

                                                
                                                <td>
                                                <a href="{{url('/admin/testimonial/'.$team->id.'/edit')}}" class="btn btn-success btn-sm text-white" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a>


														<form method="post" action="{{url('/admin/testimonial/'.$team->id)}}">
														@csrf
														@method('delete')
														<button type="submit" class="btn btn-danger btn-sm text-white warning" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></button>
														</form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                         
                                <!-- Latest User Details -->
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
