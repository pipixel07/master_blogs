<!DOCTYPE html>
<html>
<head>
    <title>Image Gallery Example</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- References: https://github.com/fancyapps/fancyBox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


    <style type="text/css">
    .gallery
    {
        display: inline-block;
        margin-top: 20px;
    }
    .close-icon{
    	border-radius: 50%;
        position: absolute;
        right: 5px;
        top: -10px;
        padding: 5px 8px;
    }
    .form-image-upload{
        background: #e8e8e8 none repeat scroll 0 0;
        padding: 15px;
    }
    </style>
</head>
<body>


<div class="container">


    <h3>Image Gallery</h3>
    <form action="{{ url('/admin/gallery') }}" class="form-image-upload" method="POST" enctype="multipart/form-data">


    @csrf


        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        @endif


        <div class="row">
            <div class="col-md-5">
                <strong>Page Name:</strong>
                <select name="page_name" class="form-control">
                                                    <option>----Select Page Name-----</option>
                                                        @foreach($page_name as $page)
                                                        <option value="{{$page->id}}">{{$page->title}}</option>
                                                        @endforeach
                                                      </select>
            </div>
            <div class="col-md-5">
                <strong>Image:</strong>
                <input type="file" name="image[]" class="form-control" multiple="true">
            </div>
            <div class="col-md-2">
                <br/>
                <button type="submit" class="btn btn-success">Upload</button>
            </div>
        </div>


    </form> 


    <div class="row">
    <div class='list-group gallery'>


            @if($images->count())
                @foreach($images as $image)
                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" href="{{ env('MY_URL').$image->images }}">
                        <img class="img-responsive" id="copyText{{ $loop->iteration }}" alt="iteration" src="{{ env('MY_URL').$image->images }}" />
                        <div class='text-center'>
                            <small class='text-muted'>{{ $image->title }}</small>
                        </div> <!-- text-center / end -->
                       
                    </a>
                    
                    <button class="copy-text" src="{{ env('MY_URL').$image->images }}" onclick="withoutJquery(copyText{{ $loop->iteration }});">Copy URL</button>
                    <form action="{{ url('/admin/gallery',$image->id) }}" method="POST">
                    <input type="hidden" name="_method" value="delete">
                    @csrf
                    <button type="submit" class="close-icon btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button>
                    </form>
                </div> <!-- col-6 / end -->
                @endforeach
            @endif


        </div> <!-- list-group / end -->
    </div> <!-- row / end -->
</div> <!-- container / end -->


</body>


<script type="text/javascript">
    $(document).ready(function(){
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
</script>
<script>
function withoutJquery(data){
    var dat = data;
   
   console.time('time2');
	var temp=document.createElement('input');
  var texttoCopy=dat.src;
  temp.type='input';
  temp.setAttribute('value',texttoCopy);
  document.body.appendChild(temp);
    temp.select();
  document.execCommand("copy");
  temp.remove();
   console.timeEnd('time2');
}
</script>
</html>
