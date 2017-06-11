@extends('admin.app')

@section('content')

<div class="col-md-8">

				<div class="panel panel-default chat">
					<div class="panel-heading" id="accordion"><span class="glyphicon glyphicon-comment"></span> Articles</div>
					<div class="panel-body">
						<ul>
						@foreach($articles as $article)
							<li class="right clearfix">
								<span class="chat-img pull-right">
									<img src="http://placehold.it/80/dde0e6/5f6468" alt="User Avatar" class="img-circle" />
								</span>
								<div class="chat-body clearfix">
									<div class="header">
										<strong class="pull-left primary-font">{{ $article->title }}</strong> <small class="text-muted">6 mins ago</small>
									</div>
									<p>
										{!! str_limit($article->body, 202) !!}
									</p>
								</div>
							</li>
						@endforeach
						</ul>
					</div>

					<div class="panel-footer">
						{{--<div class="input-group">--}}
							{{--<input id="btn-input" type="text" class="form-control input-md" placeholder="Type your message here..." />--}}
							{{--<span class="input-group-btn">--}}
								{{--<button class="btn btn-success btn-md" id="btn-chat">Send</button>--}}
							{{--</span>--}}
						{{--</div>--}}
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


@endsection

