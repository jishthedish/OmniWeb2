@extends('app')
@section('title')
    OmniWeb - Create Campaign
@stop
@section('content')

 <div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Manage Contacts</div>
                <div class="panel-body">
                    

                    @if(Session::has('error'))
                        <p class="error-info error">{{ Session::get('error') }}</p>
                    @endif
                    @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                    @endif
                    <!--form class="form-horizontal" action="{{route('addentry', [])}}" method="post" enctype="multipart/form-data"-->
    
                      {!! Form::open( array(
                            'route' => 'addcontacts',
                            'method' => 'post',
                            'id' => 'test-form',
                            'class' =>'form-horizontal',
                            'files' => true,
                        ) ) !!}
                        <!--input type="hidden" name="_token" value="{{ csrf_token() }}"-->

                        <div class="form-group">
                          <!--label class="col-md-4 control-label">Campaign Name</label>
                            <div class="col-md-6">
                                <input type="text"  name="campaignName" id="campaignName"  >
                            </div-->
                           
                                {!! Form::label( 'name', 'Group Name ' ,array('class' => 'col-md-4 control-label', 'id' => 'name')) !!}
                                
                                    {!! Form::text( 'groupName', '', array(
                                        'id' => 'groupName',
                                        'placeholder' => 'Name of Group',
                                        'class' => 'col-md-6',                        
                                    ) ) !!}
                             
                        </div>


                        <div class="form-group">
                            <!--label class="col-md-4 control-label">The file that needs to be send for campaign : </label>
                            <div class="col-md-6">                               
                                     <input type="file" name="filefield" id="filefield">       
                            </div-->
                             {!! Form::label( 'end', 'File with contact list: ' ,array('class' => 'col-md-4 control-label', 'id' => 'fileCamp')) !!}

                            {!! Form::file('filefield', array(
                                        'id' => 'filefield',
                                        'placeholder' => 'File with contact list',
                                        'class' => 'col-md-6',        
                                         'accept'=>'.xls,.xlsx,.csv' ,                  
                                    ) ) !!}
                        </div>


                         <!--div class="form-group">
                          <label class="col-md-4 control-label">Campaign Name</label>
                            <div class="col-md-6">
                                <input type="text"  name="campaignName" id="campaignName"  >
                            </div>
                           
                                {!! Form::label( 'mobile', 'List of Mobile to send campaign ' ,array('class' => 'col-md-4 control-label', 'id' => 'mobile')) !!}
                                {!! Form::radio('single') !!}
                                    {!! Form::file('mobilelist', array(
                                        'id' => 'mobilelist',
                                        'placeholder' => 'List of mobiles for campaign',
                                        'class' => 'col-md-6',     
                                        'accept'=>'.xls,.xlsx,.csv' ,                   
                                    ) ) !!}
                             
                        </div-->


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <!--button type="submit" class="btn btn-primary" style="margin-right: 15px;">
                                    Create Campaign
                                </button-->
                                {!! Form::submit('Upload Contacts !',['class'=>'btn btn-primary']) !!}

                            </div>

                        </div>
                        {!! Form::close() !!}
                    
                    <!--/form-->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection