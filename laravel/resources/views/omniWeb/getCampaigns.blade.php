@extends('app')
@section('title')
    OmniWeb - List Campaigns
@stop
@section('content')
 

 
 <h1>List of Campaigns created</h1>
 
 <table class="table-bordered table">
        <thead> <tr >
                    <th>
                        Campaign Name
                    </th>
                    <th>
                        Start Date
                    </th>
                    <th>
                        End Date
                    </th>
                    <th>
                        Campaign File
                    </th>
</tr ></thead>
 @foreach($entries as $entry)
          <tbody>  <tr  >
                    <td>
                        {{$entry->campaignname}}
                    </td>
                    <td>
                        {{$entry->campaign_start}}
                    </td>
                    <td>
                        {{$entry->campaign_end}}
                    </td>
                    <td>
                        <a href="{{route('getentry', $entry->filename)}}"> <img height="80" src="{{route('getentry', $entry->filename)}}" alt="Campaign File" /></a>
                    </td>
            </tr></tbody>
 @endforeach
</table>
@endsection