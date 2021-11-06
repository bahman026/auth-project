@extends('html-content')

@section('content')

    <div class="row mt-4 justify-content-center">
        <div class="col-6">
            <form action="{{route('Login.submit')}}" method="POST">
                @csrf
                <input type="email" placeholder="enter email" required class="form-control"/>
                <input type="password" placeholder="enter password" required class="form-control"/>
                <input type="submit" class="btn btn-success" value="login">
            </form>
        </div>
    </div>

@endsection
