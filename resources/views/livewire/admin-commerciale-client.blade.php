@extends('master.admin')

@section('content')
<div>
   {{--  {{ $commerciale->id }}--{{ $commerciale->name }}
    {{ count($commerciale->clients) }}

    @foreach ($commerciale->clients as $client)
        {{ $client->id }} <br>
    @endforeach --}}

    {{ $commerciale }}
</div>
@endsection
