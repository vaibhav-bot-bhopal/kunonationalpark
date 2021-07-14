<!--Footer Section Start-->
<footer class="main_footer__block">
    <div class="pb-0 pt-60 footer-link">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="footer_box__block text-justify">
                        <h4>{{ __('footer.footer_title') }}</h4>
                        @if( session('locale') == 'en' )
                        <p>
                        Kuno National Park, Is Like An Ornament In The Vindhyan Hills Of Central India. It Is A Rare Jungle, An Oasis Nestled Between An Otherwise Rocky And Unforgiving Landscape.
                        </p>
                        <p>
                        The Stories And The Legends From The Land Of Kuno, Are As Old As Time Itself And The Denizens Of This Land Can Narrate Endless Tales Of Sacrifice And Longing.
                        </p>
                        @endif
                        @if( session('locale') == 'hi' )
                        <p>
                        कुनो राष्ट्रीय उद्यान, मध्य भारत की विंध्यांचल पर्वत श्रृंखला को शुशोभित करता है । यह एक दुर्लभ किस्म का जंगल है जिसे एक चट्टानों से भरे भू दृश्य के बीच स्तिथ जंगली जानवरों और पेड़ पौधों का स्वर्ग कहना गलत नहीं होगा ।
                        </p>
                        <p>
                        इस जगह से जुडी कहानियां और किवदंतियां समय जितनी ही पुरानी लगती हैं और यहाँ के वन्य जीव और पेड़-पौधे आपको अनगिनत बेमिसाल किस्से सुनते हुए प्रतीत होते हैं ।
                        </p>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer_box__block">
                        <h4>{{ __('footer.footer_imp_link') }}</h4>
                        @if( session('locale') == 'en' )
                        <ul class="sub-nav">
                            <li>
                                <a href="{{ url('tourist/location') }}"> Location</a>
                            </li>
                            <li>
                                <a href="{{ url('tourist/how-to-reach') }}"> how to reach </a>
                            </li>
                            <li>
                                <a href="{{ url('tourist/points-of-interests') }}"> Point of Interest </a>
                            </li>
                            <li>
                                <a href="{{ url('tourist/stay') }}"> Stay </a>
                            </li>
                            <li>
                                <a href="{{ url('tourist/do-and-dont') }}"> Do(s) and Don't(s) </a>
                            </li>
                        </ul>
                        @endif
                        @if( session('locale') == 'hi' )
                        <ul class="sub-nav">
                            <li>
                                <a href="{{ url('tourist/location') }}"> स्थिति </a>
                            </li>
                            <li>
                                <a href="{{ url('tourist/how-to-reach') }}"> कैसे पहुंचे </a>
                            </li>
                            <li>
                                <a href="{{ url('tourist/points-of-interests') }}"> रूचिकर स्थान  </a>
                            </li>
                            <li>
                                <a href="{{ url('tourist/stay') }}"> रहना </a>
                            </li>
                            <li>
                                <a href="{{ url('tourist/do-and-dont') }}"> क्या करें और क्या नहीं </a>
                            </li>
                        </ul>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer_box__block">
                        <h4>{{ __('footer.footer_useful_link') }}</h4>
                        @if( session('locale') == 'en' )
                            <ul class="sub-nav">
                                <li>
                                    <a href="{{ url('https://www.mpforest.gov.in/') }}"> M.P. Forest Department </a>
                                </li>
                                <li>
                                    <a href="{{ url('http://www.mptigerfoundation.org/') }}">  M.P. Tiger Foundation </a>
                                </li>
                                <li>
                                    <a href="{{ url('https://ntca.gov.in/') }}"> N.T.C.A. </a>
                                </li>
                                <li>
                                    <a href="{{ url('https://wii.gov.in/') }}"> W.I.I. </a>
                                </li>
                                <li>
                                    <a href="{{ url('https://mp.mygov.in/') }}"> MY M.P. </a>
                                </li>
                            </ul>
                        @endif
                        @if( session('locale') == 'hi' )
                            <ul class="sub-nav">
                                <li>
                                    <a href="{{ url('https://www.mpforest.gov.in/') }}"> म.प्र. वन विभाग </a>
                                </li>
                                <li>
                                    <a href="{{ url('http://www.mptigerfoundation.org/') }}">  एम.पी. टाइगर फाउंडेशन </a>
                                </li>
                                <li>
                                    <a href="{{ url('https://ntca.gov.in/') }}"> एन.टी.सी.ए. </a>
                                </li>
                                <li>
                                    <a href="{{ url('https://wii.gov.in/') }}"> डब्ल्यू.आई.आई. </a>
                                </li>
                                <li>
                                    <a href="{{ url('https://mp.mygov.in/') }}"> मेरा मध्य प्रदेश </a>
                                </li>
                            </ul>
                        @endif

                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer_box__block address-box">
                        <h4>{{ __('footer.footer_contact_info') }}</h4>
                        @if( session('locale') == 'en' )
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>
                                    Call Us :- 07530 – 220004 , <br> 9424791938, 8871187201
                                </p>
                            </li>

                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <p>
                                    <a href="mailto:info@example.com">dfokunowls@mp.gov.in</a>
                                </p>
                            </li>

                            <li>
                                <i class="fa fa-map-marker"></i>
                                <p>
                                Office of DFO Kuno Wildlife Division Sheopur MP - 476337
                                </p>
                            </li>
                        </ul>
                        @endif
                        @if( session('locale') == 'hi' )
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>
                                फोन नंबर :- 07530 – 220004 , <br> 9424791938, 8871187201
                                </p>
                            </li>

                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <p>
                                    <a href="mailto:info@example.com">dfokunowls@mp.gov.in</a>
                                </p>
                            </li>

                            <li>
                                <i class="fa fa-map-marker"></i>
                                <p>
                                कार्यालय कूनो वन्यजीव प्रभाग श्योपुर, मध्य प्रदेश - 476337
                                </p>
                            </li>
                        </ul>
                        @endif

                    </div>
                </div>
            </div>

            <div class="copyriight_block ptb-20 mt-20">
                <div class="row">
                    <div class="col-md-12 col-lg-12 text-center">
                        <p class="mb-0">
                            <a href="" class="text-white"> <strong>  KUNO NATIONAL PARK - Official Website </strong> </a>	©&nbsp;All Rights Reserved -
                            <span style="font-size: 14px;">Field Director, Kuno National Park</span>
                        </p>
                        <p class="mb-0">
                        Developed by - <a href="https://blueoceantech.in/" class="text-white"> Blue Ocean Tech Solutions Pvt. Ltd. </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer Section End-->
