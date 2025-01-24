
@if ($attributes->has('type')) 

    <input type="{{$attributes['type']}}" name="{{$attributes['name']}}" value="{{$attributes['value']}}" class="{{$attributes['class']}}"/>

@endif

@if ($attributes->has('href'))

    <a href="{{$attributes['href']}}" class="{{$attributes['class']}}">Ver registro</a>

@endif
