@extends('layouts.nav')

@section('content')

<div class="content">
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">client</th>
					<th scope="col">email</th>
					<th scope="col">name</th>
					<th scope="col">updated_at</th>
					<th scope="col">options</th>
				</tr>
			</thead>
			<tbody>
				@foreach($employees as $employee)
				<tr>
					<th scope="row">{{$employee->id}}</th>
					<td>{{$employee->email}}</td>
					<td>{{$employee->name}}</td>
					<td>{{$employee->created_at}}</td>
					<td>{{$employee->updated_at}}</td>
					<td>
						<a href="{{route('employee.show',['employee_id'=>$employee->id])}}" type="button" class="btn btn-primary">see / edit</a>
						<a href="{{route('employee.delete',['employee_id'=>$employee->id])}}" type="button" class="btn btn-primary">delete</a>
					</td>

				</tr>
				@endforeach
			</tbody>
		</table>
		<a href="{{route('employee.create')}}" type="button" class="btn btn-primary">New</a>
	</div>
</div>


@endsection
