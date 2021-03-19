@extends("theme")

@section("contents")

<div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
              <div class="card">
                <img height="400px" src="https://www.shortlist.com/media/imager/202002/45973-original.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">The Road</h5>
                  <p class="card-text">Cormac Mcarthy</p>
                  <p class="card-text">Price : Rs 234/-</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img height="400px" src="https://cms-assets.tutsplus.com/uploads/users/114/posts/25982/image/War-and-peace-mock-up.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">War & Peace</h5>
                  <p class="card-text">Leo Tolstoy</p>
                  <p class="card-text">Price : Rs 187/-</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img height="400px" src="https://imagesvc.meredithcorp.io/v3/mm/image?q=85&c=sc&poi=%5B900%2C402%5D&w=1800&h=1200&url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F23%2F2014%2F06%2F10%2Fclassic-books-to-kill-a-mockingbird.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">To kill a Mocking Bird</h5>
                  <p class="card-text">Harper Lee</p>
                  <p class="card-text">Price : Rs 145/-</p>
                </div>
              </div>
            </div>
            <div class="col">
                <div class="card">
                  <img height="400px" src="https://api.time.com/wp-content/uploads/2015/02/national-reading-month-best-books-uder-100-pages-12.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Heart Of Darkness</h5>
                    <p class="card-text">Joseph Conrad</p>
                    <p class="card-text">Price : Rs 245/-</p>
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
          </div>
          </div>

@endsection