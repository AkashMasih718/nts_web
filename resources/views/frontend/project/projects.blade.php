@extends('frontend.layouts.main')

@section('main-container')

<div class="main-content">

    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg1.jpg">
        <div class="container pt-100 pb-50">

            <div class="section-content pt-100">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title text-white">Our Running Projects</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 mb-40">
                        <a class="image-popup-vertical-fit" title="Title Here 1" href="images/horses/12.jpg"><img src="images/horses/12.jpg" alt></a>
                        <h3>Solar Project</h3>
                        <ul class="list theme-colored">
                            <li><strong>Location</strong> : Pakistan</li>

                            <li><strong class="text-theme-colored"> Budget : Rs.100000</strong></li>
                        </ul>
                        <p>In this project of Nusrat Trust for Special Children, one battery 
                            and solar plate, fan, two bulbs, wires and other equipment.</p>
                        <a href="{{url('soler_project')}}" class="btn btn-sm btn-theme-colored">Read more</a>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 mb-40">
                        <a class="image-popup-vertical-fit" title="Title Here 1" href="images/horses/2.jpg"><img src="images/horses/2.jpg" alt></a>
                        <h3>Rozgar For Special Persons</h3>
                        <ul class="list theme-colored">
                            <li><strong>Location</strong> : Pakistan</li>

                            <li><strong class="text-theme-colored"> Budget :Rs.180000/-</strong></li>
                        </ul>
                        <p>Nusrat Trust provides employment for disabled persons who have been present due to an accident or an accident.</p>
                        <a href="{{url('rozgar_project')}}" class="btn btn-sm btn-theme-colored">Read more</a>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 mb-40">
                        <a class="image-popup-vertical-fit" title="Title Here 1" href="images/horses/3.jpg"><img src="images/horses/3.jpg" alt></a>
                        <h3>Shops For Special Persons</h3>
                        <ul class="list theme-colored">
                            <li><strong>Location</strong> : India / South Asia</li>

                            <li><strong class="text-theme-colored"> Budget : $2300</strong></li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum quos quae, provident aspernatur et voluptatibus saepe recusandae accusamus sit non, numquam pariatur odit veniam aut.</p>
                        <a href="{{url('shops_project')}}" class="btn btn-sm btn-theme-colored">Read more</a>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 mb-40">
                        <a class="image-popup-vertical-fit" title="Title Here 1" href="images/horses/4.jpg"><img src="images/horses/4.jpg" alt></a>
                        <h3>Monthly Ration Project</h3>
                        <ul class="list theme-colored">
                            <li><strong>Location</strong> : India / South Asia</li>

                            <li><strong class="text-theme-colored"> Budget : $3000</strong></li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum quos quae, provident aspernatur et voluptatibus saepe recusandae accusamus sit non, numquam pariatur odit veniam aut.</p>
                        <a href="{{url('ration_project')}}" class="btn btn-sm btn-theme-colored">Read more</a>
                    </div>
                  
                </div>
            </div>
        </div>
    </section>
</div>
@endsection