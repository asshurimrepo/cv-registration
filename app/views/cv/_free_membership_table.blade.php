{{ Form::open() }}

<table class="table table-hover table-striped datatable">
    <thead>

        <tr>
                <th>{{--{{ Form::checkbox(null,null,null,['class'=>'check_all']) }}--}}</th>

                @foreach($free_entries[0]->lead_details as $detail)
                    <th>{{ $detail->field_name }}</th>
                @endforeach
        </tr>

    </thead>

    <tbody>
    @foreach($free_entries as $entry)
        <tr>
            <th>{{--{{ Form::checkbox(null,null,null,[]) }}--}} <a target="_parent" href="{{ WPOptions::fetch()->siteurl."/wp-admin/admin.php?page=gf_entries&view=entry&id={$entry->form_id}&lid={$entry->lead_id}&filter=&paged=1&pos=0" }}" title="View Entry"><i class="fa fa-eye"></i></a></th>

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
{{ Form::close() }}
