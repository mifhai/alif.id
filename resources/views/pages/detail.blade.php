@extends('layouts.master')

@section('content')
<div class="rbt-overlay-page-wrapper">
    <div class="breadcrumb-image-container breadcrumb-style-max-width">
        {{-- <div class="breadcrumb-image-wrapper bg-gradient-6">
        </div> --}}
        <div class="breadcrumb-content-top text-center">
            <h1 class="title mt--15">Doa Indah: Wirid Syekh Abu Bakar bin Salim Manjur Sekali</h1>
            <ul class="meta-list justify-content-center mb--10">
                <li class="list-item">
                    <div class="author-info w-500">
                        <a href="#">Redaksi Alif</a>
                    </div>

                </li>
                <li class="p-0">
                    <span>•</span>
                </li>
                <li>
                    <span class="category-name">Doa Sufi</span>
                </li>
            </ul>
            <span class="date-detail">Jum'at, 08 Maret 2024</span>
        </div>
    </div>

    <div class="rbt-blog-details-area rbt-section-gapBottom breadcrumb-style-max-width">
        <div class="post-thumbnail mb--30 position-relative wp-block-image alignwide d-block d-sm-none">
            <figure>
                <img src="{{asset('assets/photos/alif.jpg')}}" alt="Blog Images">
                <figcaption>Illustrasi Dzat Keesaan Allah</figcaption>
            </figure>
        </div>
        <div class="blog-content-wrapper rbt-article-content-wrapper">
            <div class="content">
                <div class="post-thumbnail mb--30 position-relative wp-block-image alignwide d-none d-sm-block">
                    <figure>
                        <img src="{{asset('assets/photos/alif.jpg')}}" alt="Blog Images">
                        <figcaption>Illustrasi Dzat Keesaan Allah</figcaption>
                    </figure>
                </div>

                <p>Doa ini susunan katanya sangat puitis. Berisi pujian-pujian yang indah kepada Allah Swt. Berikut lafalnya:</p>

                <h3 style="text-align: right;"><span style="line-height:2;">اَللّهُمَّ يَا عَظِيْمَ السُّلْطَانِ يَاقَدِيْمَ اْلاِحْسَانِ يَادَإِمَ النِّعَمِ يَاكَـثِيْرَ الْجُوْدِ يَاوَاسِعَ الْعَطَاءِ يَاخَفِيَّ اللُّطْفِ، يَاجَمِيْلَ الصُّنْعِ يَِاحَلِيْمًالاَ يَعْجَلُ. صَلِّ يَا رَبِّ عَلى سَيِّدِنَا مُحَمَّدٍ وَالِه وَسَلِّمْ وَارْضَ عَنِ الصَّحَابَةِ اَجْمَعِيْنَ. اَللّهُمَّ لَكَ الْحَمْدُ شُكْرًا وَلَكَ الْمَنُّ فَضْلاً وَاَنْتَ رَبُّنَا حَقاًّ وَنَحْنُ عَبِيْدُكَ رِقاًّ وَاَنْتَ لَمْ تَزَ لْ لِذَا لِكَ اَهْلا.ً يََا مُيَسِّـرَ كُلِّ عَسِـيْرٍ وَيَاجَابِرَ كـُلِّ كَسِيْـرٍ وَ يَا صَاحِبَ كُلِّ فَرِيْدٍ وَيَامُغْنِيَ كُلِّ فَقِيْرٍ وَيَامُقَوِّيَ كُلِّ ضَعِيْفٍ وَيَامَأْمَنَ كُلِّ مَخِيْفٍ، يَسِّرْ عَلَيْنَاكُلَّ عَسِيْرٍ، فَتَيْسِيْرُالْعَسِيْرِعَلَيْكَ يَسِيْرٌ.اَللّهُمَّ يَامَنْ لاَيَحْتَاجُ اِلَى الْبَيَـانِ وَالتَّفْسِيْرِ حَاجَاتُنَاكَثِيْرٌ، وَاَنْتَ عَالِمٌ بِهَاوَخَبِيْرٌ، اَللّهُمَّ اِنِّيْ اَخَافُ مِنْكَ وَاَخَافُ مِمَّنْ يَخَافُ مِنْكَ، وَاَخَافُ مِمَّنْ لاَ يَخَافُ مِنْكَ. اَللّهُمَّ بِحَقِّ مَنْ يَخَافُ مِنْكَ نَجِّنَامِمَّنْ لاَ يَخَافُ مِنْكَ. اَللّهُمَّ بِحَقِّ سَيِّدِنَامُحَمَّدٍ اُحْرُ سْنَابِعَيْنِكَ الَّتِى لاَ تَنَامُ، وَاكْـنُفْنَا بِكَنَفِكَ الَّذِيْ لاَيُرَامُ وَارْحَمْنَا بِقُدْرَتِكَ عَلَيْنَا فَلاَ نَهْلِكْ وَاَنْتَ ثِـقـَتُـنَا وَرَجَاؤُنَا. وَصَلىَّ اللهُ عَلىَ سَيِّدِنَامُحَمَّدٍ وَالِـه وَصَحْبِه وَسَلـَّمَ، وَالـْحَمْدُلِلّهِ رَبِّ الـْعَالـَمِيْنَ.</span></h3>

                <h3 style="text-align: right;"><span style="line-height:2;">عَدَدَخَلـْقِه َورِضَى نَفْسِه وَزِنَةَعَرْشِه وَمِدَادَكَلِمَاتِه</span></h3>

                <h3 style="text-align: right;"><span style="line-height:2;">اَللّهُمَّ اِنَّانَسْأَ لُكَ زِيَادَةً فِى الدِّ يْنِ، وَبَرَكَةً فِى الـْعُمُرِ وَصِحَّةً فِى الـْجَسَدِ وَسِعَةً فِى الرِّ زْقِ وَتَوْبَةً قَـبْلَ الـْمَوْتِ وَشَهَادَةًعِنْدَالـْمَوْتِ. وَمَغْـفِرَةً بَعْدَالـْمَوْتِ وَعَفْوًاعِنْدَ الـْحِسَابِ وَاَمَانًامِنَ الـْعَذَابِ وَنَصِيـْبًامِنَ الـْجَنَّةِ وَارْزُقْـنَا النـَّظَرَاِلى وَجْهِكَ الـْكَرِيْمِ. وَصَلَّى اللهُ عَلىََ سَـيِّدِنَامُحَمَّدٍ وَالِه وَصَحْبِهِ وَسَلَّمٌ (سُبْحَانَ رَبِّكَ رَبِّ الـْعِزَّةِ عَمَّايَصِفُوْنَ وَسَلمٌ عَلَى الـْمُرْسَلِيْنَ. وَالـْحَدْلِلّهِ رَبِّ الـْعَالَمِيْنَ.عَدَدَخَلـْقِه وَرِضَى نَفْسِه وَزِنَةَعَرْشِه وَمِدَادَكَلِمَاتِه</span></h3>

                <p></p>

                <p>Bismillahirrahmanirrahim,</p>

                <p>Allahumma yaa &lsquo;adziimassulthoon, yaa qodimal ihsaani yaa daaimanni&rsquo;ami yaa katsiroljuud yaa waasi&rsquo;al &lsquo;athoo&rsquo; yaa khofiyyalluthfi yaa jamiilashshun&rsquo;i yaa haliimaan laa ya&rsquo;jal sholli yaa rabbi &lsquo;ala sayyidinaa Muhammadin wa aalihi wasallim wardho &lsquo;anish shohaabati ajma&rsquo;iin. Allahumma lakalhamdu syukroo walakal mannu fadhlaan waanta robbunaa haqqoon wa nahnu &lsquo;abriduka riqqoon wa anta lam tazal lidzalika ahlaan yaa muyassiro kulli fariidin wa yaa mughniya kulli faqiirin wa yaa muqowwiya kulli dho&rsquo;iifin wayaa ma&rsquo;mana kulli mukhiifin yassir &lsquo;alainaa kulla &lsquo;asiirin fataisiirul &lsquo;asiiri &lsquo;alika yasir. Allahumma yaa man laa yahtaaju ilal bayaani wattfsiir haajaatunaa katsirun waanta &lsquo;aalimun bihaa wakhobiir.</p>


                <blockquote class="wp-block-quote">
                    <cite>Baca Juga</cite>
                    <a href="#"><p>Risalah fi Kaifiyyah Shalatit Tarawih Karangan Nyai Hj. Siti Zubaidah Hasbiyallah Klender (1967)</p></a>
                </blockquote>


                <p>Maka untuk menyikapi permasalahan ini, Mbah Fadhol menjawab bahwa penggunaan diksi &ldquo;bid&rsquo;ah&rdquo; dalam hal demikian ada dua penggunaan. Pertama, penggunaan kata &ldquo;setiap&rdquo; atau &ldquo;<em>kullu</em>&rdquo; yang dimaksud dalam hadits teresebut tidak semuanya disandarkan kepada suatu hal yang buruk. Selama bid&rsquo;ah yang dimaksud itu tidak menyalahi perintah agama dan tujuannya untuk mengagungkan Allah dan Rasul&ndash;Nya, maka bid&rsquo;ah tersebut tidak termasuk perbuatan yang sesat atau biasa disebut dengan bid&rsquo;ah&nbsp;<em>hasanah</em>. Kedua, apabila diksi &ldquo;bid&rsquo;ah&rdquo; digunakan setelah wafatnya Nabi&nbsp;<em>shalallahu alaihi wa sallam</em>&nbsp;untuk melakukan suatu perbuatan baru yang menyalahi kitabullah, sunnatullah, dan kaidah-kaidah syari&rsquo;at, maka bid&rsquo;ah yang semacam ini termasuk dalam kategori bid&rsquo;ah&nbsp;<em>dholalah</em>&nbsp;atau bid&rsquo;ah yang mengandung unsur menyesatkan.</p>

                <p>Mbah Fadhol pun dalam kitab ini kemudian menyimpulkan, bahwa diksi &ldquo;bid&rsquo;ah&rdquo; yang termaktub dalam hadits di atas tidaklah bersifat umum atau global, namun bersifat &ldquo;<em>Amm Khos</em>&nbsp;(umum terkhususkan)&rdquo;.&nbsp;<em>Waba&rsquo;du</em>, sebagai penutup kitab yang rampung ditulis pada tanggal 24 Ramadhan 1386 Hijriah, Mbah Fadhol menyitir hadits Rasulullah yang berbunyi, &ldquo;Ikutilah sunnahku dan sunnah para khulafa&rsquo;ur rasyidin setelahku yang mereka telah mendapatkan petunjuk&rdquo;.&nbsp;<em>Wallahu &lsquo;Alam Bisshowab</em>.</p>

                <!-- BLog Tag Clound  -->
                <div class="tagcloud">
                    <a href="#">Santri</a>
                    <a href="#">Kitab Kuning</a>
                    <a href="#">Pesantren</a>
                    <a href="#">Ngaji</a>
                </div>

                <!-- Social Share Block  -->
                <div class="social-share-block">
                    <div class="post-like">
                        <a href="#"><i class="feather feather-download"></i><span>Download</span></a>
                    </div>
                    <ul class="social-icon social-default transparent-with-border">
                        <li><a href="https://www.facebook.com/">
                                <i class="feather-facebook"></i>
                            </a>
                        </li>
                        <li><a href="https://www.twitter.com">
                                <i class="feather-twitter"></i>
                            </a>
                        </li>
                        <li><a href="https://www.instagram.com/">
                                <i class="feather-message-circle"></i>
                            </a>
                        </li>
                    </ul>
                </div>


                <!-- Blog Author  -->
                <div class="about-author">
                    <div class="media">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="{{asset('assets/photos/author.jpg')}}" alt="Author Images">
                            </a>
                        </div>
                        <div class="media-body">
                            <div class="author-info">
                                <h5 class="title">
                                    <a class="hover-flip-item-wrapper" href="#">
                                        Akmal Khafifudin
                                    </a>
                                </h5>
                                {{-- <span class="b3 subtitle">Sr. UX Designer</span> --}}
                            </div>
                            <div class="content">
                                <p class="description">Menempuh pendidikan di UIN KH. Achmad Shiddiq Jember prodi Hukum Keluarga Islam Fakultas Syariah. Kini ia mengajar di Ponpes Darul Amien Gambiran, Banyuwangi</p>
                                <ul class="social-icon social-default icon-naked justify-content-start">
                                    <li><a href="https://www.facebook.com/">
                                            <i class="feather-facebook"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.twitter.com">
                                            <i class="feather-twitter"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.instagram.com/">
                                            <i class="feather-instagram"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.linkdin.com/">
                                            <i class="feather-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                {{-- <div class="rbt-comment-area">
                    <div class="rbt-total-comment-post">
                        <div class="title">
                            <h4 class="mb--0">30+ Comments</h4>
                        </div>
                        <div class="add-comment-button">
                            <a class="rbt-btn btn-gradient icon-hover radius-round btn-md" href="#">
                                <span class="btn-text">Add Your Comment</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>

                    <div class="comment-respond">
                        <h4 class="title">Post a Comment</h4>
                        <form action="#">
                            <p class="comment-notes"><span id="email-notes">Your email address will not be
                                    published.</span> Required fields are marked <span class="required">*</span></p>
                            <div class="row row--10">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="name">Your Name</label>
                                        <input id="name" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="bl-email">Your Email</label>
                                        <input id="bl-email" type="email">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="website">Your Website</label>
                                        <input id="website" type="text">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="message">Leave a Reply</label>
                                        <textarea id="message" name="message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <p class="comment-form-cookies-consent">
                                        <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes">
                                        <label for="wp-comment-cookies-consent">Save my name, email, and
                                            website in this browser for the next time I comment.</label>
                                    </p>
                                </div>
                                <div class="col-lg-12">
                                    <a class="rbt-btn btn-gradient icon-hover radius-round btn-md" href="#">
                                        <span class="btn-text">Post Comment</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="rbt-comment-area">
                    <h4 class="title">2 comments</h4>
                    <ul class="comment-list">
                        <!-- Start Single Comment  -->
                        <li class="comment">
                            <div class="comment-body">
                                <div class="single-comment">
                                    <div class="comment-img">
                                        <img src="assets/images/testimonial/testimonial-1.jpg" alt="Author Images">
                                    </div>
                                    <div class="comment-inner">
                                        <h6 class="commenter">
                                            <a href="#">Cameron Williamson</a>
                                        </h6>
                                        <div class="comment-meta">
                                            <div class="time-spent">Nov 23, 2018 at 12:23 pm</div>
                                            <div class="reply-edit">
                                                <div class="reply">
                                                    <a class="comment-reply-link" href="#">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment-text">
                                            <p class="b2">Duis hendrerit velit scelerisque felis tempus, id porta
                                                libero venenatis. Nulla facilisi. Phasellus viverra
                                                magna commodo dui lacinia tempus. Donec malesuada nunc
                                                non dui posuere, fringilla vestibulum urna mollis.
                                                Integer condimentum ac sapien quis maximus. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="children">
                                <!-- Start Single Comment  -->
                                <li class="comment">
                                    <div class="comment-body">
                                        <div class="single-comment">
                                            <div class="comment-img">
                                                <img src="assets/images/testimonial/testimonial-2.jpg" alt="Author Images">
                                            </div>
                                            <div class="comment-inner">
                                                <h6 class="commenter">
                                                    <a href="#">John Due</a>
                                                </h6>
                                                <div class="comment-meta">
                                                    <div class="time-spent">Nov 23, 2018 at 12:23 pm
                                                    </div>
                                                    <div class="reply-edit">
                                                        <div class="reply">
                                                            <a class="comment-reply-link" href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comment-text">
                                                    <p class="b2">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse lobortis cursus lacinia. Vestibulum vitae leo id diam pellentesque ornare.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- End Single Comment  -->
                            </ul>
                        </li>
                        <!-- End Single Comment  -->

                        <!-- Start Single Comment  -->
                        <li class="comment">
                            <div class="comment-body">
                                <div class="single-comment">
                                    <div class="comment-img">
                                        <img src="assets/images/testimonial/testimonial-3.jpg" alt="Author Images">
                                    </div>
                                    <div class="comment-inner">
                                        <h6 class="commenter">
                                            <a href="#">Rafin Shuvo</a>
                                        </h6>
                                        <div class="comment-meta">
                                            <div class="time-spent">Nov 23, 2018 at 12:23 pm</div>
                                            <div class="reply-edit">
                                                <div class="reply">
                                                    <a class="comment-reply-link" href="#">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment-text">
                                            <p class="b2">Duis hendrerit velit scelerisque felis tempus, id porta
                                                libero venenatis. Nulla facilisi. Phasellus viverra
                                                magna commodo dui lacinia tempus. Donec malesuada nunc
                                                non dui posuere, fringilla vestibulum urna mollis.
                                                Integer condimentum ac sapien quis maximus. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- End Single Comment  -->
                    </ul>
                </div> --}}

            </div>
            {{-- <div class="related-post pt--60">
                <div class="section-title text-start mb--40">
                    <span class="subtitle bg-primary-opacity">Related Post</span>
                    <h4 class="title">Similar Post</h4>
                </div>

                <!-- Start Single Card  -->
                <div class="rbt-card card-list variation-02 rbt-hover mt--30">
                    <div class="rbt-card-img">
                        <a href="blog-details.html">
                            <img src="assets/images/blog/blog-card-02.jpg" alt="Card image"> </a>
                    </div>
                    <div class="rbt-card-body">
                        <h5 class="rbt-card-title"><a href="blog-details.html">Why Is Education So Famous?</a>
                        </h5>
                        <div class="rbt-card-bottom">
                            <a class="transparent-button" href="blog-details.html">Read
                                Article<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="rbt-card card-list variation-02 rbt-hover mt--30">
                    <div class="rbt-card-img">
                        <a href="blog-details.html">
                            <img src="assets/images/blog/blog-card-03.jpg" alt="Card image"> </a>
                    </div>
                    <div class="rbt-card-body">
                        <h5 class="rbt-card-title"><a href="blog-details.html">Difficult Things About
                                Education.</a></h5>
                        <div class="rbt-card-bottom">
                            <a class="transparent-button" href="blog-details.html">Read
                                Article<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="rbt-card card-list variation-02 rbt-hover mt--30">
                    <div class="rbt-card-img">
                        <a href="blog-details.html">
                            <img src="assets/images/blog/blog-card-04.jpg" alt="Card image"> </a>
                    </div>
                    <div class="rbt-card-body">
                        <h5 class="rbt-card-title"><a href="blog-details.html">Education Is So Famous, But
                                Why?</a></h5>
                        <div class="rbt-card-bottom">
                            <a class="transparent-button" href="blog-details.html">Read
                                Article<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

            </div> --}}
        </div>
    </div>
</div>
@endsection
