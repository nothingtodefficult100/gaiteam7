@extends('layouts.app')
@section('content')
<style>
body {
  font-family: 'Rubik',sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}
p{
    color:white;
}
.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #1343a9;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
<body>


    @php
    $category=DB::table('categories')->get();
  @endphp
      <nav class="main_nav">
          <div class="container">
              <div class="row">
                  <div class="col">

                      <div class="main_nav_content d-flex flex-row">

                          <!-- Categories Menu -->

                          <div class="cat_menu_container">
                              <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                                  <div class="cat_burger"><span></span><span></span><span></span></div>
                                  <div class="cat_menu_text">categories</div>
                              </div>

                              <ul class="cat_menu">
                              @foreach( $category as $cat)
                                  <li class="hassubs">
                                      <a href="#">{{ $cat->category_name }}<i class="fa fa-chevron-right"></i></a>
                                      <ul>
                                          @php
                                              $subcategory=DB::table('subcategories')->where('category_id',$cat->id)->get();
                                          @endphp
                                          @foreach($subcategory as $row)
                                          <li><a href="{{ url('products/'.$row->id) }}">{{  $row->subcategory_name }}<i class="fa fa-chevron-right"></i></a></li>
                                          @endforeach
                                      </ul>
                                  </li>
                              @endforeach
                              </ul>
                          </div>



                          <!-- Main Nav Top Menu -->

                          <div class="main_nav_menu ml-auto">
                              <ul class="standard_dropdown main_nav_dropdown">

                                  <li><a href="{{route('about')}}"> About Us <i class="fa fa-chevron-down"></i></a></li>
                                  <li><a href="{{ route('show.cart') }}"> Cart <i class="fa fa-chevron-down"></i></a></li>
                                  <li><a href="{{route('team')}}"> Our Team <i class="fa fa-chevron-down"></i></a></li>

                                  <li><a href="{{ route('blog.post') }}">Blog<i class="fa fa-chevron-down"></i></a></li>

                                  <li><a href="{{ route('policy') }}" style="color:black">Privicy Policy<i class="fa fa-chevron-down"></i></a></li>
                              </ul>
                          </div>

                          <!-- Menu Trigger -->

                          <div class="menu_trigger_container ml-auto">
                              <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                  <div class="menu_burger">
                                      <div class="menu_trigger_text">menu</div>
                                      <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                                  </div>
                              </div>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </nav>
      <br/>
      <br/>




      <div class="team_section container">
        <h2 style="text-align:center">Our Team</h2>
        <div class="row">
          <div class="column">
            <div class="card">
              <img src="{{asset('teamimages/rana.jpg')}}" alt="Jane" style="width:100%" height="300px">
              <div class="container">
                <h2>MD Rana</h2>
                <p class="title">Front-end Developer</p>
                <p style="color:black">Some text that describes me lorem ipsum ipsum lorem.</p>
                <p style="color:black">ranaprodhania@gmail.com</p>
                <p><a target="_blank" href="https://www.facebook.com/profile.php?id=100011272476491" class="btn btn-primary w-100" > Contact With Facebook </a></p>
              </div>
            </div>
          </div>

          <div class="column">
            <div class="card">
              <img src="{{asset('teamimages/habib.jpg')}}" alt="Mike" style="width:100%" height="300px">
              <div class="container">
                <h2>Habib Hossain</h2>
                <p class="title">Web Designer</p>
                <p style="color:black">Some text that describes me lorem ipsum ipsum lorem.</p>
                <p style="color:black">mdhabibhossain01564@gmail.com</p>
                <p><a target="_blank" href="https://www.facebook.com/mdhabibhossen.saife" class="btn btn-primary w-100" > Contact With Facebook </a></p>
              </div>
            </div>
          </div>

          <div class="column">
            <div class="card">
              <img src="{{asset('teamimages/somrat.jpg')}}" alt="John" style="width:100%" height="300px">
              <div class="container">
                <h2>Somrat Islam </h2>
                <p class="title"> Web Designer </p>
                <p style="color:black">Some text that describes me lorem ipsum ipsum lorem.</p>
                <p style="color:black">mdsomratislam80@gmail.com</p>
                <p><a target="_blank" href="https://www.facebook.com/mdsomratislam.islam.9"  class="btn btn-primary w-100" > Contact With Facebook </a></p>
              </div>
            </div>
          </div>


          <div class="column">
            <div class="card">
              <img src="{{asset('teamimages/samir.jpg')}}" alt="John" style="width:100%" height="300px">
              <div class="container">
                <h2> Ridhwan Samir</h2>
                <p class="title"> Web Designer </p>
                <p style="color:black">Some text that describes me lorem ipsum ipsum lorem.</p>
                <p style="color:black">
                    samirreja1221@gmail.com</p>
                <p><a target="_blank" href="https://www.facebook.com/profile.php?id=100056570061230"  class="btn btn-primary w-100" > Contact With Facebook </a></p>
              </div>
            </div>
          </div>

          <div class="column">
            <div class="card">
              <img src="{{asset('teamimages/aulad.jpg')}}" alt="John" style="width:100%" height="300px">
              <div class="container">
                <h2> Md Aulad Hossain </h2>
                <p class="title"> Web Designer </p>
                <p style="color:black">Some text that describes me lorem ipsum ipsum lorem.</p>
                <p style="color:black">auladh427@gmail.com</p>
                <p><a target="_blank" href="https://www.facebook.com/mdaulad.hossain.3382"  class="btn btn-primary w-100" > Contact With Facebook </a></p>
              </div>
            </div>
          </div>

          <div class="column">
            <div class="card">
              <img src="{{asset('teamimages/kamrul.jpg')}}" alt="John" style="width:100%" height="300px">
              <div class="container">
                <h2> Md Kamrul  </h2>
                <p class="title"> Web Designer </p>
                <p style="color:black">Some text that describes me lorem ipsum ipsum lorem.</p>
                <p style="color:black">mdkamrulhasan5080@gmail.com</p>
                <p><a target="_blank" href="https://www.facebook.com/bad.boy.8090"  class="btn btn-primary w-100" > Contact With Facebook </a></p>
              </div>
            </div>
          </div>


          <div class="column">
            <div class="card">
              <img src="{{asset('teamimages/hira.jpg')}}" alt="John" style="width:100%" height="300px">
              <div class="container">
                <h2> Md Hasan Habib  </h2>
                <p class="title"> Web Designer </p>
                <p style="color:black">Some text that describes me lorem ipsum ipsum lorem.</p>
                <p style="color:black">
                    hasanhabibhira@gmail.com</p>
                <p><a target="_blank" href="https://www.facebook.com/hasanhabib.hira.7"  class="btn btn-primary w-100" > Contact With Facebook </a></p>
              </div>
            </div>
          </div>

          <div class="column">
            <div class="card">
              <img src="{{asset('teamimages/mdrana.jpg')}}" alt="John" style="width:100%" height="300px">
              <div class="container">
                <h2> Md Rana islam </h2>
                <p class="title"> Web Designer </p>
                <p style="color:black">Some text that describes me lorem ipsum ipsum lorem.</p>
                <p style="color:black">john@example.com</p>
                <p><a target="_blank" href="https://www.facebook.com/mdrana.islam.5836711"  class="btn btn-primary w-100" > Contact With Facebook </a></p>
              </div>
            </div>
          </div>


          <div class="column">
            <div class="card">
              <img src="{{asset('teamimages/pollob.jpg')}}" alt="John" style="width:100%" height="300px">
              <div class="container">
                <h2> Md Pollob hasan </h2>
                <p class="title"> Web Designer </p>
                <p style="color:black">Some text that describes me lorem ipsum ipsum lorem.</p>
                <p style="color:black">mdpollobhasan@gmail.com</p>
                <p><a target="_blank" href="https://www.facebook.com/mdmosharof.hossan.9849"  class="btn btn-primary w-100" > Contact With Facebook </a></p>
              </div>
            </div>
          </div>

          <div class="column">
            <div class="card">
              <img src="{{asset('teamimages/sofikul.jpg')}}" alt="John" style="width:100%" height="300px">
              <div class="container">
                <h2> Md Sofikul islam </h2>
                <p class="title"> Web Designer and Developer</p>
                <p style="color:black">Some text that describes me lorem ipsum ipsum lorem.</p>
                <p style="color:black">mdsofikulislamsobhan@gmail.com</p>
                <p><a target="_blank" href="https://www.facebook.com/mdsofikulislam.sobhan"  class="btn btn-primary w-100" > Contact With Facebook </a></p>
              </div>
            </div>
          </div>




        </div>
      </div>
</html>

@endsection
