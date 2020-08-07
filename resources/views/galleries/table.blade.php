<div class="table-responsive">
    <table class="table" id="galleries-table">
        <thead>
            <tr>
                <th>Rasmlar</th>
                <th>Sarlavhalar</th>
                <th colspan="3">O'zgarishlar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($galleries as $gallery)
            <tr>
                <td><img src="/uploads/gallery/{{ $gallery->images }}" width="100" height="100" alt="{{ $gallery->images }}"></td>
                <td>{{ $gallery->title }}</td>
                <td>
                    {!! Form::open(['route' => ['galleries.destroy', $gallery->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('galleries.show', [$gallery->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('galleries.edit', [$gallery->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Ishonchingiz komilmi?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
