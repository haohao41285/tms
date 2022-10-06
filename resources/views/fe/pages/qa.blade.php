@extends('fe.pages.master')

@section('title')
    Q&A
@endsection

@push('css')
    <style>
        .panel-default{
            border: none;
            background: none;
            border-radius: 0px;
            box-shadow: none;
        }
        .panel-default > .panel-heading{
            background: none;
            border-bottom: 1px #47cf73 solid;
        }
        #accordion::before {
            content: '';
            position: absolute;
            width: 2px;
            background-color: #47cf73;
            top: 0;
            bottom: 0;
        }
        .panel{
            position: relative;
        }
        .panel::before {
            content: '';
            position: absolute;
            background-color: white;
            border: 4px solid #47CF73;
            border-radius: 50%;
            z-index: 1;
            left: -3px;
            top: 34px;
        }
        .panel-title a{
            font-style: italic;
        }
        .panel-default > .panel-heading + .panel-collapse > .panel-body {
            border: none;
        }
        .icon-check {
            color: #47cf73;
        }
    </style>
@endpush

@section('content')
    @include('fe.partials._banner-small', ['title' => 'Q&A'])

    <div class="container">
        <div class="col-md-4">
            <p><i class="fa fa-info-circle icon-check"></i> Web Design</p>
            <p><i class="fa fa-info-circle icon-check"></i> Advertising</p>
        </div>
        <div class="col-md-8">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                <i class="fa  fa-question-circle-o icon-check"></i> Collapsible Group 1</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.</div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                <i class="fa  fa-question-circle-o icon-check"></i> Collapsible Group 2</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.</div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                <i class="fa  fa-question-circle-o icon-check"></i> Collapsible Group 3</a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection

@push('js')
@endpush
