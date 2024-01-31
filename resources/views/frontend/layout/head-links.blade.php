<head>

	@php
	
	$currenturl =  request()->route()->uri;

	// echo $currenturl ;
	$urls = \App\Models\Url::where('slug', $currenturl)->first();

	if(isset($urls)){
	$urls_scripts = \App\Models\Scripts::where('page_name',$urls->id)->first();
	if(!empty($urls_scripts)){
		if($urls_scripts->type=='Header' && !empty($urls_scripts->type)){
		// echo $urls_scripts->scripts;
	}else{

	}
	}

}else{
	
}

if(isset($urls)){
	
	$tags = \App\Models\MetaTags::where('slug',$urls->slug)->first();
	// dd($tags);
}



@endphp

		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="Master Infotech" name="author">

		@if (!empty($tags))

		
			<meta name="keywords" content="{{$tags->meta_keyword ?? ''  }}">
			<meta name="description" content="{{$tags->meta_description ?? '' }}">
			<title>{{$tags->meta_title ?? ''}}</title>
		



		@endif
		<meta name="description" content="@yield('meta_description','Master Infotech is an IT services company. We provide IT services such as Web Design and Development, Mobile App, UI UX design, E-commerce & Digital Marketing.')">
		<meta name="keywords" content="@yield('meta_keywords','')"/>
		<meta name="seo" content="@yield('meta_tag','')" /> 
		<title>Master Infotech is the Best IT Services Company</title>
		@yield('meta_extra_seo')

		<!-- Favicon -->
		<link rel="icon" href="https://cdn.masterinfotech.com/assets/images/favicon.png" type="image/gif"/>
		<link rel="shortcut icon" href="https://cdn.masterinfotech.com/assets/images/favicon.png" type="image/gif" />
		<!-- Favicon -->
		<!-- preload assets -->
		<link rel="preload" as="image" href="https://cdn.masterinfotech.com/assets/images/Bannerimage.jpg">
		<link rel="preload" as="image" href="https://cdn.masterinfotech.com/assets/images/logo.png">
		<!-- preload assets ends -->
		<link rel="stylesheet" href="{{asset('assets/css/navbar.css')}}">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="{{asset('assets/css/ui-ux-design.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/footer.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/mega-site-navigation.css')}}" />
		<link id="cd-cdf-util" rel="stylesheet" href="{{asset('assets/css/util.css')}}" />
					<link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}"> 
			<link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick-theme.css')}}"> 
			<!-- <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css"> -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css" integrity="sha512-SgaqKKxJDQ/tAUAAXzvxZz33rmn7leYDYfBP+YoMRSENhf3zJyx3SBASt/OfeQwBHA1nxMis7mM3EV/oYT6Fdw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/solid.min.css" integrity="sha512-yDUXOUWwbHH4ggxueDnC5vJv4tmfySpVdIcN1LksGZi8W8EVZv4uKGrQc0pVf66zS7LDhFJM7Zdeow1sw1/8Jw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
			<!-- above two links are used against all.css -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css">
		<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css">
		<link rel="stylesheet" href="{{asset('assets/css/intlTelInput.css')}}">
		

		<script defer src="{{asset('assets/js/intlTelInput.js')}}"></script>

		<!-- Google Tag Manager -->
		<script>
		setTimeout(function() {
		(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-N7GJVDN');
	}, 2000); // 2 seconds delay (2000 milliseconds)
		</script>
<!-- End Google Tag Manager -->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=GT-M6X3NW8"></script>
<script>
	setTimeout(function() {
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'GT-M6X3NW8');
}, 2000); // 2 seconds delay (2000 milliseconds)
</script>



	</head>
