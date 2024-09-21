@extends('layouts.head_foot')
@section('amb')

<center>
  <div class="container">    
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        @if(session('recep'))
                        <script>
                            Swal.fire ({
                         icon: "Danger",
                         title: "incorrect email or password",
                         timer: 2500
 
});
                        </script>
                        @endif
                        </div>
                        </center>
<center>
    <br>
    <br>
    <br>
    <br>

<div class="container">
    <div class="row">
    <form action="{{URL::TO('driverlogin')}}" method="POST">
        @csrf
        <input type="email" placeholder="enter your email here" class="form-control mt-5 border-black ml-5" name="email">
        <span class="text-danger">@error ('email'){{$message}}   @enderror</span>
        <input type="password" placeholder="enter your password here" class="form-control mt-3 ml-5 border-black" name="pass">
        <span class="text-danger">@error ('pass'){{$message}}   @enderror</span>
       <br>
        <button  class="btn btn-danger mt-3 mb-3">Login</button>
    </form>
    </div>
</div>
</center>




@endsection