@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            <div class="row pt-2 pb-6">
                <div class="col-6 offset-3 pb-2">
                    <a href="/profile/{{$post->user->id}}"><img src="/storage/{{$post->image}}" class="w-100"></a>
                </div>
                <div class="col-6 offset-3">
                    <div>
                        <p ><span class="font-weight-bold">
                            <a href="/profile/{{$post->user->id }}">
                                <span class="text-dark">{{$post->user->username}}
                                </span>
                            </a>
                        </span> {{$post->caption}}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="row col-12 d-flex justify-content-center">
            {{$posts->links()}}
        </div>

    </div>
@endsection
