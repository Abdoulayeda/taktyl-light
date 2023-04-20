@extends('master.admin')


@section('content')

@livewire('admin-commerciale-client',['commerciale'=>$commerciale])

@endsection