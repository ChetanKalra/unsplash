@component('mail::message')
# New Photo Uploaded

{{ $photo->title }}

Uploaded by: {{ $photo->user->name }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
