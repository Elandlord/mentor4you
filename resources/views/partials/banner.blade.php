<div class="container-fluid border-bottom border-main hidden-xs">
  <div class="row">

    <image-slider style="height: 400px;"  >
    @foreach($sliders as $slider)
      <slide >
        <div slot="content" class=" container xs-text-center no-overflow">
          <h1 class="text-color-light text-uppercase space-outside-up-xl" >{{$slider->title}}</h1>
          <p class="text-color-light space-outside-up-md block">{{$slider->body}}</p>
          <a class="
              inline-block
              bg-secondary
              space-inside-sides-sm
              space-inside-xs
              space-outside-up-sm
              font-sm
              text-color-light
          " href="/mentor4you">Meer lezen</a>
        </div>

        <img slot='background' class="background" src="{{ $slider->banner }}">
      </slide>
      @endforeach
    </image-slider>

  </div>
</div>