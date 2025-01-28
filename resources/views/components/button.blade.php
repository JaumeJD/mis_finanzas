
@if($attributes->has('href'))
    <a {{$attributes->has('class') ? $attributes : $attributes->merge(['class' => 'bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded inline-block'])}}>
        {{ $slot }}
    </a>
@elseif($attributes->has('name'))
    <button {{$attributes-has('class') ? $attributes : $attributes->merge(['class' => 'bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded'])}}>
        {{ $slot }}
    </button>
@else
    <button {{$attributes->has('class') ? $attributes : $attributes->merge(['class' => 'bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded'])}}>
        {{ $slot }}
    </button>
@endif
