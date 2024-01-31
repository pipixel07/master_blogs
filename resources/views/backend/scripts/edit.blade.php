@extends('backend.layout.app') @section('content')
<!--App-Content-->
<div class="app-content my-3 my-md-5">
    <div class="side-app">
        <!--Page-Header-->
        @if(session('success'))
        <div class="alert alert-dismissible alert-success">
            <button class="close" type="button" data-dismiss="alert">×</button>
            {{ session('success') }}
        </div>
        @endif @if(session('error'))
        <div class="alert alert-dismissible alert-danger">
            <button class="close" type="button" data-dismiss="alert">×</button>
            {{ session('error') }}
        </div>
        @endif @if(count($errors)>0)
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

        <div class="page-header">
            <h1 class="page-title">Edit scripts</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit scripts</li>
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
                          
                            <form action="{{ url('admin/scripts/'.$scripts->id) }}"" method="POST" enctype="multipart/form-data" id="form">
                                @csrf
                                @method('put')
                                <div class="tab-pane active" id="tab1">
                                    <div class="table-responsive">
                                        <div class="control-group form-group">
                                            
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">Type
                                                </label>
                                                    <select name="type" class="form-control">
                                                    <option>----Select Type-----</option>
                                                        <option value="Header" {{ ( $scripts->type =="Header" ) ? 'selected' : '' }}>Header Script</option>
                                                        <option value="Footer" {{ ( $scripts->type =="Footer" ) ? 'selected' : '' }}>Footer Script</option>
                                                      </select>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">
                                                Pagename</label>
                                                    <select name="page_name" class="form-control">
                                                    <option>----Select Page Name-----</option>
                                                        @foreach($urls as $url)
                                                        <option value="{{$url->id}}" {{  $scripts->page_name == $url->id  ? 'selected' : '' }}>{{$url->title}}</option>
                                                        @endforeach
                                                      </select>
                                            </div>
                                           
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">scripts</label>
                                                <textarea class="content" name="scripts" id="">{{$scripts->scripts}}</textarea>
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

