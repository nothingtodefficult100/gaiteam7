@extends('layouts.app')
@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/shop_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/shop_responsive.css') }}">

<div class="home">
	<div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('public/frontend/images/shop_background.jpg') }}"></div>
	<div class="home_overlay"></div>
	<div class="home_content d-flex flex-column align-items-center justify-content-center">
		<h2 class="home_title">
            @if(session()->get('lang') == 'bangla')
                ইকো স্টোরে  ব্লগ
                @else
                EchoStore Blog
                @endif

        </h2>
	</div>
</div>

<div class="super_container container">

        <div>
             <img src="{{ asset($post->post_image) }}" width="1000" height="400" alt="no post image ">
             <hr>
             <h4>
                @if(session()->get('lang') == 'bangla')
                {{ $post->post_title_bn}}
                @else
                {{ $post->post_title_en }}
                @endif
            </h4>
             <p>
                @if(session()->get('lang') == 'bangla')
                {{ strip_tags($post->details_bn,'')}}
                @else
                {{ strip_tags($post->details_en,'')}}
                @endif

             </p>
        </div>

</div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="{{ asset('frontend/plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ asset('frontend/js/shop_custom.js') }}"></script>




@endsection
