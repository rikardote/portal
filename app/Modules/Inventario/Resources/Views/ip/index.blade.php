@extends('layouts.app')
@section('styles')
	 <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
	 <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
@section('content')
  	<div class="contenedor supreme-container">
	    <article>
			@for($i=2; $i < 255; $i++)
				{{--*/ $ip = '192.161.59.'.$i /*--}}
				@if(in_array($ip, $ips))
				
					<a data-url="{{ route('inventario.ip.edit', $ip) }}" class="load-form-modal  anchor" data-toggle ="modal" data-target='#form-modal'>
					
					<div class="panel panel-default">
						{{$ip}}
						<div class="fuente">{{ipUser($ip)}}</div>
					</div>
						
					</a>
				
				@else
					<a data-url="{{ route('inventario.ip.create', $ip) }}" class="load-form-modal  anchor" data-toggle ="modal" data-target='#form-modal'>
					
					<div class="panel panel-default">
						{{$ip}}
						<div class="fuentelibre">LIBRE</div>
					</div>
					
					</a>
				@endif
			@endfor
	    </article>
	</div>



	<footer>
	    <div class="contenedor supreme-container">
	        &copy;  {{date('Y')}} ISSSTE BAJA CALIFORNIA
	    </div>
	</footer>

	@include('partials.form-modal', ['title'=>'Asignar Ip'])

@endsection

@section('js')
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
	<script src="{{ asset('js/script.js') }}"></script>
@endsection