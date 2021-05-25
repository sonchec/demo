@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
	    
	    <div class="col-md-8 col-md-offset-2">
	        
    		<h1>Create post</h1>
    		
    		<form action="{{ route('posts.store') }}" method="POST">
                @csrf
                
    		    
    		    <div class="form-group has-error">
    		        <label for="slug">id <span class="require">*</span> <small>(Dien ten.)</small></label>
    		        <input type="text" class="form-control" name="slug" />
    		        <span class="help-block">Field not entered!</span>
    		    </div>
    		    
				<div class="form-group">
    		        <label for="title">name<span class="require">*</span></label>
    		        <input type="text" class="form-control" name="title"/>
    		    </div>
    		    
    		    <div class="form-group">
    		        <label for="title">Email<span class="require">*</span></label>
    		        <input type="text" class="form-control" name="title"/>
    		    </div>
    		    <div class="form-group">
					<label for="$categories">Choose a car:</label>
					<select name="$categories[]" id="$categoriess" multiple>
					@foreach($categories as $category)
					  <option value="{{$category->id}}">{{$category->name}}</option>
					  @endforeach
					</select>
					<br><br>
					<input type="submit" value="Submit">
    		    </div>
    		   

    		    <div class="form-group">
    		        <p><span class="require">*</span> - required fields</p>
    		    </div>
    		    
    		    <div class="form-group">
    		        <button type="submit" class="btn btn-primary">create</button>
    		    </div>
    		    
    		</form>
		</div>
		
	</div>
</div>
@endsection