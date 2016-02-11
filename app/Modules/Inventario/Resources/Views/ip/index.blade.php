@extends('inventario_main')
@section('content')
	@for($i=2; $i < 255; $i++)
		{{--*/ $ip = '192.161.59.'.$i /*--}}
		@if(in_array($ip, $ips))
			<a data-url="{{ route('inventario.ip.edit', $ip) }}" class="load-form-modal btn btn-warning" data-toggle ="modal" data-target='#form-modal'>
				{{$ip}}
			</a>
		@else
			<a data-url="{{ route('inventario.ip.create', $ip) }}" class="load-form-modal btn btn-success" data-toggle ="modal" data-target='#form-modal'>
				{{$ip}}
			</a>
		@endif
		
	@endfor

	@include('partials.form-modal', ['title'=>'Asignar Ip'])
@endsection