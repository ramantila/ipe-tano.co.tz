
@php $business; @endphp

<h3>Your business has been verified successfully.</h3>

<h4>Dear <b>{{ $business->user->first_name }} {{ $business->user->last_name }}</b>,</h4>

<p>Your business page has been verified. Click <a href="{{ url('/login') }}">here</a> to proceed.</p>

<p>Kind regards,<br>
Ipe Tano Admin.</p>
