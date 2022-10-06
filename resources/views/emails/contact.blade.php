@component('mail::message')

Customer Name: <b>{{$data['name']}}</b><br>
Customer Email: <b>{{$data['email']}}</b><br>
Customer Message: <b>{{$data['message']}}</b><br>
Time Contact: {{now()}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
