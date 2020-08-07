<div class="table-responsive">
    <table class="table" id="abouts-table">
        <thead>
            <tr>
        <th>Rasmlar</th>
        <th>Sarlavhalar</th>
        <th>Ta'riflar</th>
        <th colspan="3">O'zgarishlar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($abouts as $about)
            <tr>
            <td><img src="/uploads/about/{{ $about->images }}" width="100" height="100" alt=""></td>
            <td>{{ $about->title }}</td>
            <td>{{ $about->description }}</td>
                <td>
                    {!! Form::open(['route' => ['abouts.destroy', $about->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('abouts.show', [$about->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('abouts.edit', [$about->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Ishonchingiz komilmi?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
