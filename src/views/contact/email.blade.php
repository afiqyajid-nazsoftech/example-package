@component('mail::message')
# This is from {{$name}}

"{{$remark}}"

Thanks,<br>
{{ config('app.name') }}
@endcomponent
