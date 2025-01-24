
@php $data = $business; @endphp<br> 

<h2><strong>Business registration details missing</strong></h2>
<p>Dear <b>{{ $data->user->first_name }} {{ $data->user->last_name }}</b></p>
<p>Your business page has been verified.</p>
{{-- <p>Click here to proceed...</p> --}}
{{-- {{ config('app.name') }} --}}
