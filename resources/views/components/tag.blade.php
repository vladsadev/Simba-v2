@props(['size'=>'base'])


@php
    $classes = "hover:bg-white/25 transition-colors duration-300 bg-white/40
                        rounded-xl font-semibold py-2";

//    dd($size);

    if($size === 'small'){
       $classes .= ' text-2xs px-3';
    }elseif ($size === 'large'){
        $classes .= ' text-base px-4';
    }else{
        $classes .= ' text-sm px-4';
    }



@endphp

<a href="" class="{{$classes}} ">{{$slot}}</a>
