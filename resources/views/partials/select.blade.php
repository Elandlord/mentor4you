<select name="{{ $name }}" style="width: 100%;" class="text-center border-accent block space-inside-sides-xs space-inside-xs border font-sm">
  @foreach($options as $value => $option)
    <option class="form-control border-curved bg-accent text-color-dark text-center block space-inside-xs"   value="{{ $value }}"> {{ $option }} </option>
  @endforeach
</select>