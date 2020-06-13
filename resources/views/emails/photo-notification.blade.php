@component('mail::message')

## Checkout this photo by Kira
{{ $photo->title }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
