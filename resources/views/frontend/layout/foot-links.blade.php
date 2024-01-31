
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script  defer src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
  <!-- <script  defer src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script> -->
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js" integrity="sha512-pXR0JHbYm9+EGib6xR/w+uYs/u2V84ofPrBpkgLYyKvhZYJtUUvKSy1pgi8tJZAacsPwgf1kbhI4zwgu8OKOqA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script defer src="{{asset('assets/js/slick.js')}}" type="text/javascript" charset="utf-8"></script>

  <script defer src="public/assets/js/intlTelInput.js?<?php echo time(); ?>"></script>

    
  @php
	
  $currenturl =  request()->route()->uri;
  $urls = \App\Models\Url::where('slug', $currenturl)->first();

  if(isset($urls)){
  $urls_scripts = \App\Models\Scripts::where('page_name',$urls->id)->first();
  
  if(!empty($urls_scripts)){
    if($urls_scripts->type=='Footer' && !empty($urls_scripts->type)){
    echo $urls_scripts->scripts;
      }else{

      }
  }

}else{
  
}
  @endphp