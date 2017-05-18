@extends('main')

@section('title', '| All Posts')

@section('content')

<div class="row">
	<div class="col-md-10">
		<h1>All Posts</h1>

	</div>
	<div class="col-md-2">
		<a href="{{ route('posts.create')}}" 
		class="btn btn-success btn-h1-spacing">Create New Post</a>
	</div>
	

</div><!-- end of .row -->
<hr>
<div class="col-md-12" class="table-responsive">
	<table class="table table-bordered table-hover">

		<thead>
			<th class='text-center'>#</th>
			<th class='text-center'>Title</th>
			<th class='text-center'>Body</th>
			<th class='text-center'>Created At</th>
			<th class='text-center'>Change a post</th>
		</thead>

		<tbody>

			@foreach ($posts as $post)

				<tr>
					<th class='text-center'>{{ $post->id}}</th>
					<td>{{ $post->title}}</td>
					<td>{{ substr($post->body, 0, 50)}} {{ strlen($post->body) > 150 ? "...": ""}}</td>
					<td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
					<td>
						<a href="{{ route('posts.show', $post->id)}}" class="btn btn-default btn-sm">View</a>
						<a href="{{ route('posts.edit', $post->id)}}" class="btn btn-default btn-sm">Edit</a>
					</td>
				</tr>	

			@endforeach

		</tbody>	
	</table>
	<div class='text-center'>
		{!! $posts->links(); !!}
	</div>
</div>

@stop