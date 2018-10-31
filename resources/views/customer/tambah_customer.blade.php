@extends('layouts.app')

@section('title','Tambah Customer')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Tambah Customer</h3>
				</div>
				<div class="box-body">
					<form method="post" action="{{url('tambah_customer')}}">
						{!! csrf_field() !!}
						<div class="row">
							<div class="col-md-6">
								@component('components.input',['type' => 'text','label' => 'First Name'])@endcomponent
							</div>
							<div class="col-md-6">
								@component('components.input',['type' => 'text','label' => 'Last Name'])@endcomponent
							</div>
						</div>
						@component('components.input',['type' => 'email','label' => 'Email'])@endcomponent
						@component('components.input',['type' => 'text','label' => 'Active'])@endcomponent
						@component('components.input',['type' => 'text','label' => 'Store ID'])@endcomponent
						@component('components.input',['type' => 'text','label' => 'Address ID'])@endcomponent

						<button type="submit" class="btn btn-primary">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection