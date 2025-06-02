@component('mail::message')
## Message From Contact Us Form.
## You have a message from: <br> {{$data['name']}} 
## Organization: <br> {{$data['organization']}} 

## Phone: <br> {{$data['phone']}}  <br>
## Email: <br> {{$data['email']}}  <br>
## Services Inquired: <br>
# {{$data['services']}}

@component('mail::button', ['url' => 'https://tek-klinik.com/'])
www.tek-klinik.com
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent