@component('mail::message')
# Introduction

Thank You for Registering {{$User->name}}, Please activate your account to be able to login.

@component('mail::button', ['url' => '/activate'])
Acctivate Account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
