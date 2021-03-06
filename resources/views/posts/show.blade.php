@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">

        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100" alt="">
        </div>

        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img src="{{$post->user->profile->profileImage()}}" alt="" class="rounded-circle w-40" style="max-width:50px">
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="font-weight-bold">
                            <a href="/profile/{{$post->user->id}}" class="text-dark">{{ $post->user->username }}</a>
                        </div>

                        <follow-button user-id="{{ $post->user->id }}" follows="{{$follows}}"></follow-button>
                    </div>

                </div>

                <hr>

                <p>
                    <span class="font-weight-bold"><a href="/profile/{{$post->user->id}}" class="text-dark">{{ $post->user->username }}</a></span> {{ $post->caption }}
                </p>

            </div>
        </div>
    </div>

</div>
@endsection
