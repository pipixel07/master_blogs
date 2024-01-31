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
                <li class="breadcrumb-item active" aria-current="page">Edit Meta Tags</li>
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
                          
                            <form action="{{ url('admin/metatags/'.$tags->id) }}"" method="POST" enctype="multipart/form-data" id="form">
                                @csrf
                                @method('put')
                                <div class="tab-pane active" id="tab1">
                                    <div class="table-responsive">
                                        <div class="control-group form-group">
                                            
                                          
                                            
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">
                                                Pagename</label>
                                                    <select name="slug" class="form-control">
                                                    <option>----Select Page Name-----</option>
                                                        @foreach($urls as $url)
                                                        <option value="{{$url->slug}}" {{  $tags->slug == $url->slug  ? 'selected' : '' }}>{{$url->title}}</option>
                                                        @endforeach
                                                      </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">Meta Title
                                                </label>
                                                <input type="text" class="form-control" placeholder="Meta Title" name="meta_title" required value="{{$tags->meta_title}}" />
                                            </div>
                       
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">Meta Keywords </label>
                                                <input type="text" class="form-control" name="meta_keyword" value="{{$tags->meta_keyword}}" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label text-dark font-weight-semibold fs-16">Meta Description</label>
                                                <textarea class="content" name="meta_description" id="">{{$tags->meta_description}}</textarea>
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

