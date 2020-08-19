@extends('layouts.nav')

@section('content')

<div class="content">
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">name</th>
					<th scope="col">legal_entity</th>
					<th scope="col">email</th>
					<th scope="col">created_at</th>
					<th scope="col">updated_at</th>
					<th scope="col">options</th>
				</tr>
			</thead>
			<tbody>
				@foreach($clients as $client)
				<tr>
					<th scope="row">{{$client->id}}</th>
					<td>{{$client->name}}</td>
					<td>{{$client->legal_entity}}</td>
					<td>{{$client->email}}</td>
					<td>{{$client->created_at}}</td>
					<td>{{$client->updated_at}}</td>
					<td>
						<a href="{{route('client.show',['client_id'=>$client->id])}}" type="button" class="btn btn-primary">see / edit</a>
						<a href="{{route('client.delete',['client_id'=>$client->id])}}" type="button" class="btn btn-primary">delete</a>
					</td>

				</tr>
				@endforeach
			</tbody>
		</table>
		<a href="{{route('client.create')}}" type="button" class="btn btn-primary">New</a>
	</div>
</div>


@endsection
