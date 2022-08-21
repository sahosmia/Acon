@if(session()->has('success'))
<div class="alert alert-success">
    <p>{{ session()->get('success') }}</p>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if(session()->has('error'))
<div class="alert alert-danger">
    <p>{{ session()->get('error') }}</p>
</div>
@endif
