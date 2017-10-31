<table class="table table-condensed">
    @forelse($links as $link)
    <tr>
        <td>
            <strong>
                #{{ $link->id }}
            </strong>
        </td>
        <td>
            <p>
                <a href="{{ $link->path }}">
                    {{ str_limit($link->path, 50) }}
                </a>
                <span class="pull-right">By {{$link->user->username}}</span>
            </p>
            <p>
                <span>{{$link->created_at}}</span>
            </p>
        </td>
    </tr>
    @empty
    <tr class="text-center">
        <td>
            <h3>NO <strong>LANKS</strong> YAT!</h3>
        </td>
    </tr>
    @endforelse
</table>
