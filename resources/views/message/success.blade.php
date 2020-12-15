@extends('layout.app')

@section('title',__('contact_us.response.success.title'))

@section('form')
    <div class="form-group">
        <a href="{{route('message.create')}}"><img class="mb-4" src="{{asset('assets/images/check.png')}}"
                                                   alt="thank you" width="256"></a>
        <h3>{{__('contact_us.response.success.heading')}}</h3>
        <p>{{__('contact_us.response.success.text')}}</p>
    </div>
@endsection