@if ($errors->any())
    <div class="alert alert-warning text-center">
        <strong>EYOOO!</strong> {{ $errors->first() }}
    </div>
@endif
