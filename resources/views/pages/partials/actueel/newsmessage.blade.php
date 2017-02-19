<div class="col-lg-4 col-xs-12 space-outside-up-lg xs-space-inside-sides-sm xs-text-center animated fadeInDown wow">
  <div class="image lg-rect-xl">
    <img class="responsive-image height-auto"  src="{{ $nieuwsbericht->thumbnail }}" alt='actueel bericht mentor4you' />
  </div>
</div>

<div class="col-lg-8 col-xs-12 space-outside-up-lg animated fadeInDown wow">
  <div class=" xs-space-outside-sides-sm space-outside-left-md">
    <h2 class="xs-text-center text-color-secondary ">{{ $nieuwsbericht->title }}</h2>
    <p class="space-outside-md font-md"> {!! $nieuwsbericht->body !!} </p>

    <div class="row">

      <div class="col-lg-12">

        <a href="/actueel/{{ $nieuwsbericht->title }}-{{$nieuwsbericht->id}}" class="
          space-inside-sides-sm
          space-inside-xs
          font-sm
          inline-block
          text-center
          bg-main
          space-outside-down-sm
          text-color-light
          "> Meer lezen  </a>
      </div>

    </div>
  </div>
</div>

<div class="divider bg-accent"></div>
