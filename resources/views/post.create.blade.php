@extends('layouts.app')

@section('content')

<form class="container" action="{{ route('post.store') }}" method="post">

	<div class="form-group">


	<label for="">Title</label>
	<input type="text" class="form-control" name="title" placeholder="Post Title">

</div>

<div class="form-group">

	<label for="">Content</label>
	<textarea type="content" rows="5" class="form-control" placeholder="Post content" ></textarea>
	
</div>

<div class="form-group">

 <input  type="subimit" class="btn btn-primary" value="Save">
</div>
</form>

@endsection

