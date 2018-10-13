@extends('default')

@section('title', 'Home')

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

<hr>
<h2 class="logline">Fearing forced eviction, a struggling actor in his early twenties takes a sketchy door-to-door job on Melrose Avenue - where he meets a mysterious coworker and discovers firsthand the dark realities of living in transition.</h2>
<hr>

<a name="gallery"></a>
<h2 class="header"></h2>
<div class="row justify-content-md-center">
  <div class="col-8">
    <div id="grid">
      @foreach ($data as $image)
        <a class="lightbox-link" href="#" data-featherlight="#image-{{ $image->id }}">
          <div class="grid-item">
            <img id="image-{{ $image->id }}" class="image" src="/assets/images/{{ $image->filename }}">
          </div>
        </a>
      @endforeach
    </div>
  </div>
</div>

<hr>
<h2 class="title">Synopsis</h2>
<h3 class="synopsis">
'Melrose' is a story about young actors in Hollywood taking it one day at a time; specifically, the ones trying to do it all alone.<br><br>
Equal parts frantic black comedy / character drama - its a sunny, melancholy mood bath, a twisted coming of age movie; a surreal, hallucinatory head trip, a portrait of urban isolation and loneliness, a pulse-pounding thrill ride, and a love story - but above all else, its about transition, and how hard it is to be there when everyone assumes you're living the best years of your life.<br><br>
Collecting signatures door to door on Melrose avenue isn't exactly where Clarke and Rachel saw themselves in their twenties, but perhaps if they make the best of it: they won't have to give up their dreams, move back home, and settle for lesser versions of themselves. After all, it's real-world acting experience, it's character-building, and it's technically legal (right?) But what if they can't? Worse; what if it isn't about 'making the best of it' at all, and the truth is far scarier and more elusive than they ever thought?<br><br>
As vivid, authentic, and uncompromising as personal filmmaking gets; it's an intense, punk rock explosion of kinetic cinema, a post-modern teen angst film, a colorful, widescreen postcard of LA, and an honest statement from an honest place. Carrying a once-in-a-lifetime immediacy and force - its an experience for all the senses, a rollercoaster ride, a Technicolor anxiety attack like nothing you've ever seen before, and nothing you'll ever see again. It's tense, hilarious, heartbreaking, and stress inducing (sometimes all at once), intimate, unpretentious, unpredictable - and absolutely, positively unforgettable. It's a film about twenty-somethings. Made by twenty-somethings.
</h3>
<hr>

<div class="row justify-content-md-center">
  <div class="col-6">
    <a name="press-kit"></a>
    <a class="download" href="/assets/press_kit/melrose_press_kit.pdf" download><button type="button" class="btn btn-secondary btn-lg btn-block">Download the Press Kit</button></a>
  </div>
</div>

<hr>
<h2 class="title">Director's Statement</h2>
<h3 class="director">
  I've debated how much of this experience is really constructive to put into words. For starters, people rarely believe me when I do talk about it. Almost as rare as I believe it myself. But the honest truth is: more has happened to me and my crew making this film than in my entire life put together.<br><br>

  An experience this surreal is the kind that can only be described by the product it created. Even I can't believe it. There's really only so much that can be conveyed about something this big, this huge a part of my life, this long a period of time. No amount of tallying near-death experiences, close calls, years of shooting, nonstop existential crises', emotional dilemmas, significant life changes, crazed escapades, creative highs and lows, laws broken, rules obliterated, egos shattered, the tears, the deep melancholy, the laughs, truly - nothing speaks better than the film itself.<br><br>

  We made a living, breathing thing. It may or may not speak to you, I'm just its ambassador. But being part of this family, all of whom made this even greater than the sum of its parts - was (truly; this is far too fitting a word for the wild ride making this film was) indescribable. This film was us, while in transition. It's a record of our experience. We didn't wait till we felt "ready". We didn't get someone else to do it. We did it. This was our life, every day, 24/7, for three years. Seeing it all come to fruition and traversing this territory with such beautiful people has been the experience of a lifetime, one I will never forget. We didn't make this to get famous. We made this to try and figure ourselves out in real time and be honest about it - warts and all.<br><br>

  For me, Melrose is about being in transition. I'm someone who's life has been made significantly better by the existence of art. Hopefully we make someone's day can better.<br><br>
</h3>
<hr>

@endsection
