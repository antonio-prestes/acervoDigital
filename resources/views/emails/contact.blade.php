@component('mail::message')
    Message from {{ $name }}

    {{ $message }}

    @component('mail::button', ['url' => 'https://acervo-digital.vercel.app'])
        Button Text
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
