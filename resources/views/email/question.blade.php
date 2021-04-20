@component('mail::message')
# Someone asked a question

Name: {{ $obj->name }}<br>
Mail: {{ $obj->email }}<br>
Question: {{ $obj->question}}<br>
<br>

Don't forget to answer him<br>
<br>
Thanks,<br>
Oralbek
@endcomponent
