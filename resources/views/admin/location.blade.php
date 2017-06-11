@extends('admin.app')

@section('content')
			
	<div class="col-md-8">
    				<div class="panel panel-default">
    					<div class="panel-heading"><span class="glyphicon glyphicon-envelope"></span> Location Builder</div>
    					<div class="panel-body form-horizontal">
    					{!! Form::open() !!}
    							<fieldset>
    								<!-- Name input-->
    								<div class="form-group">
    									<div class="col-md-12">
    										{!! Form::text('location', null, ['class' => 'form-control', 'placeholder' => 'Location Full Name']) !!}
    									</div>
    								</div>

    								<!-- photo input-->
    								<div class="form-group">
    									<div class="col-md-12">
    										{!! Form::text('abbreviation', null, ['class' => 'form-control', 'placeholder' => 'Abbreviation']) !!}
    									</div>
    								</div>

    								<!-- Form actions -->
    								<div class="form-group">
    									<div class="col-md-12 widget-right">
    										{!! Form::submit('Add Location', ['class' => 'btn btn-primary']) !!}
    									</div>
    								</div>
    							</fieldset>
    							{!! Form::close() !!}
    					</div>

    				</div>



    			</div><!--/.col-->

    						<div class="col-md-4">

                								<div class="panel panel-default">
                                					<div class="panel-heading dark-overlay"><span class="glyphicon glyphicon-calendar"></span>Locations | Directory</div>
                                					<div class="panel-body">
                                						    					<ul>
                                                            					@foreach($locations as $location)

                                                            					    <li>{{ $location->location }} ({{ $location->abbreviation }})</li>
                                                            					@endforeach
                                                            					</ul>
                                					</div>
                                				</div>

                			</div><!--/.col-->

@endsection