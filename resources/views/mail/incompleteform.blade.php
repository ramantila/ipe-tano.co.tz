@php $data = $incompleteBusiness; @endphp

<h3>Business registration details missing.</h3>

<h4>Dear <b>{{ $data->first_name }} {{ $data->last_name }}</b>,</h4>

<p>Kindly complete your application by uploading the following:</p>
<ul>
    @foreach ($missingItems as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>

<p>Click <a href="{{ url('/complete-registration') }}">here</a> to complete your form.</p>

<p>Kind regards,<br>
    Ipe Tano Admin.</p>
