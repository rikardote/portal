@extends('layouts.app')
@section('styles')
	 <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
@section('content')
  	<div class="contenedor">

	        
	            <article>
					@for($i=2; $i < 255; $i++)
						{{--*/ $ip = '192.161.59.'.$i /*--}}
						@if(in_array($ip, $ips))
							<a data-url="{{ route('inventario.ip.edit', $ip) }}" class="load-form-modal  btn btn-default anchor" data-toggle ="modal" data-target='#form-modal'>
								{{$ip}}
								
								<div class="fuente">{{ipUser($ip)}}</div>
							</a>
						@else
							<a data-url="{{ route('inventario.ip.create', $ip) }}" class="load-form-modal panelColor btn btn-success anchor" data-toggle ="modal" data-target='#form-modal'>
								{{$ip}}
								
							</a>
						@endif
					@endfor
	            </article>
	        
	    </div>



	<footer>
	    <div class="contenedor">
	        &copy;  {{date('Y')}} ISSSTE BAJA CALIFORNIA
	    </div>
	</footer>

	@include('partials.form-modal', ['title'=>'Asignar Ip'])

@endsection

@section('js')
	<script src="{{ asset('js/script.js') }}"></script>
@endsection