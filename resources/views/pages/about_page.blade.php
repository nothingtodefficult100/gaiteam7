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


    <div class="about-section container">
  <h1>Web Development project Team7</h1>
  <p>Some text about who we are and what we do.</p>
  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus ex quo, repellendus nobis vel reprehenderit laborum perspiciatis optio nisi nesciunt dolorum maxime dolorem sit praesentium. Iusto quos quas obcaecati doloribus? Iste reiciendis dolorum illo voluptate, ea dolore incidunt? Vero officiis id nulla reiciendis atque. Nam et odio doloremque deleniti laborum repellat natus id animi cum, quod officia pariatur dignissimos dolor ad error perspiciatis? Quae, similique minus tenetur quidem sunt aut. Facere consequatur fugit eaque doloribus cum odit tempore rem odio accusantium, id quam corrupti alias vero itaque recusandae laudantium dolore sint asperiores qui nihil vitae ipsam! Blanditiis atque deleniti iure nobis facere delectus maxime accusantium hic, fugiat debitis a tenetur voluptatem sint! Ullam voluptatum quasi, eos esse nostrum eius ad dicta optio sed fugit a voluptates culpa est? Possimus iste consectetur culpa provident beatae velit mollitia tempora facilis alias non voluptates ratione magnam quaerat reprehenderit blanditiis at, dolor unde! Qui sit nisi vitae perferendis quo, illo culpa mollitia, placeat, at rem assumenda ducimus laudantium quisquam! Esse quasi laboriosam dolores rerum ipsam cumque dolore modi debitis consequatur deserunt quae eveniet omnis enim in reprehenderit voluptatibus sint, error nobis ad molestiae amet atque? Hic molestiae necessitatibus perspiciatis at dolore labore quam vero, voluptates voluptatibus ex et veritatis repellat impedit, iusto reiciendis quisquam sit commodi nisi provident sed id! Sed deleniti deserunt non eius voluptas blanditiis, molestiae accusamus explicabo itaque recusandae ipsam officia nostrum quisquam repudiandae sint facere voluptatibus quas quasi veritatis? Maiores, ullam facere distinctio cum repudiandae assumenda culpa odit ducimus! Hic iusto deserunt rerum dolore est, molestias et delectus id nulla numquam. Iste soluta quam provident neque nostrum maiores libero nobis possimus in quibusdam, vel vitae numquam, velit a laborum qui iure voluptates amet illo esse ullam minus cupiditate minima mollitia. Repudiandae odit quaerat quae, hic provident ratione inventore beatae nam et numquam voluptatibus laudantium in? Facere amet eos quam facilis, earum nesciunt sint unde, cum maiores beatae quis. Cupiditate natus corporis nemo numquam voluptates accusamus eos recusandae. Expedita quaerat dolorum et dolore itaque incidunt excepturi, earum, sapiente, sunt eos recusandae. Voluptate et doloremque molestias sapiente provident aliquid tempora voluptatibus impedit. Quas eos ratione beatae sit velit quos qui, eum eligendi labore expedita tempore culpa? Odio tenetur consequuntur iusto ipsam, iure incidunt rerum veritatis. Porro nihil eius, consequatur labore nulla corporis architecto, in sit maxime temporibus quia amet laboriosam dignissimos obcaecati ea blanditiis, nobis nisi molestias magni quas quae? Quos, tenetur.</p>
</div>
</body>
</html>

@endsection
