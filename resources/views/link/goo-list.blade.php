<table class="table table-condensed">
    @foreach($links as $link)
    <tr>
        <td>
            <strong>
                L#{{ $link->id }}
            </strong>
        </td>
        <td>
            <a href="{{ $link->path }}">
                {{ str_limit($link->path, 50) }}
            </a>
        </td>
    </tr>
    @endforeach
</table>
