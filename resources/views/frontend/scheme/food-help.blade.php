@extends('frontend.layouts.main')

@section('main-container')

<div class="main-content">

    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg1.jpg">
        <div class="container pt-100 pb-50">

            <div class="section-content pt-100">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title text-white">Food Help Scheme Details</h3>
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
                        <a class="image-popup-vertical-fit" title="Title Here 1" href="images/horses/1.jpg"><img src="images/horses/1.jpg" alt></a>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 mb-40">
                        <h3>Food Help</h3>
                        <ul class="list theme-colored">

                            <br>
                            <li><strong>Nusrat Trust For Special Children</strong></li>
                            <br>
                            <li><strong class="text-theme-colored"> Budget : 100000/-</strong></li>
                        </ul>
                        <p>Nusrat Trust provides auto rickshaw for employment to disabled persons who support
                             their children through employment and do not know any skill.</p>
                        <a style="background: #050387; color:white" class="btn btn btn-flat   p-5 font-11 pl-10 pr-10 ajaxload-popup" href="ajax-load/donation-form.html">Donate Now</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="line-bottom">Description</h3>

                        <p>Nusrat Trust for Special Children, which is working day and
                             night for the welfare of disabled children, On behalf of Nusrat Trust for Special Children,
                              disabled persons who have become disabled due to an accident,
                               Nusrat Trust provides auto-rickshaws for their employment and alters the vehicle
                                according to the disabled persons and hands it over to them.
                             </p>

                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-line-bottom">
                        <h3 class="heading-title">Running Project Gallery</h3>
                    </div>

                    <div class="gallery-isotope grid-4 gutter-small clearfix" data-lightbox="gallery">

                        <div class="gallery-item">
                            <a class="image-popup-vertical-fit" title="Title Here 1" href="images/horses/g1.jpg"><img src="images/horses/g1.jpg" alt></a>
                        </div>


                        <div class="gallery-item">
                            <a class="image-popup-vertical-fit" title="Title Here 1" href="images/horses/g2.jpg"><img src="images/horses/g2.jpg" alt></a>
                        </div>


                        <div class="gallery-item">
                            <a class="image-popup-vertical-fit" title="Title Here 1" href="images/horses/g3.jpg"><img src="images/horses/g3.jpg" alt></a>
                        </div>


                        <div class="gallery-item">
                            <a class="image-popup-vertical-fit" title="Title Here 1" href="images/horses/g4.jpg"><img src="images/horses/g4.jpg" alt></a>
                        </div>


                        <div class="gallery-item">
                            <a class="image-popup-vertical-fit" title="Title Here 1" href="images/horses/g5.jpg"><img src="images/horses/g5.jpg" alt></a>
                        </div>


                        <div class="gallery-item">
                            <a class="image-popup-vertical-fit" title="Title Here 1" href="images/horses/g6.jpg"><img src="images/horses/g6.jpg" alt></a>
                        </div>


                        <div class="gallery-item">
                            <a class="image-popup-vertical-fit" title="Title Here 1" href="images/horses/g7.jpg"><img src="images/horses/g7.jpg" alt></a>
                        </div>


                        <div class="gallery-item">
                            <a class="image-popup-vertical-fit" title="Title Here 1" href="images/horses/g8.jpg"><img src="images/horses/g8.jpg" alt></a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="divider layer-overlay overlay-white-8" data-bg-img="images/bg/bg1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="text-black-333 font-24 mt-0">
                Hundreds of such families are waiting for your help, come support Nusrat Trust in this charity. Nusrat Trust is working day and night to support people by going door to door.
                </p>
                <a class="btn btn-theme-colored btn-circled btn-lg mt-20 mb-sm-30" href="actual-link.html">Watch More</a>
            </div>
            <div class="col-md-6">
                <div class="fluid-video-wrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/2im8nIA2XqI?si=TmB_q7PtJURhXWDu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

</div>
@endsection
