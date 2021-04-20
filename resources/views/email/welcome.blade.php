@component('mail::message')
# Someone left a request


Name: {{ $name->name }}<br>
Number: {{ $number->number}}<br>
Mail: {{ $email->email }}<br>
<br>
Don't forget to contact him<br>
<br>
Thanks,<br>
Oralbek
@endcomponent
