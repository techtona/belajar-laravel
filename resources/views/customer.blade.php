@extends('layouts.app')
@section('title','Tabel Customer')
@section('customer','active')
@section('content')
	<a href="{{url('tambah_customer')}}" class="btn btn-primary">Tambah Customer</a><br><br>

	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Tabel Customer</h3>
				</div>
				<div class="box-body">
					<table class="table">
						<thead>
							<tr>
								<th>Nama </th>
								<th>Store Manager ID</th>
								<th>Email</th>
								<th>Pilihan</th>
							</tr>
						</thead>
						<tbody>
							@foreach($customer as $data)
								<tr>
									<td>{{$data->first_name}} {{$data->last_name}}</td>
									<td>{{$data->store->manager_staff_id}}</td>
									<td>{{$data->email}}</td>
									<td>
										<a href="" class="btn btn-warning btn-xs"><span class="fa fa-pencil"></span>&nbsp; Edit</a>
										<a href="" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span>&nbsp; Delete</a>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
					{!! $customer->render() !!}
				</div>
			</div>
		</div>
	</div>
@endsection