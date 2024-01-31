<section id="testimonial" class="home_blog">
		<div class="title">
		  <h2>Our <span>Blogs</span></h2>
		</div>
		<div class="industry">
		
        @foreach($responseBody as $bodyblog)
       
    
     @php 
	
         $apiURL = $bodyblog['_links']['wp:featuredmedia'][0]['href'];
		
            $response = Http::get($apiURL);
			$status=json_decode($response);
		
		//	$status->data->status;
        $statusCode = $response->status();
        if($statusCode == 401){
			$responseBodyImages['source_url'] = 'https://masterinfotech.com/blog/wp-content/uploads/2023/03/Difference-between-Google-Tag-Manager-and-Google-Analytics.jpg'; 
	
		}else{
			$responseBodyImages = json_decode($response->getBody(), true); 
	
		}
		
            @endphp
           
            <div class="blog-list">
			<a href="https://masterinfotech.com/blog/social-media-marketing/"> <img src="{{$responseBodyImages['source_url']}}"  alt=""> </a>
			  <div>
				<h3><a href="https://masterinfotech.com/blog/social-media-marketing/">{{$bodyblog['title']['rendered']}}</a></h3>
				<a href="{{$bodyblog['link']}}"> Read more</a>
			  </div>
		    </div>
        @endforeach
        </div>
		<div class="load_btn">
			<a href="https://masterinfotech.com/blog/" class="black_br_btn"> View all </a>
		</div>
      
	</section>