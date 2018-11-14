@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Forum Threads</div>
                
                    <div class="panel-body">
                    @foreach($threads as $thread)
                         <article>
                            <h4><a href="{{ $thread->path() }}">{{ $thread->title }}</a></h4>
                            <div class="body">{{ $thread->body }}</div>
                         </article>
                    @endforeach
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection