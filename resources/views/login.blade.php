@extends('master')
@section('content')


<div class="container custom-login">
<div class="row">
<div class="col-sm-4 mx-auto">
    <form>
    <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="" id="exampleInputEmail1" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="" id="exampleInputPassword1" placeholder="Password">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
</div>
</div>



@endsection
