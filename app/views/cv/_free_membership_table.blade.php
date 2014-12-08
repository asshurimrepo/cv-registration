<table class="table table-hover table-striped">
    <thead>
    <tr>
        @foreach($free_entries[0]->lead_details as $detail)
            <th>{{ $detail->field_name }}</th>
        @endforeach
    </tr>
    </thead>

    <tbody>
    @foreach($free_entries as $entry)
        <tr>

            @foreach($entry->lead_details as $detail)


                @if(strpos($detail->field_name, 'CV'))
                      <td><a href="{{ $detail->value }}" target="_blank" class="btn btn-info">Download CV</a></td>
                @else
                    <td>{{ $detail->value }} </td>
                @endif

            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>
