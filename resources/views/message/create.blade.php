@extends('layout.app')

@section('title',__('contact_us.form.title'))

@section('form')
    <form class="contact-form" action="{{route('message.store')}}" method="POST">
        @csrf
        <img class="mb-4" src="{{asset('assets/images/email.png')}}" alt="logo" width="72">
        <h1 class="h3 mb-3 font-weight-normal">{{__('contact_us.form.title')}}</h1>
        <div class="form-group">
            <input type="text" name="name" class="form-control @error('name') invalid @enderror"
                   placeholder="{{__('contact_us.form.name')}}"
                   value="{{old('name')}}">
            @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control @error('email') invalid @enderror"
                   placeholder="{{__('contact_us.form.email')}}"
                   value="{{old('email')}}">
            @error('email')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <textarea class="form-control @error('message') invalid @enderror" name="message"
                      placeholder="{{__('contact_us.form.message')}}">{{old('message')}}</textarea>
            @error('message')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">{{__('contact_us.form.action')}}</button>
    </form>
@endsection
