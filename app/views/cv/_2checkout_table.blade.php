@if($online_entries->count())

    <table class="table table-hover table-striped datatable">
        <thead>
        <tr>
            <th>Invoice #</th>
            @foreach($online_entries[0]->lead_details as $detail)
                <th>{{ $detail->field_name }}</th>
            @endforeach
        </tr>
        </thead>

        <tbody>
        @foreach($online_entries as $entry)
            <tr>
                <td><b>{{ $entry->info['invoice_id'] }}</b></td>

                @foreach($entry->lead_details as $detail)


                    @if(strpos($detail->field_name, 'CV'))
                        <td><a href="{{ $detail->value }}" target="_blank" class="btn btn-info">Download CV</a></td>
                    @else
                        <td>{{ $detail->value }}</td>
                    @endif

                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>

@endif