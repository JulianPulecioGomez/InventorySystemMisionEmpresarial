@extends('layouts.nav')

@section('content')

<div class="content">
  <div class="container">
    <form method="POST" action="{{ route('client.update',['client_id'=>$client->id]) }}">
      @csrf
      <input name="_method" type="hidden" value="PUT">
      <div class="form-group {{ $errors->has('name') ? ' has-danger' : '' }}">

        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$client->name}}" placeholder="{{ __('Name...') }}">

        @if ($errors->has('name'))
        <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
          <strong>{{ $errors->first('name') }}</strong>
        </div>
        @endif

      </div>
      <div class="form-group {{ $errors->has('email') ? ' has-danger' : '' }}">

        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" value="{{$client->email}}" placeholder="{{ __('name@example.com') }}">

        @if ($errors->has('email'))
        <div id="name-error" class="error text-danger pl-3" for="email" style="display: block;">
          <strong>{{ $errors->first('email') }}</strong>
        </div>
        @endif

      </div>
      <div class="form-group {{ $errors->has('email') ? ' has-danger' : '' }}">

        <label for="legal_entity">Are you a Legal Entity?</label>
        <select class="form-control" id="legal_entity" name="legal_entity">
          <option value="1" class="{{$client->legal_entity ? 'select' : ''}}" >Yes</option>
          <option value="0" class="{{$client->legal_entity == 0 ? 'select' : ''}}">No</option>
        </select>

        @if ($errors->has('legal_entity'))
        <div id="name-error" class="error text-danger pl-3" for="email" style="display: block;">
          <strong>{{ $errors->first('legal_entity') }}</strong>
        </div>
        @endif

      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

@endsection