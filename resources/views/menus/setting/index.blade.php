@extends('layouts.app')

@section('content')
    <h1>{{ $title }}</h1>
    <p>These are global settings ...</p>
    <nav>
    	<div class="nav nav-tabs" id="nav-tab" role="tablist">
            @foreach ($tabs as $i => $tab)
				<button class="nav-link {{ $i == 0 ? 'active' : '' }}" id="nav-{{ $i }}-tab" data-bs-toggle="tab" data-bs-target="#nav-{{ $i }}" type="button" role="tab" aria-controls="nav-{{ $i }}" aria-selected="true">{{ $tab['name'] }}</button>
			@endforeach
    	</div>
    </nav>
	<div class="tab-content" id="nav-tabContent">
		@foreach ($tabs as $i => $tab)
			<div class="tab-pane fade {{ $i == 0 ? 'show active' : '' }}" id="nav-{{ $i }}" role="tabpanel" aria-labelledby="nav-{{ $i }}-tab">
				@include('menus.setting.tabs.'.$tab['name'])
			</div>
		@endforeach
	</div>
@endsection
