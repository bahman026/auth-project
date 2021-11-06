@extends('html-content')

@section('content')

    <div class="row mt-4 justify-content-center">
        <div class="col-6">
            <form action="{{route('Auth.submit')}}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="enter email" required class="form-control"/>
                <input type="password" name="password" placeholder="enter password" required class="form-control"/>
                <input type="submit" class="btn btn-success" value="login">
            </form>
        </div>
    </div>

@endsection
