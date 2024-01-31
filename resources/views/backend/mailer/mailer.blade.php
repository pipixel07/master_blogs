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
            <h1 class="page-title">Mailer</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">All Mailer</li>
            </ol>
        </div>
        <!--/Page-Header-->

        <!-- Latest User Details -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Mailer</h3>
                    </div>

                    <div class="card-body">
                        <div class="ads-tabs">
                            <div class="tabs-menus">
                                <!-- Tabs -->
                                <ul class="nav panel-tabs">
                                    <li class=""><a href="#tab1"  data-toggle="tab">All Urls {{"(".count($mailer).")"}}</a></li>
                                   
                                    <li><a href="#tab5" data-toggle="tab">Featured</a></li>
                                    <li><a href="#" data-toggle="" id="delete-all">Delete Selected</a></li>
                                    <li><a href="{{url('/admin/mailers/create')}}" data-toggle="" class="active" id="delete-all">Add Mailer</a></li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active table-responsive border-top userprof-tab" id="tab1">
                                    <table class="table table-bordered table-hover mb-0 text-nowrap display nowrap" id="example">
                                        <thead>
                                            <tr>
                                                <th><input type="checkbox" class='checkall' id='checkall' value="course"></th>
                                                <th>Driver</th>
                                                <th>Port</th>
                                                <th>From Address</th>
                                                <th>From Name</th>
                                                <th>Encryption</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Status</th>
                                                
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($mailer as $mail)
                                            <tr>
                                                <td><input type="checkbox" class='check' id='check' value="{{$mail->id}}"></td>

                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <h4 class="font-weight-semibold">{{ $mail->driver}}</h4>
                                                       
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                    <h4 class="font-weight-semibold">{{ $mail->port}}</h4>
                                                        
                                                       
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                    <h4 class="font-weight-semibold">{{ $mail->from_address}}</h4>
                                                        
                                                       
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                    <h4 class="font-weight-semibold">{{ $mail->from_name}}</h4>
                                                        
                                                       
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                    <h4 class="font-weight-semibold">{{ $mail->encryption}}</h4>
                                                        
                                                       
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                    <h4 class="font-weight-semibold">{{ $mail->username}}</h4>
                                                        
                                                       
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                    <h4 class="font-weight-semibold">{{ $mail->password}}</h4>
                                                        
                                                       
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">

                                                        @if ($mail->active == 0)
                                                <a href="{{url('/admin/sender/activate',$mail->id)}}" class="btn btn-success btn-sm text-white" data-toggle="tooltip" data-original-title="Edit">Not Active</i></a>
                                                            
                                                        @else
                                                        <a href="{{url('/admin/sender/deactivate',$mail->id)}}" class="btn btn-success btn-sm text-white" data-toggle="tooltip" data-original-title="Edit">Active</i></a>
                                                        @endif
                                                    {{-- <h4 class="font-weight-semibold">{{ $mail->status}}</h4> --}}
                                                        
                                                    </div>
                                                </td>

                                              
                                                
                                                <td>
                                                <a href="{{url('/admin/mailers/'.$mail->id.'/edit')}}" class="btn btn-success btn-sm text-white" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a>


														<form method="post" action="{{url('/admin/mailers/'.$mail->id)}}">
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
