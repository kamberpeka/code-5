@extends('layout.app')

@section('title',__("contact_us.response.failed.title"))

@section('form')
    <div class="form-group">
        <a href="{{route('message.create')}}"><img class="mb-4" src="{{asset('assets/images/cross.png')}}"
                                                   alt="error" width="256"></a>
        <h3>{{__('contact_us.response.failed.heading')}}</h3>
        <p>{{__('contact_us.response.failed.text')}}</p>
    </div>
@endsection