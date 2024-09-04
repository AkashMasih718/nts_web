@extends('frontend.layouts.main')

@section('main-container')

<div class="main-content">

    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg1.jpg">
        <div class="container pt-100 pb-50">

            <div class="section-content pt-100">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title text-white">Running Project Details</h3>
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
                        <a class="image-popup-vertical-fit" title="Title Here 1" href="images/horses/r_1.jpg"><img src="images/horses/r_1.jpg" alt></a>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 mb-40">
                        <h3>Monthly Ration </h3>
                        <ul class="list theme-colored">
                            <li><strong>Location</strong> : Karachi Pakistan</li>
                            <br>
                            <li><strong>Nusrat Trust For Special Children</strong></li>
                            <br>
                            <li><strong class="text-theme-colored"> Budget : 100000/-</strong></li>
                        </ul>
                        <p>Nusrat Trust distributes monthly rations to disabled persons who cannot support their own homes every month.</p>
                        <a style="background: #050387; color:white" class="btn btn btn-flat   p-5 font-11 pl-10 pr-10" href="#promoModal1" data-lightbox="inline">Donate Now</a>
                         {{-- For Donation Pop up --}}
                         <div id="promoModal1" class="modal-promo-box mfp-hide" data-bg-img="images/bg/bg12.jpg">
                            <div class="col-md-12">
                             <h2 style="background-color: rgb(255, 255, 255); text-align: center; color:rgb(0, 0, 0); margin-top: -60px;">Online Bank Account Details</h2>
                             <div class="row">
                                 <div  style="background-color: rgb(11, 3, 121); color:white;" class="col-md-6 m-0">
                                     <h2 style="text-align: center;background-color: rgb(255, 255, 255); color:rgb(0, 0, 0)">BML BANK</h2>
                                     <h4>A/C Title: Nusrat Trust For Special Child </h4>
                                     <h4>A/C No: 01025020311714103322</h4>
                                     <h4>IBAN No: PK96SUMB0250027140103322</h4>
                                     <h4>Bank Mukramah Ltd DHA Phase IV Karachi</h4>

                                 </div>
                                 <div style="background-color: rgb(11, 3, 121); color:white;" class="col-md-6">
                                     <h2 style="text-align: center;background-color: rgb(255, 255, 255); color:rgb(0, 0, 0)">UBL BANK</h2>
                                     <h4>A/C Title: Nusrat Trust For Special Child </h4>
                                     <h4>A/C No: 0112-0891-0101241-7</h4>
                                     <h4>IBAN No: PK23UNIL0112089101012417</h4>
                                     <h4>UBL Ameen M-A Jinnah Road Branch, Karachi</h4>
                                 </div>
                             </div>
                            </div>
                            <div class="col-md-12">
                             <h3 style="background-color: white; color:black; text-align: center;">Jazz Cash/EasyPaisa/Konnect: 0300 33310 11</h3>
                            </div>
                             <a href="#" class="button text-white"
                                 onClick="$.magnificPopup.close(); return false;">Don't Show me Again</a>
                         </div>

                         <div class="modal-on-load" data-target="#promoModal1"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="line-bottom">Description</h3>

                        <p>People who have three to four disabled children in their house and cannot go out of the house for their livelihood stay inside the house to serve these children, Nusrat Trust provides food and ration in their houses.
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
                            <a class="image-popup-vertical-fit" title="Title Here 1" href="images/horses/r_2.jpg"><img src="images/horses/r_2.jpg" alt></a>
                        </div>


                        <div class="gallery-item">
                            <a class="image-popup-vertical-fit" title="Title Here 1" href="images/horses/r_3.jpg"><img src="images/horses/r_3.jpg" alt></a>
                        </div>


                        <div class="gallery-item">
                            <a class="image-popup-vertical-fit" title="Title Here 1" href="images/horses/r_4.jpg"><img src="images/horses/r_4.jpg" alt></a>
                        </div>


                        <div class="gallery-item">
                            <a class="image-popup-vertical-fit" title="Title Here 1" href="images/horses/r_5.jpg"><img src="images/horses/r_5.jpg" alt></a>
                        </div>


                        <div class="gallery-item">
                            <a class="image-popup-vertical-fit" title="Title Here 1" href="images/horses/r_6.jpg"><img src="images/horses/r_6.jpg" alt></a>
                        </div>


                        <div class="gallery-item">
                            <a class="image-popup-vertical-fit" title="Title Here 1" href="images/horses/r_7.jpg"><img src="images/horses/r_7.jpg" alt></a>
                        </div>


                        <div class="gallery-item">
                            <a class="image-popup-vertical-fit" title="Title Here 1" href="images/horses/r_8.jpg"><img src="images/horses/r_8.jpg" alt></a>
                        </div>


                        <div class="gallery-item">
                            <a class="image-popup-vertical-fit" title="Title Here 1" href="images/horses/r_9.jpg"><img src="images/horses/r_9.jpg" alt></a>
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
                <iframe width="560" height="315" src="https://www.youtube.com/embed/EpgON566qhw?si=I9xqyy2dgiNUqOvi" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

</div>
@endsection
