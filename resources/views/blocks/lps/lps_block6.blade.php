<div class="container my-5 p-5 z-depth-1">

  
  <!--Section: Content-->
  <section class="text-center dark-grey-text">
    
  <h6 class="font-weight-bold text-center grey-text text-uppercase small mb-4">{{ $data->title_strong->value }}</h6>
    <!-- Section heading -->
    <h3 class="font-weight-bold text-center dark-grey-text pb-2">{{$data->title_default->value}}</h3>
    <hr class="w-header my-4">
    <!-- Section description -->
    <p class="text-center text-muted w-responsive mx-auto mb-5">{{$data->description->value}}.</p>

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-3 mb-4">

        <div class="view z-depth-1 mb-4">
          <img src="{{$data->image1->value != 'image1.png' ? Voyager::Image($data->image1->value) :'https://mystorage.loginweb.dev/storage/team/percy.jpg'}}" class="img-fluid mx-auto"  alt="smaple image">
        </div>
        <h6 class="font-weight-bold">{{$data->title1->value }}</h6>
      <small class="text-muted">{{ $data->small1->value }}</small>
        <ul class="list-unstyled d-flex justify-content-center mt-3 mb-0 text-muted">
          <li><i class="fab fa-twitter mx-2"></i></li>
          <li><i class="fab fa-facebook-f mx-2"></i></li>
          <li><i class="fab fa-instagram mx-2"></i></li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-4">

        <div class="view z-depth-1 mb-4">
          <img src="{{$data->image2->value != 'image2.png' ? Voyager::Image($data->image2->value) :'https://mystorage.loginweb.dev/storage/team/gani.png'}}" class="img-fluid mx-auto"  alt="smaple image">
        </div>
        <h6 class="font-weight-bold">{{$data->title2->value }}</h6>
        <small class="text-muted">{{ $data->small2->value }}</small>
        <ul class="list-unstyled d-flex justify-content-center mt-3 mb-0 text-muted">
          <li><i class="fab fa-twitter mx-2"></i></li>
          <li><i class="fab fa-facebook-f mx-2"></i></li>
          <li><i class="fab fa-instagram mx-2"></i></li>
        </ul>

      </div>
      <!-- Grid column -->
      
      <!-- Grid column -->
      <div class="col-md-3 mb-4">

        <div class="view z-depth-1 mb-4">
          <img src="{{$data->image3->value != 'image3.png' ? Voyager::Image($data->image3->value) :'https://mystorage.loginweb.dev/storage/team/budy.png'}}" class="img-fluid mx-auto"  alt="smaple image">
        </div>
        <h6 class="font-weight-bold">{{$data->title3->value }}</h6>
        <small class="text-muted">{{ $data->small3->value }}</small>
        <ul class="list-unstyled d-flex justify-content-center mt-3 mb-0 text-muted">
          <li><i class="fab fa-twitter mx-2"></i></li>
          <li><i class="fab fa-facebook-f mx-2"></i></li>
          <li><i class="fab fa-instagram mx-2"></i></li>
        </ul>

      </div>
      <!-- Grid column -->
      
      <!-- Grid column -->
      <div class="col-md-3 mb-4">

        <div class="view z-depth-1 mb-4">
        <img src="{{ $data->image4->value != 'image4.png' ? Voyager::Image($data->image4->value) :'https://mystorage.loginweb.dev/storage/team/jaiko.png' }}" class="img-fluid mx-auto" alt="smaple image">
        </div>
        <h6 class="font-weight-bold">{{$data->title4->value }}</h6>
        <small class="text-muted">{{ $data->small4->value }}</small>
        <ul class="list-unstyled d-flex justify-content-center mt-3 mb-0 text-muted">
          <li><i class="fab fa-twitter mx-2"></i></li>
          <li><i class="fab fa-facebook-f mx-2"></i></li>
          <li><i class="fab fa-instagram mx-2"></i></li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->
    
  </section>
  <!--Section: Content-->


</div>