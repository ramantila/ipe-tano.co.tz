@php $data = $user; @endphp

<h3>Reset your password</h3>

<h4>Dear {{ $user->first_name }} {{ $user->first_name }}</h4>

<p>You have requested a password reset. Please click the link below to set a new password.</p>

<p>Click <a href="{{ url('password/reset-password') }}">here</a> to reset your password.</p>

<p>Kind regards,<br>
Ipe Tano Admin.</p>