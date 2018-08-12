@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="{{ url('/home') }}">Dashboard</a></li>
					<li><a href="{{ url('/admin/members') }}">Member</a></li>
					<li class="active">Tambah Member</li>
				</ul>
				<div class="card card-default">
					<div class="card-header">
						<h2 class="card-title">Tambah Member</h2>
				</div>

				<div class="card-body">
					{!! Form::open(['url' => route('members.store'), 'method' => 'post', 'files'=>'true', 'class'=>'form-horizontal']) !!}

				@include('members._form')
				{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection