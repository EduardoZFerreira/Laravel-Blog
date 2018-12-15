@extends('main')
@section('title', ' | Contact')
@section('content')
<div class="col-md-12">
    <h2>Contact</h2>
    <hr>
    <form action="">
        <div class="form-group">
            <label for="email"> E-mail: </label>
            <input type="text" name="email" id="email" class="form-control"/>    
        </div>

        <div class="form-group">
            <label for="email"> Subject: </label>
            <input type="text" name="subject" id="subject" class="form-control"/>    
        </div>

        <div class="form-group">
            <label for="email"> Message: </label>
            <textarea name="msg" id="msg" class="form-control">Type your message...</textarea>    
        </div>
        <input type="submit" value="Submit" class="btn btn-success">
    </form>    
</div>    
@endsection