@component('mail::message')
# Bienvenido a TennisPadel {{ $userName }}

@component('mail::button', ['url' => $url])
<strong>Ir a TennisPadel</strong>
@endcomponent

<br>
TennisPadel
@endcomponent
