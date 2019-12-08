@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  <h2>Add A Post</h2>
                  <form  action="{{route('post')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                       <label for="">Enter post title</label>
                       <input type="text" name="title" value="" class="form-control">
                       <label for="">Enter description</label>
                       <textarea type="text" name="description" value="" class="form-control" rows="5"></textarea>
                       <label for="">Enter description</label>
                       <select class="form-control" name="category_id">
                          @foreach($categories as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                       </select>
                        <input type="submit" name="" class="mt-2 btn btn-success" value="publish">
                  </form>
                </div>
            </div>
            <div class="card card-body">
              <h2>MY POST</h2>
              
                @foreach($user->post as $post)
                <div class="card card-body mt-2">
                    <label>POST ID: {{$post->id}}</label>
                          <h3>{{$post->title}}</h3>
                           <h2>{{$post->description}}</h3>
                           
                           <label>Category:</label> 
                           <a href="{{route('category',$post->category_id)}}">{{$post->category->name}}</a>

                      </div>
                  @endforeach
              
            </div>
         </div>
        </div>
    
</div>
@endsection
