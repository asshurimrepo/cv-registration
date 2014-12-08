@extends('master')

@section('content')
       
       <table class="table table-hover table-striped">
           <thead>
                <tr>
                    <th>Invoice #</th>
                    @foreach($entries[0]->lead_details as $detail)
                        <th>{{ $detail->field_name }}</th>
                    @endforeach
                </tr>
           </thead>

           <tbody>
           @foreach($entries as $entry)
               <tr>
                   <td><b>{{ $entry->info['invoice_id'] }}</b></td>

               @foreach($entries[0]->lead_details as $detail)


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
       
@stop