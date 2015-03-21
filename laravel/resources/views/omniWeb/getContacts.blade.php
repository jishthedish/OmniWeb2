@extends('app')
@section('title')
    OmniWeb - List Campaigns
@stop
@section('content')
 

 
 <h1>List of Mobiles added for Campaigns</h1>
 
 <table class="table-bordered table">
        <thead> <tr >
                    <th>
                        Campaign Name
                    </th>
                    <th>
                        Mobile No
                    </th>
                   
</tr ></thead>
 @foreach($entries as $entry)
          <tbody>  <tr  >
                    <td>
                        {{$entry->campaignName}}
                    </td>
                    <td>
                        {{$entry->mobileNo}}
                    </td>
                    
            </tr></tbody>
 @endforeach
</table>
@endsection