@extends('fe.pages.master')

@section('title')
    {{__('fe.menu.faqs')}}
@endsection

@push('meta_seo')
    <meta name="keywords" content="{{ __('fe.seo.faqs.keywords') ." - ". ENV('APP_NAME') }}" />
    <meta name="description" content="{{ __('fe.seo.faqs.description') ." - ". ENV('APP_NAME') }}" />
@endpush

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
            /* border-bottom: 1px #47cf73 solid; */
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
            top: 14px;
        }
        .panel-title a{
            font-style: italic;
            border-bottom: 1px solid #47CF73;
        }
        .panel-default > .panel-heading + .panel-collapse > .panel-body {
            border: none;
        }
        .icon-check {
            color: #47cf73;
        }
        .panel-body{
            margin-left: 2em;
            font-size: 14px;
        }
        .faqs-title{
            width: 100%;
        }
        .faqs-title p{
            color: #47cf73;
            text-transform: uppercase;
            text-align: justify;
            font-size: 3em;
            font-weight: bold;
        }
    </style>
@endpush

@section('content')
    @include('fe.partials._banner-small', ['title' =>  __('fe.menu.faqs')])

    <div class="container qa-content">
        <div class="col-md-4">
            <div>
                <div class="faqs-title">
                    {!! __('fe.faqs.title-space') !!}
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#{{ __('fe.faqs.websites.qa4.slug') }}">
                                <i class="fa  fa-question-circle-o icon-check"></i> {{ __('fe.faqs.websites.qa4.question') }}</a>
                        </h4>
                    </div>
                    <div id="{{ __('fe.faqs.websites.qa4.slug') }}" class="panel-collapse collapse">
                        <div class="panel-body">
                            {!! __('fe.faqs.websites.qa4.answer') !!}
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#{{ __('fe.faqs.websites.qa1.slug') }}">
                                <i class="fa  fa-question-circle-o icon-check"></i> {{ __('fe.faqs.websites.qa1.question') }}</a>
                        </h4>
                    </div>
                    <div id="{{ __('fe.faqs.websites.qa1.slug') }}" class="panel-collapse collapse">
                        <div class="panel-body">
                            {!! __('fe.faqs.websites.qa1.answer') !!}
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#{{ __('fe.faqs.websites.qa2.slug') }}">
                                <i class="fa  fa-question-circle-o icon-check"></i> {{ __('fe.faqs.websites.qa2.question') }}</a>
                        </h4>
                    </div>
                    <div id="{{ __('fe.faqs.websites.qa2.slug') }}" class="panel-collapse collapse">
                        <div class="panel-body">
                            {!! __('fe.faqs.websites.qa2.answer') !!}
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#{{ __('fe.faqs.websites.qa5.slug') }}">
                                <i class="fa  fa-question-circle-o icon-check"></i> {{ __('fe.faqs.websites.qa5.question') }}</a>
                        </h4>
                    </div>
                    <div id="{{ __('fe.faqs.websites.qa5.slug') }}" class="panel-collapse collapse">
                        <div class="panel-body">
                            {!! __('fe.faqs.websites.qa5.answer') !!}
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#{{ __('fe.faqs.websites.qa6.slug') }}">
                                <i class="fa  fa-question-circle-o icon-check"></i> {{ __('fe.faqs.websites.qa6.question') }}</a>
                        </h4>
                    </div>
                    <div id="{{ __('fe.faqs.websites.qa6.slug') }}" class="panel-collapse collapse">
                        <div class="panel-body">
                            {!! __('fe.faqs.websites.qa6.answer') !!}
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#{{ __('fe.faqs.websites.qa3.slug') }}">
                                <i class="fa  fa-question-circle-o icon-check"></i> {{ __('fe.faqs.websites.qa3.question') }}</a>
                        </h4>
                    </div>
                    <div id="{{ __('fe.faqs.websites.qa3.slug') }}" class="panel-collapse collapse">
                        <div class="panel-body">{!! __('fe.faqs.websites.qa3.answer') !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection

@push('js')
<script>
    const $qa_query = "{{request()->get('q')}}"

    // auto open answer
    const $qa = $(document).find('.panel-collapse')
    if ($qa_query !== '') {
        $.each($qa, function(index, val){
            if ($(val).attr('id') == $qa_query) {
                $(val).addClass('in')
            } else $(val).removeClass('in')
        })
    } else {
        $(".panel-collapse:first").addClass("in")
    }

    function dynamicSpacing(full_query, parent_element) {
        $(full_query).css('letter-spacing', 0);
        var content = $(full_query).html();
        var original = content;
        content = content.replace(/(\w|\s)/g, '<span class="faq-letter">$1</span>');
        $(full_query).html(content);

        var letter_width = 0;
        var letters_count = 0;
        const $faq_letter = $(full_query).find('.faq-letter')
        $($faq_letter).each(function() {
            letter_width += $(this).width();
            letters_count++;
        });

        var h1_width = $(parent_element).width();
        var spacing = (h1_width - letter_width) / (letters_count - 1);

        $(full_query).html(original);
        $(full_query).css('letter-spacing', spacing);
    }

    $(document).ready(function() {
        const $faqTitle = $(document).find('.faq-title');
        $.each($faqTitle, function(index, val) {
            const $parentBox = $(val).parent('.faqs-title')
            dynamicSpacing(val, $parentBox);
        })

        $(window).resize(function() {
            $.each($faqTitle, function(index, val) {
                const $parentBox = $(val).parent('.faqs-title')
                dynamicSpacing(val, $parentBox);
            })
        });
    });
</script>
@endpush
