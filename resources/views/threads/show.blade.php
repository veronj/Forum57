@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Forum Threads</div>
                
                    <div class="panel-body">
                    
                         <article>
                            <h4>{{ $thread->title }}</h4>
                            <div class="body">{{ $thread->body }}</div>
                         </article>
                    
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection