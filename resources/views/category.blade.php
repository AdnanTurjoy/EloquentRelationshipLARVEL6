@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
            <div class="card card-body">
              <h2>Category: {{$category->name}}</h2>
              
              @foreach($category->post as $post)
                <div class="card card-body mt-2">
                    <label>POST ID: {{$post->id}}</label>
                          <h3>{{$post->title}}</h3>
                           <h2>{{$post->description}}</h3>
                           
                           <label>Category:</label> 
                           <a href="{{route('category',$category->id)}}">{{$post->category->name}}</a>

                      </div>
                  @endforeach
                
              
           
         </div>
        </div>
    
</div>
@endsection
