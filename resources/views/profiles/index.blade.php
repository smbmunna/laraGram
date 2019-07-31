@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{$user->profile->profileImage()}}" class="rounded-circle w-100">
        </div>
        <div class="col-9 p-5">
        	<div class="d-flex justify-content-between align-items-baseline">
        		<div class="d-flex align-items-center pb-3">
					<div class="h4">{{$user->username}}</div>

					<follow-button user-id="{{$user->id}}"></follow-button>
				</div>

				@can('update',$user->profile)
					<div>
						<a href="/p/create">Add New Post</a>
					</div>
				@endcan


        	</div>
			@can('update',$user->profile)
				<div>
					<a href="/profile/{{$user->id}}/edit">Edit Profile</a>
				</div>
			@endcan
        	<div class= "d-flex">
        		<div class="pr-5"><strong>{{$user->posts->count()}}</strong> Posts</div>
        		<div class="pr-5"><strong>26.1k </strong> Followers</div>
        		<div class="pr-5"><strong>223 </strong> Following</div>
        	</div>
        	<div class="pt-3 font-weight-bold">{{$user->profile->title}}</div>
        	<div>
        		{{$user->profile->description}}
        	</div>
        	<div>
        		<strong><a href="#">{{$user->profile->url ?? 'N/A' }}</a></strong>
        	</div>
        </div>
    </div>
    <div class="row pt-4">

		@foreach($user->posts as $post)

			<div class="col-4 pb-4">
				<a href="/p/{{$post->id}}"><img src="/storage/{{$post->image}}" class="w-100" ></a>
			</div>

		@endforeach
</div>
@endsection
