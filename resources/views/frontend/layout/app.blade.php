<!DOCTYPE html>
<html lang="en">
<!--Head Links-->
@php
use App\Models\Url;

$urls = Url::Select('slug', 'title')->limit(15)->get();
$chunkSize1 = 9;
$chunkSize2 = 6;
$services = $urls->take($chunkSize1)->reverse();
$pageurls = $urls->slice($chunkSize1, $chunkSize2);
@endphp
@include('frontend.layout.head-links')

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N7GJVDN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <!-- Sidebar menu-->
    @include('frontend.layout.header-common')
    
    @yield('content')
    @include('frontend.layout.footer')
    <!--Foot Links-->
    @include('frontend.layout.foot-links')
    @include('frontend.layout.script')
</body>

</html>