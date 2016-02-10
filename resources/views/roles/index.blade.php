@extends('auth.roles')
	@section('content')
		@foreach($roles as $rol)
			{{$rol->name}} - {{$rol->description}}
		@endforeach

		<div class="fixed-action-btn" >
	    <a  href = '#modal1' 
	    	class="create btn-floating btn-large waves-effect waves-light red modal-trigger" 
	    	data-link = '/roles/create'>
	    	<i class="large material-icons">add</i>
		</a> 
	</div>

	@endsection