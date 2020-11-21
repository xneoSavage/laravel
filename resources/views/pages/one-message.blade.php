@extends('pages. layouts.app')

@section('title-block'){{ $data->subject }} @endsection

@section('content')
    <h1>{{ $data->subject }} </h1>
        <div class="alert alert-info">
            <h3>{{ $data->subject }}</h3>
            <p>{{ $data->message }}</p>
            <p>{{ $data->email }} - {{ $data->name }}</p>
            <a href="{{ route('contact-data-update-submit', $data->id) }}">
                <button class="btn btn-primary">Update</button></a>
            <a href="{{ route('contact-delete', $data->id) }}">
                <button class="btn btn-danger">Delete</button></a>
        </div>
@endsection
