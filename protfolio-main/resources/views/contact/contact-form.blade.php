@component('mail::message')

<h3>New Massage From: {{$contact_form_data['email']}}</h3>
<p>Name: {{$contact_form_data['name']}}</p>
<p>Contact: {{$contact_form_data['phone']}}</p>
<p>Massage: {{$contact_form_data['message']}}</p>

@endcomponent
