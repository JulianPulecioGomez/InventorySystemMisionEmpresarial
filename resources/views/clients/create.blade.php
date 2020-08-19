@extends('layouts.nav')

@section('content')

<div class="content">
  <div class="container">
    <form method="POST" action="{{ route('client.store') }}">
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
      <div class="form-group {{ $errors->has('legal_entity') ? ' has-danger' : '' }}">

        <label for="legal_entity">Are you a Legal Entity?</label>
        <select class="form-control" id="legal_entity" name="legal_entity">
          <option value="1">Yes</option>
          <option value="0">No</option>
        </select>

        @if ($errors->has('legal_entity'))
        <div id="name-error" class="error text-danger pl-3" for="legal_entity" style="display: block;">
          <strong>{{ $errors->first('legal_entity') }}</strong>
        </div>
        @endif

      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

@endsection