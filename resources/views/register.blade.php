@extends("theme")

@section("contents")

<div class="container">
            <div class="row">
                <div class="col col-12 col-sm-6 col-xxl-6">
                    <img height="600px" src="https://i.guim.co.uk/img/media/bddbf0ae13e4b0e4dc91e4cf67224228fb06e7b5/0_38_4928_2957/master/4928.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=7e93597ec9e4483095bbbdcc202a2ef1" alt=""></ing>
                </div>
                <div class="col col-12 col-sm-6 col-xxl-6">
                <h2><i>Register Now</i></h2>
                <table class="table">
                    <tr>
                        <td>Name</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" id="email"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" id="password"></td>
                    </tr>
                    <tr>
                        <td>Conform Password</td>
                        <td><input type="password" name="password" id="password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-danger">SIGN UP</button></td>
                    </tr>
                </table>
                </div>
            </div>
        </div>

@endsection