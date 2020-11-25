<div class="table-responsive">
    <table class="table" id="teams-table">
        <thead>
            <tr>
                <th>Rasmlar</th>
                <th>Ism-familiyalar</th>
                <th>Kasblar</th>
                <th colspan="3">O'zgarishlar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($teams as $team)
            <tr>
                <td><img src="/uploads/team/{{ $team->images }}" width="100" alt="{{ $team->images }}"></td>
                <td>{{ $team->name }}</td>
                <td>{{ $team->job }}</td>
                <td>
                    {!! Form::open(['route' => ['teams.destroy', $team->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('teams.show', [$team->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('teams.edit', [$team->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Ishonchingiz komilmi?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
