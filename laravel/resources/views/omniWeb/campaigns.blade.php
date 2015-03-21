@extends('app')
@section('title')
    OmniWeb - Create Campaign
@stop
@section('content')

 <div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create a new Campaign</div>
                <div class="panel-body">
                    

                    @if(Session::has('error'))
                        <p class="error-info error">{{ Session::get('error') }}</p>
                    @endif
                    @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                    @endif
                    <!--form class="form-horizontal" action="{{route('addentry', [])}}" method="post" enctype="multipart/form-data"-->
    
                      {!! Form::open( array(
                            'route' => 'addentry',
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
                           
                                {!! Form::label( 'name', 'Campaign Name ' ,array('class' => 'col-md-4 control-label', 'id' => 'name')) !!}
                                
                                    {!! Form::text( 'campaignName', '', array(
                                        'id' => 'campaignName',
                                        'placeholder' => 'Name of Campaign',
                                        'class' => 'col-md-6',                        
                                    ) ) !!}
                             
                        </div>

                        <div class="form-group">
                            <!--label class="col-md-4 control-label">Start Date</label>
                            <div class="col-md-6">
                               <input type="date" name="startDate" id="startDate" value="" />
                            </div-->
                            {!! Form::label( 'start', 'Start Date : ' ,array('class' => 'col-md-4 control-label', 'id' => 'start')) !!}

                            {!! Form::input('date','startDate','', array(
                                        'id' => 'startDate',
                                        'placeholder' => 'Start Date of Campaign',
                                        'class' => 'col-md-6',                        
                                    ) ) !!}
                         
                        </div>

                        <div class="form-group">
                            <!--label class="col-md-4 control-label">End Date</label>
                            <div class="col-md-6">
                               <input type="date" name="endDate" id="endDate" value="" />
                            </div-->

                            {!! Form::label( 'end', 'End Date : ' ,array('class' => 'col-md-4 control-label', 'id' => 'start')) !!}

                            {!! Form::input('date','endDate','', array(
                                        'id' => 'endDate',
                                        'placeholder' => 'End Date of Campaign :',
                                        'class' => 'col-md-6',                        
                                    ) ) !!}
                        </div>

                         
                         

                        <div class="form-group">
                            <!--label class="col-md-4 control-label">The file that needs to be send for campaign : </label>
                            <div class="col-md-6">                               
                                     <input type="file" name="filefield" id="filefield">       
                            </div-->
                             {!! Form::label( 'end', 'File for campaign : ' ,array('class' => 'col-md-4 control-label', 'id' => 'fileCamp')) !!}

                            {!! Form::file('filefield', array(
                                        'id' => 'filefield',
                                        'placeholder' => 'File for campaign',
                                        'class' => 'col-md-6',        
                                         'accept'=>'image/gif, image/jpeg' ,                  
                                    ) ) !!}
                        </div>

                        


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <!--button type="submit" class="btn btn-primary" style="margin-right: 15px;">
                                    Create Campaign
                                </button-->
                                {!! Form::submit('Create Campaign !',['class'=>'btn btn-primary']) !!}

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