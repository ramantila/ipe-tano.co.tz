@php $data = $claim; @endphp

<h3>Your account has been transferred to you</h3>

<h4>Dear <b>{{ $data->user->first_name }} {{ $data->user->last_name }}</b>,</h4>

<p>We have transferred your business page <b>{{ $data->business_name }}</b> to <b>{{ $data->user->first_name }} {{ $data->user->last_name }}</b>.</p>

<p>Here is what you can do now that you have admin access:</p>

<ul>
    <li>You can add products/services</li>
    <li>You can engage with your clients</li>
    <li>You can view your brand performance on the dashboard</li>
</ul>

<p>Click <a href="{{ url('/login') }}">here</a> to log in to your business page.</p>

<p>Kind regards,<br>
Ipe Tano Admin.</p>
