@extends('main')
@section('title', '| View')

@section('content')

<div class='row'>
	<div class='col-md-8'>
		<h1>{{ $post->title}}</h1>
		<p class='lead'>{{ $post->body}}</p>

		<a href="{{ route('posts.index')}}" class="btn btn-primary">Back to...</a>

	</div>
	<div class="col-md-4">
	<div class="well">
		<dl class='dl-horizontal'>
			<dt>URL slug:</dt>
			<dd><a href="{{ url($posts->slug) }}">{{ url($post->slug) }}</a></dd>
		</dl>
		<dl class='dl-horizontal'>
			<dt>Create At:</dt>
			<dd>{{date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
		</dl>
		<dl class='dl-horizontal'>
			<dt>Last Updated:</dt>
			<dd>{{date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
		</dl>
		<div class='row'>
			<div class='col-sm-6'>
				{!! Html::linkRoute('posts.edit','Edit', array($post->id), 
				array('class'=>'btn btn-primary btn-block')) !!}
				
			</div>
			<div class='col-sm-6'>
				{!! Form::open(['route'=>['posts.destroy', $post->id],'method'=>'DELETE']) !!}

				{!! Form::submit('Delete', ['class'=>'btn btn-danger btn-block']) !!}

				{!! Form::close() !!}
				
			</div>
			<div class='row'>
				<div class='col-md-12'>
					{{ Html::linkRoute('posts.index', ' << See All Posts', [], 
					['class'=>'btn btn-default btn-block btn-h1-spacing']) }}
				</div>
			</div>
		</div>
	</div>
</div>

</div>

	
@endsection