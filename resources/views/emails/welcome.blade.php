@component('mail::message')
# Titre

Message de bienvenu

@component('mail::button', ['url' => ''])
Button
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
