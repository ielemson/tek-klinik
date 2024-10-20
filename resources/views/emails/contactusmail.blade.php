@component('mail::message')
## Message From Contact Us Form.
## You have a message from: <br> {{$data['name']}} 
## Subject of inquiry: <br> {{$data['subject']}} 

## Phone: <br> {{$data['email']}}  <br>
## Message: <br>
# {{$data['message_body']}}

@component('mail::button', ['url' => 'https://tek-klinik.com/'])
www.tek-klinik.com
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent