@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $errorItem)
        <li>{{ $errorItem }}</li>
        @endforeach
    </ul>
</div>
@endif