@extends('frontend.default.layouts.app')

@section('styles')
<link rel="stylesheet" href="{{asset(asset_path('frontend/default/css/page_css/welcome.css'))}}" />
@endsection
@section('share_meta')
  @php
      $tags = str_replace(',', ' ',app('general_setting')->meta_tags);
  @endphp
<meta name="keywords" content="{{$tags}}">
<meta name="description" content="{{app('general_setting')->meta_description}}">
<link rel="canonical" href="{{url()->current()}}"/>
@endsection

@section('content')
@include('frontend.default.partials._mega_menu')
@php
$best_deal = $widgets->where('section_name','best_deals')->first();
@endphp

<div class="py-5">
<center>The New MindBlowing Idea is Here...</center>
</div>

@include(theme('partials._subscription_modal'))
@endsection

@include(theme('partials.add_to_cart_script'))
@include(theme('partials.add_to_compare_script'))