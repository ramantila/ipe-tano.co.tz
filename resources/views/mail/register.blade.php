@php $data = $user; @endphp

<h3>Please confirm your email address.</h3>

<h4>Dear <b>{{ $data->first_name }} {{ $data->last_name }}</b>,</h4>

<p>You have successfully created an account with Ipe Tano. Click <a href="{{ url('/confirm-email') }}">here</a> to confirm your email.</p>

<p>Kind regards,<br>
Ipe Tano Admin.</p>
