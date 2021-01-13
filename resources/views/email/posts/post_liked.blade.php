@component('mail::message')
# Introduction

Your Post was liked by {{ $liker->name }}

@component('mail::button', ['url' => route('showPost',$post)])
View Post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
