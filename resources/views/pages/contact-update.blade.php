@extends('pages. layouts.app')

@section('title-block')
hello
@endsection

@section('content')
    <h1>Update rows</h1>
    <form action="{{ route('contact-data-update-submit', $data->id) }}" method="post">
     @csrf

        <div class="form-group">
            <label for="name">Enter name</label>
            <input type="name" name="name" value="{{$data->name}}" placeholder="Input name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="name">Enter email</label>
            <input type="name" name="email" value="{{$data->email}}" placeholder="Input email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="name">Message subject</label>
            <input type="text" name="subject" value="{{$data->subject}}" placeholder="Input name" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" value="{{$data->message}}" id="message" class="form-control" placeholder="Input message"></textarea>
        </div>

        <button type="submit" name="button" class="btn btn-success">Send!</button>
    </form>
@endsection
