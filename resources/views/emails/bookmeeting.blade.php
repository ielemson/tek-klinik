@component('mail::message')
## You have a new meeting schedule
## The meeting was booked by : <br> {{$data['fname']}}, {{$data['sname']}}  
## Meeting Date: <br> {{$data['meetingDate']}}, {{$data['meetingTime']}}

## Email: <br> {{$data['email']}}  <br>
## Issues to discuss: <br>
# {{$data['message_body']}}

@component('mail::button', ['url' => 'https://tek-klinik.com/'])
www.tek-klinik.com
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent