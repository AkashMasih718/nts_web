@extends('frontend.layouts.main')

@section('main-container')
    <div class="main-content">

        <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg1.jpg">
            <div class="container pt-100 pb-50">

                <div class="section-content pt-100">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title text-white">Our Schemes For Special Children</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 mb-40">
                            <a class="image-popup-vertical-fit" title="Title Here 1" href="images/horses/food-1.jpg"><img
                                    src="images/horses/food-1.jpg" alt></a>
                            <h3>Food Help Scheme</h3>
                            <ul class="list theme-colored">


                                <li><strong class="text-theme-colored"> Budget : Rs.1000</strong></li>
                            </ul>
                            <p>Nusrat Trust</span>
                            <p class="mt-5">Under Nusrat Trust's food help scheme, disabled children who cannot move
                                from their place, their parents take a Rs.1000 for them.</p>
                            <a href="#promoModal1" data-lightbox="inline" class="btn btn-sm btn-theme-colored">Read more</a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 mb-40">
                            <a class="image-popup-vertical-fit" title="Title Here 1" href="images/horses/wheel-1.jpg"><img
                                    src="images/horses/wheel-1.jpg" alt></a>
                            <h3>Wheelchair Scheme</h3>
                            <ul class="list theme-colored">


                                <li><strong class="text-theme-colored"> Budget :Rs.14000/-</strong></li>
                            </ul>
                            <p>NTSC caters to the mobility needs of growing-up disabled children by providing free
                                wheelchairs along with a stipend throughout the year. It holds related events where notables
                                are invited to participate to utilize their presence for awareness and support of these
                                children's rights and needs from the community.</p>

                            <a href="#promoModal1" data-lightbox="inline" class="btn btn-sm btn-theme-colored">Read more</a>

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
                        <div class="col-xs-12 col-sm-12 col-md-6 mb-40">
                            <a class="image-popup-vertical-fit" title="Title Here 1" href="images/horses/voc-1.jpg"><img
                                    src="images/horses/voc-1.jpg" alt></a>
                            <h3>Vocational Training Center</h3>
                            <ul class="list theme-colored">

                                <li><strong class="text-theme-colored"> Budget : 16000</strong></li>
                            </ul>
                            <p>This Training Center will especially train those special children who are capable of learning
                                vocational skills in order to make them self- sufficient to earn their livelihood. This is
                                one of the more important aims of Nusrat Trust. Already, a pilot project with requisite
                                building structure is functioning at the Nusrat Complexwhere many special children are
                                benefiting from mobile phone repairing skills.</p>
                            <a href="#promoModal1" data-lightbox="inline" class="btn btn-sm btn-theme-colored">Read more</a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 mb-40">
                            <a class="image-popup-vertical-fit" title="Title Here 1" href="images/horses/mob-1.jpg"><img
                                    src="images/horses/mob-1.jpg" alt></a>
                            <h3>Employment Scheme</h3>
                            <ul class="list theme-colored">


                                <li><strong class="text-theme-colored"> Budget : 180000</strong></li>
                            </ul>
                            <p>Those special people who want to support their family by hard work, Nusrat Trust makes such
                                speciall people independent by providing suitable employment.</p>
                            <a href="#promoModal1" data-lightbox="inline" class="btn btn-sm btn-theme-colored">Read more</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 mb-40">
                            <a class="image-popup-vertical-fit" title="Title Here 1" href="images/horses/mn-1.jpg"><img
                                    src="images/horses/mn-1.jpg" alt></a>
                            <h3>Ramadan Ration Package</h3>
                            <ul class="list theme-colored">


                                <li><strong class="text-theme-colored"> Budget : Rs.8000</strong></li>
                            </ul>
                            <p>Nusrat Trust</span>
                            <p class="mt-5">Ramadan Ration Package Centers are established in various districts of Sindh
                                and Karachi to register those special people who are capable of fasting, and hundreds of
                                such special people are provided complete ration for the month of Ramadan.</p>
                            <a href="#promoModal1" data-lightbox="inline" class="btn btn-sm btn-theme-colored">Read more</a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 mb-40">
                            <a class="image-popup-vertical-fit" title="Title Here 1" href="images/horses/seh-1.jpg"><img
                                    src="images/horses/seh-1.jpg" alt></a>
                            <h3>Ramadan sehar and iftar package</h3>
                            <ul class="list theme-colored">


                                <li><strong class="text-theme-colored"> Budget :Rs.8000/-</strong></li>
                            </ul>
                            <p>8000 rupees per person is given in cash for Suhr and Iftar to unemployed special persons.</p>
                            <a href="#promoModal1" data-lightbox="inline" class="btn btn-sm btn-theme-colored">Read more</a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 mb-40">
                            <a class="image-popup-vertical-fit" title="Title Here 1" href="images/horses/gft-1.jpg"><img
                                    src="images/horses/gft-1.jpg" alt></a>
                            <h3>Gifts on the Two Eids</h3>
                            <ul class="list theme-colored">

                                <li><strong class="text-theme-colored"> Budget : 2500</strong></li>
                            </ul>
                            <p>On the auspicious occasion of Eid, Nusrat Trust provides Rs 1,000 Eid gifts, suits and Eid
                                morning break- fast to special children of poor families registered with the instit- ution.
                            </p>
                            <a href="#promoModal1" data-lightbox="inline" class="btn btn-sm btn-theme-colored">Read more</a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 mb-40">
                            <a class="image-popup-vertical-fit" title="Title Here 1" href="images/horses/ra-1.jpg"><img
                                    src="images/horses/ra-1.jpg" alt></a>
                            <h3>Monthly Ration Scheme</h3>
                            <ul class="list theme-colored">


                                <li><strong class="text-theme-colored"> Budget : 5000</strong></li>
                            </ul>
                            <p>Nusrat Trust provides monthly ration to special persons who are unable to earn due to
                                disability and whose children have not yet reached the earning age considering their family
                                members.</p>
                            <a href="#promoModal1" data-lightbox="inline" class="btn btn-sm btn-theme-colored">Read more</a>
                        </div>
                    </div>


                </div>
            </div>
        </section>
    </div>
@endsection
