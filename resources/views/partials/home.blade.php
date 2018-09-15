@extends('default')

@section('title', 'Home')

@include('partials.nav')

@section('content')

<div class="row">
  <div class="col-12">
    <a  name="top"></a>
    <div class="embed-responsive embed-responsive-16by9">
      <!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_nQ_isC6HdI?autoplay=1&controls=0&disablekb=1&fs=0&iv_load_policy=3&loop=1&modestbranding=1&playsinline=1&rel=0&showinfo=0&enablejsapi=1&origin=https%3A%2F%2Fmelrosemovie.com&widgetid=1" allowfullscreen></iframe> -->
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_nQ_isC6HdI?rel=0&amp;showinfo=0;autoplay=1;controls=0;loop=1;modestbranding=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
  </div>
</div>

<a name="gallery"></a>
<div class="row justify-content-md-center">
  <div class="col-8">
    <div id="grid" class="grid">
      @foreach ($data as $image)
        <img class="grid-item" src="/assets/images/{{ $image->filename }}">
      @endforeach
    </div>
  </div>
</div>


<div class="row justify-content-md-center">
  <div class="col-6">
    <a name="press-kit"></a>
    <a class="download" href="/assets/press_kit/melrose_press_kit.pdf" download><button type="button" class="btn btn-secondary btn-lg btn-block">Download the Press Kit</button></a>
  </div>
</div>
@endsection
