@extends('fe.pages.master')

@section('title')
    Contact us
@endsection

@push('css')
    <style>
        .required::after{
            content: ' *';
            color: red;
        }
    </style>
    
@endpush

@section('content')
    {{-- @include('fe.partials._banner-small', ['title' => 'Contact Us']) --}}

    <div class="team">
        <div class="container">
            <h3 class="w3l_header w3_agileits_header">Contact <span>Us</span></h3>
            <p class="sub_para_agile">If you have any questions, please feel free to contact us</p>
            <div class="agile_team_grids_top" style="display: flex">
                <div class="col-md-6 agileinfo_mail_grid_left" style="margin: auto">
                     
                    <form action="{{ route('fe.contact-us.post') }}" method="post">
                        @csrf

                        <span class="input input--nariko">
                            <input class="input__field input__field--nariko" name="name" type="text" id="input-20"
                                placeholder=" " required="" value="{{old('name')}}" />
                            <label class="input__label input__label--nariko" for="input-20">
                                <span class="input__label-content input__label-content--nariko required">Your Name</span>
                            </label>
                        </span>
                        @error('name')
                            <small class="error-text">{{ $message }}</small>
                        @enderror

                        <span class="input input--nariko">
                            <input class="input__field input__field--nariko" name="email" type="email" id="input-21"
                                placeholder=" " required=""  value="{{old('email')}}"/>
                            <label class="input__label input__label--nariko" for="input-21">
                                <span class="input__label-content input__label-content--nariko required">Your Email</span>
                            </label>
                        </span>
                        @error('email')
                            <small class="error-text">{{ $message }}</small>
                        @enderror

                        <span class="input input--nariko">
                            <input class="input__field input__field--nariko" name="subject" type="text" id="input-22"
                                placeholder=" " required=""  value="{{old('subject')}}"/>
                            <label class="input__label input__label--nariko" for="input-22">
                                <span class="input__label-content input__label-content--nariko required">Your Subject</span>
                            </label>
                        </span>
                        @error('subject')
                            <small class="error-text">{{ $message }}</small>
                        @enderror

                        <textarea name="message" placeholder="Your Message..." required="">{{old('message')}}</textarea>
                        <input type="submit" value="Send">
                        @error('message')
                            <small class="error-text">{{ $message }}</small>
                        @enderror

                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection
