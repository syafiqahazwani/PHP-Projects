
@extends('Frontend.Body.master_front')
@section('content')

@section('title')
Exploredia | Contact
@endsection

@php
   $id = Auth::user()->id;
   $adminData = App\Models\User::find($id);
@endphp

<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="contact__text">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h2>Contact</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ route('contact.main') }}">Home</a>
                            <span>Contact</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__map">
                        <img
                            src="{{asset('Backend')}}/assets/images/big/2.png"
                            height="350" style="border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"/>
                    </div>
                    <div class="contact__widget">
                        <ul>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <span>{{ $adminData->address }}</span>
                            </li>
                            <li>
                                <i class="fa fa-mobile"></i>
                                <span>Phone: {{ $adminData->phone }}</span>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <span>Email: {{ $adminData->email }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">

                    @if(session('message'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <span>{{ session('message') }} </span>
                    </div>
                    @endif

                    <div class="contact__form">
                        <div class="contact__form__title">
                            <h2>GET IN TOUCH</h2>
                            <p>Welcome to my Contact Website.</p>
                        </div>

                        <form method="POST" action="{{ route('contact.store') }}" class="forms-sample">
                            @csrf

                            @if($errors->has('contact_name'))
                              <span class="text-danger">{{ $errors->first('contact_name') }}</span>
                            @endif
                            <input type="text" placeholder="Name" name="contact_name">

                            @if($errors->has('contact_email'))
                              <span class="text-danger">{{ $errors->first('contact_email') }}</span>
                            @endif
                            <input type="text" placeholder="Email" name="contact_email" >

                            @if($errors->has('contact_phone'))
                              <span class="text-danger">{{ $errors->first('contact_phone') }}</span>
                            @endif
                            <input type="text" placeholder="Phone" name="contact_phone">

                            @if($errors->has('contact_message'))
                              <span class="text-danger">{{ $errors->first('contact_message') }}</span>
                            @endif
                            <textarea placeholder="Message" name="contact_message"></textarea>

                            <button type="submit" class="site-btn">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

@endsection
