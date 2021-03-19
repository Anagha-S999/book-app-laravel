@extends("theme")

@section("contents")

<div class="container">
        <div class="row">
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="10000">
                        <img height="500px" src="https://cdn.elearningindustry.com/wp-content/uploads/2016/05/top-10-books-every-college-student-read-1024x640.jpeg" class="d-block-w-100" alt="">
                      </div>
                      <div class="carousel-item" data-bs-interval="2000">
                        <img height="500px" src="https://i.pinimg.com/originals/d5/0a/35/d50a351ebd1e2a63f48a2528fcabc0fc.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img height="500px" src="https://www.nypl.org/sites/default/files/8435321969_c1eea0631a_o.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"  data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"  data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
            <div class="col col-12 col-sm-6 col-lg-6">
                <table class="table">
                    <h2><span style="font-size: x-large;"><span style="background-size: auto;"><center><i>SIGN IN</center></i></span></span></h2>
                    <tr>
                        <span style="height: auto;"><td>Username/Email ID</td></span>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" id="password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-warning">LOGIN</button></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col col-12 col-sm-12 col-xl-12">
                <p><span style="font-family: Verdana, Geneva, Tahoma, sans-serif;"><span style="font-weight: bolder;"><span style="font-size: x-large;"><i>“Fill your house with stacks of books, in all the crannies and all the nooks.”- Dr Seuss</i> </span></span></span></p>
            </div>
        </div>
    </div>

    @endsection