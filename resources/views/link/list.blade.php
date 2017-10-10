<table class="table table-condensed">
    @forelse($links as $link)
    <tr>
        <td>
            <strong>
                #{{ $link->id }}
            </strong>
        </td>
        <td>
            <a href="{{ $link->path }}">
                {{ str_limit($link->path, 50) }}
            </a>
        </td>
    </tr>
    @empty
    <tr class="text-center">
        <td>
            <h3>NO <strong>BAAH</strong> LANKS YAT!</h3>
        </td>
    </tr>
    @endforelse
</table>