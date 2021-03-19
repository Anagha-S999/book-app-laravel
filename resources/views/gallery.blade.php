@extends("theme")

@section("contents")

<div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card h-100">
                <img height="400px" src="https://m.media-amazon.com/images/I/512BafFGGQL.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Wuthering Heights</h5>
                  <p class="card-text">Emile Bronte</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img height="400px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkuQMtVAipUurUKHYJ4d31cQHO1JaLhVW10w&usqp=CAU" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Pride & Prejudice</h5>
                  <p class="card-text">Jane Austin</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img height="400px" src="https://i.ytimg.com/vi/2EwKdFdcXm8/maxresdefault.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Short stories</h5>
                  <p class="card-text"></p>
                </div>
              </div>
            </div>
          </div>
          <nav aria-label="...">
            <ul class="pagination pagination-lg">
              <li class="page-item active" aria-current="page">
                <span class="page-link">1</span>
              </li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
            </ul>
          </nav>

@endsection