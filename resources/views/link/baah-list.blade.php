<table class="table table-condensed">
    @foreach($links as $link)
    <tr>
        <td>
            <a href="{{ $link->path }}">
                {{ str_limit($link->path, 50) }}
            </a>
        </td>
        <td>
            <strong>
                #{{ $link->id }}
            </strong>
        </td>
    </tr>
    @endforeach
</table>
