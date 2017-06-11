@extends('admin.app')
@section('content')

<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading"><span class="glyphicon glyphicon-envelope"></span> Article Builder</div>
					<div class="panel-body form-horizontal">
						 {!! Form::open(['url' => 'admin/dashboard']) !!}
							<fieldset>
								<!-- Name input-->
								<div class="form-group">
									<div class="col-md-12">
									{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title' ]) !!}
									</div>
								</div>

								<!-- photo input-->
								<div class="form-group">
									<div class="col-md-12">
										{!! Form::file('pixel') !!}
									</div>
								</div>

								<!-- Message body -->
								<div class="form-group">
									<div class="col-md-12">
										{!! Form::textarea('body', null, ['class' => 'ckeditor form-control']) !!}
									</div>
								</div>

								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										{!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
									</div>
								</div>
							</fieldset>
							{!! Form::close() !!}

					</div>
				</div>



			</div><!--/.col-->

			<div class="col-md-4">
			
								<div class="panel panel-red">
					<div class="panel-heading dark-overlay"><span class="glyphicon glyphicon-calendar"></span>Calendar</div>
					<div class="panel-body">
						<div id="calendar"></div>
					</div>
				</div>
								
			</div><!--/.col-->
		</div><!--/.row-->
@endsection
