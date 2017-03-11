@extends('layouts.index')
@section('content')

<div class="section">
	<div class="card-panel purple darken-3 white-text">List Post</div>
</div>

<div class="section">
	
	<div class="row">
		<div class="col s12">
			<h5>{{ $tampilkan->judul }}</h5>

            <div class="divider"></div>
            <p>{!! $tampilkan->isi !!}</p>
                
		</div>
	</div>

</div>

@endsection