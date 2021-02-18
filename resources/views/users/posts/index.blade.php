@extends('layouts.app')

@section('content')
  <div class="flex justify-center">
    <div class="w-8/12">
      <div class="p-6">
          <h1 class="text-2xl font-medium mb-2 text-white">{{ $user->name }}</h1>
          <p class="text-white">Posted {{ $posts->count() }} {{ Str::plural('post', $posts->count()) }}</p>
          <p class="text-white">Posts liked {{ $user->receivedLikes->count() }} {{ Str::plural('time',
            $user->receivedLikes->count()) }}</p>
      </div>

      <div class="bg-white p-6 rounded-lg">
      @if ($posts->count())
        @foreach ($posts as $post)
          <x-post :post="$post" />
        @endforeach

        {{ $posts->links() }}

      @else
        <p>{{ $user->name }} does not have any posts.</p>
      @endif
    </div>

    </div>
  </div>

@endsection
