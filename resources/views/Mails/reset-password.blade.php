@component('mail::message')
# Petición para Resetear password

Si tu no solicitaste esto, solo ignoralo

@component('mail::button', ['url' => $url])
    Resetear
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent