@extends('fe.pages.master')

@section('title')
    {{__('fe.menu.contact-us')}}
@endsection

@push('meta_seo')
    <meta name="keywords" content="{{ __('fe.seo.contact-us.keywords') ." - ". ENV('APP_NAME') }}" />
    <meta name="description" content="{{ __('fe.seo.contact-us.description') ." - ". ENV('APP_NAME') }}" />
    <meta property="og:url" content="{{ route('fe.contact-us') }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{__('fe.menu.contact-us')}}" />
    <meta property="og:description" content="{{ __('fe.seo.contact-us.description') ." - ". ENV('APP_NAME') }}" />
@endpush

@push('css')
    <style>
        .required::after{
            content: ' *';
            color: red;
        }
        .error-text{
            color: red;
            font-style: italic;
        }
        .agileinfo_mail_grid_left input, .agileinfo_mail_grid_left select, .agileinfo_mail_grid_left textarea{
            border-bottom: .5px #646369 solid;
            box-shadow: none;
            border-top: 0;
            border-right: 0;
            border-left: 0;
            border-radius: 0;
        }
        .form-control:focus {
            border-bottom: .5px #646369 solid;
            border-top: 0;
            border-right: 0;
            border-left: 0;
            outline: 0;
            box-shadow: none !important;
        }
        textarea{
            margin-top: 0px;
        }
    </style>
    
@endpush

@section('content')
    @include('fe.partials._banner-small', ['title' =>  __('fe.menu.contact-us') ])

    <div class="team">
        <div class="container">
            <p class="sub_para_agile" data-aos="fade-up" data-aos-duration="1000">{{ __('fe.contact.title') }}</p>
            <div class="agile_team_grids_top" style="display: flex">
                <div class="col-md-6 agileinfo_mail_grid_left" style="margin: auto">

                    @if(session()->has('success'))
                        <p class="text-center" style="color: #47cf73"><u>{{session('success')}}</u></p>
                    @endif

                    <form action="{{ route('fe.contact-us.post') }}" method="post">
                        @csrf

                        <div class="form-group" data-aos="fade-left" data-aos-duration="1000">
                            <label class="required" for="name">{{ __('fe.contact.your-name') }}:</label>
                            <input type="text" class="form-control" id="name" value="{{ old('name') }}" name="name" required>
                        </div>
                        @error('name')
                            <small class="error-text">{{ $message }}</small>
                        @enderror

                        <div class="form-group" data-aos="fade-right" data-aos-duration="1500">
                          <label class="required" for="email">{{ __('fe.contact.your-email') }}:</label>
                          <input type="email" class="form-control" id="email" value="{{ old('email') }}" name="email" required>
                        </div>
                        @error('email')
                            <small class="error-text">{{ $message }}</small>
                        @enderror
                        
                        <div class="form-group" data-aos="fade-left" data-aos-duration="2000">
                            <label class="" for="phone">{{ __('fe.contact.your-phone') }}:</label>
                            <input type="text" class="form-control" id="phone" value="{{ old('phone') }}" name="phone">
                        </div>
                          @error('phone')
                              <small class="error-text">{{ $message }}</small>
                          @enderror
  
                        <div class="from-group" data-aos="fade-right" data-aos-duration="2500">
                            <label for="message" class="required">{{ __('fe.contact.your-message') }}:</label>
                            <textarea name="message" id="" class="form-control" rows="2" required>{{ old('message') }}</textarea>
                        </div>
                        @error('message')
                            <small class="error-text">{{ $message }}</small>
                        @enderror

                        <div class="g-recaptcha" data-sitekey="{{ ENV('GOOGLE_RECAPTCHA_KEY') }}" data-aos="fade-left" data-aos-duration="3000"></div>
                        @error('g-recaptcha-response')
                            <small class="error-text">{{ $message }}</small>
                        @enderror

                        <input style="margin-top: 10px" type="submit" value="{{ __('fe.contact.send-button') }}" data-aos="fade-right" data-aos-duration="3000">
                    </form>
                    
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

    <script src="https://www.google.com/recaptcha/api.js?hl={{ app()->getLocale() }}" async defer></script>

    <script>
        var PhoneInputs = document.querySelectorAll('[name=phone]');
        var phoneBeginning = '0 (';
        var phoneMask = {
            mask: '000-000-0000',
        };

        var phoneValidationSetup = function (phoneInputs, inputMask) {
            phoneInputs.forEach(function (phoneInput) {
                var cellularPhone = IMask(phoneInput, inputMask);
                phoneInput.addEventListener('focus', function () {
                    if (cellularPhone.value === '') {
                        cellularPhone.value = phoneBeginning;
                    }
                });
            });
        };
        phoneValidationSetup(PhoneInputs, phoneMask);
    </script>
@endpush
