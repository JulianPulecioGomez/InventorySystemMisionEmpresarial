@extends('layouts.nav')

@section('content')

<div class="content">
  <div class="container">
    <form method="POST" action="{{ route('employee.store') }}">
      @csrf
      <div class="form-group {{ $errors->has('name') ? ' has-danger' : '' }}">

        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="{{ __('Name...') }}" value="{{ old('name') }}">

        @if ($errors->has('name'))
        <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
          <strong>{{ $errors->first('name') }}</strong>
        </div>
        @endif

      </div>
      <div class="form-group {{ $errors->has('email') ? ' has-danger' : '' }}">

        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="{{ __('name@example.com') }}" value="{{ old('email') }}">

        @if ($errors->has('email'))
        <div id="name-error" class="error text-danger pl-3" for="email" style="display: block;">
          <strong>{{ $errors->first('email') }}</strong>
        </div>
        @endif

      </div>
      <div class="form-group {{ $errors->has('client_id') ? ' has-danger' : '' }}">

        <label for="client_id">Client</label>

        <select class="form-control" id="client_id" name="client_id">
          @foreach($clients as $client)
          <option value="{{$client->id}}">{{$client->name}}</option>
          @endforeach
        </select>

        @if ($errors->has('client_id'))
        <div id="name-error" class="error text-danger pl-3" for="client_id" style="display: block;">
          <strong>{{ $errors->first('client_id') }}</strong>
        </div>
        @endif

      </div>

      <div class="form-group {{ $errors->has('section_id') ? ' has-danger' : '' }}">

        <label for="section">Section</label>

        <select class="form-control" id="section_id" name="section_id">
          @foreach($sections as $section)
          <option value="{{$section->id}}">{{$section->name}}</option>
          @endforeach
        </select>

        @if ($errors->has('section'))
        <div id="name-error" class="error text-danger pl-3" for="section" style="display: block;">
          <strong>{{ $errors->first('section') }}</strong>
        </div>
        @endif

      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

@endsection