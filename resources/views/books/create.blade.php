@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="{{ url('/home') }}">Dashboard</a></li>
					<li><a href="{{ url('/admin/books') }}">Buku</a></li>
					<li class="active">Tambah Buku</li>
				</ul>
				<div class="card card-default">
					<div class="card-header">
						<h2 class="card-title">Tambah Buku</h2>
				</div>

				<div class="card-body">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active">
							<a href="#form" aria-controls="form" role="tab" data-toggle="tab">
								<i class="fa fa-pencil-square-o"></i>Isi Form 
							</a>
						</li>
						<li role="presentation">
							<a href="#upload" aria-controls="upload" role="tab" data-toggle="tab">
								<i class="fa fa-cloud-upload"></i>Upload Excel 
							</a>
						</li>
					</ul>

					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="form">
							{!! Form::open(['url' => route('books.store'),
							 'method' => 'post', 'files'=>'true', 'class'=>'form-horizontal']) !!}
							@include('books._form')
							{!! Form::close() !!}
						</div>
						<div role="tabpanel" class="tab-pane" id="upload">
							{!! Form::open(['url' => route('import.books'), 
							'method' => 'post', 'files'=>'true', 'class'=>'form-horizontal']) !!}
							@include('books.import')
							{!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection