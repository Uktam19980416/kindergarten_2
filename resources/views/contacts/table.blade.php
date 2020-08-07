<div class="table-responsive">
    <table class="table" id="contacts-table">
        <thead>
            <tr>
                <th>Ism-familiyalar</th>
                <th>Emaillar</th>
                <th>Xabarlar</th>
                <th colspan="3">O'zgarishlar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($contacts as $contacts)
            <tr>
            <td>{{ $contacts->name }}</td>
            <td>{{ $contacts->email }}</td>
            <td>{{ $contacts->message }}</td>
                <td>
                    {!! Form::open(['route' => ['contacts.destroy', $contacts->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        {{-- <a href="{{ route('contacts.show', [$contacts->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a> --}}
                        {{-- <a href="{{ route('contacts.edit', [$contacts->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a> --}}
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Ishonchingiz komilmi?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
