<form action="{{ route('link.store') }}" method="post">
    {{ csrf_field() }}

    <input type="hidden" name="type" value="{{ $type }}">

    <div class="input-group">
        <input type="text" name="path"  class="form-control" placeholder="{{ $slot }}">

        <span class="input-group-btn">
            @if($type === 'goo')
                <button class="btn btn-success" type="submit">YAAS!</button>
            @else
                <button class="btn btn-danger" type="submit">NOEH!</button>
            @endif
        </span>
    </div>
</form>
