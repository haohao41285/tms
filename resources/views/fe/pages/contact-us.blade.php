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
    @include('fe.partials._banner-small', ['title' => 'Contact Us'])

    <div class="team">
        <div class="container">
            <p class="sub_para_agile">If you have any questions, please feel free to contact us</p>
            <div class="agile_team_grids_top" style="display: flex">
                <div class="col-md-6 agileinfo_mail_grid_left" style="margin: auto">

                    @if(session()->has('success'))
                        <p class="text-success text-center">{{session('success')}}</p>
                    @endif

                    <form action="{{ route('fe.contact-us.post') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label class="required" for="name">Your name:</label>
                            <input type="text" class="form-control" id="name" value="{{ old('name') }}" name="name" required>
                        </div>
                        @error('name')
                            <small class="error-text">{{ $message }}</small>
                        @enderror

                        <div class="form-group">
                          <label class="required" for="email">Your email:</label>
                          <input type="email" class="form-control" id="email" value="{{ old('email') }}" name="email" required>
                        </div>
                        @error('email')
                            <small class="error-text">{{ $message }}</small>
                        @enderror

                        <div class="form-group">
                          <label class="required" for="subject">Your subject:</label>
                          <select class="form-control" id="subject" name="subject">
                            <option @if(old('subject') == 1) selected @endif value="1">Design Website</option>
                            <option @if(old('subject') == 2) selected @endif value="2">Advertising Campaign</option>
                            <option @if(old('subject') == 3) selected @endif value="3">Other</option>
                          </select>
                        </div>
                        @error('subject')
                            <small class="error-text">{{ $message }}</small>
                        @enderror

                        <div class="from-group">
                            <label for="message" class="required">Your message:</label>
                            <textarea name="message" id="" class="form-control" rows="2" required>{{ old('message') }}</textarea>
                        </div>
                        @error('message')
                            <small class="error-text">{{ $message }}</small>
                        @enderror

                        <input type="submit" value="Send">
                    </form>
                    
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection
