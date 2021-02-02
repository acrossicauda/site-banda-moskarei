<?php

//namespace layoutPage;
// https://tunehill.netlify.app/

class layoutPage {

    public $urlImg = '';
    public $permission = array();

    public function __construct() {
        //$urlImg = 'assets/img/gallery/';
        $urlImg = 'assets/uploads/imgs';
        $this->urlImg = $urlImg;
        $this->permission = $this->getPermission();
    }

    public function getPermission() {
        $arr = array();
        $arr['lastAlbumSession'] = false;
        $arr['biographySession'] = true;
        $arr['discographySession'] = false;
        $arr['members'] = true;
        $arr['upcomingTour'] = false;
        $arr['gallery'] = true;
        $arr['latestBlog'] = false;
        $arr['contact'] = true;
        $arr['contactAddress'] = true;
        $arr['videographySession'] = false;

        return $arr;
    }

    public function headerSession() {
        $this->permission;

        $logo = '';
//        $logo = '<img src="favicon.ico" alt="some text" width=40 height=20>';

        $html = '';
        $html = '
            <!-- Preloader Section -->
            <div class="tunehill-preloader">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
            </div>
            
            <!-- Header Section -->
            <header class="header-section d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-6">
                            <div class="logo">
                                ' . $logo . '
                                <a href="/" class="rock-salt">Moska<span>Rei</span></a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-6 d-flex align-items-center justify-content-end">
                            <nav class="mainmenu">
                                <ul>';
        $html .=                    '<li class="nav-item"><a href="#home">Home</a></li>';
        if($this->permission['biographySession']) {
            $html .=                '<li class="nav-item"><a href="#history">História</a></li>';
        }
        if($this->permission['videographySession']) {
            $html .=                '<li class="nav-item"><a href="#videos">Videos</a></li>';
        }
        if($this->permission['discographySession']) {
            $html .=                '<li class="nav-item"><a href="#albums">Albums</a></li>';
        }
        if($this->permission['members']) {
            $html .=                '<li class="nav-item"><a href="#members">Membros</a></li>';
        }
        if($this->permission['upcomingTour']) {
            $html .=                '<li class="nav-item"><a href="#tours">Tours</a></li>';
        }
        if($this->permission['gallery']) {
            $html .=                '<li class="nav-item"><a href="#gallery">Galeria</a></li>';
        }
        if($this->permission['latestBlog']) {
            $html .=                '<li class="nav-item"><a href="#blog">News</a></li>';
        }
        if($this->permission['contact']) {
            $html .=                '<li class="nav-item"><a href="#contact">Contatos</a></li>';
        }
        $html .=                '</ul>
                            </nav>
            
                            <!-- Mobile Menu -->
                            <div class="mobile-menu-btn">
                                <div class="btn-line"></div>
                                <div class="btn-line"></div>
                                <div class="btn-line"></div>
                            </div>
                            <div class="mobile-menu-wrap">
                                    <span id="close-btn">
                                        <i class="fa fa-times"></i>
                                    </span>
                                <nav class="mobileMenu">
                                    <ul>
                                        <li class="nav-item"><a href="#home">Home</a></li>
                                        <li class="nav-item"><a href="#history">History</a></li>
                                        <li class="nav-item"><a href="#albums">Albums</a></li>
                                        <li class="nav-item"><a href="#members">Members</a></li>
                                        <li class="nav-item"><a href="#tours">Tour</a></li>
                                        <li class="nav-item"><a href="#gallery">Gallery</a></li>
                                        <li class="nav-item"><a href="#blog">News</a></li>
                                        <li class="nav-item"><a href="#contact">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- End Mobile Menu -->
            
                        </div>
                    </div>
                </div>
            </header> <!-- End Header Section -->
        ';

        return $html;
    }

    public function homeSlider() {
        $title = 'Música é a abreviatura da emoção';
        $decription = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem illo corrupti quisquam corporis unde officia.';

        //$title2 = 'Without music, life would be a mistake';
        $title2 = 'Sem música, a vida seria um erro';
        $decription2 = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem illo corrupti quisquam corporis unde officia.';

        $html = '';
        $html = '
            <!-- Home Slider Section -->
            <section class="home-slider-section">
                <div class="home-slider owl-carousel">
            
                    <div class="home-slide home-slide-1">
                        <div class="container">
                            <div class="col-md-8 offset-md-2 col-12">
                                <div class="home-slide-caption">
                                    <h1>' . $title . '</h1>
                                    <h5>' . $decription . '</h5>
                                    <a href="#history" class="regular-btn mt-4 mb-0">Saiba mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <div class="home-slide home-slide-2">
                        <div class="container">
                            <div class="col-md-8 offset-md-2 col-12">
                                <div class="home-slide-caption">
                                    <h1>' . $title2 . '</h1>
                                    <h5>' . $decription2 . '</h5>
                                    <a href="#history" class="regular-btn mt-4 mb-0">Saiba mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
            
                </div>
            </section> <!-- End Home Slider Section -->

        ';

        return $html;
    }

    public function lastAlbumSession() {
        if(!$this->permission[__FUNCTION__]) {
            return '';
        }

        $html = '';
        $html = '
            <!-- Latest Album Section -->
            <section class="latest-album-section section-padding">
                <div class="container">
            
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="section-title">
                                <h2><i class="fa fa-headphones"></i> Latest Album</h2>
                            </div>
                        </div>
                    </div>
            
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="latest-album-thumb"></div>
                                </div>
            
                                <div class="col-lg-6 col-md-6">
                                    <div class="latest-album-info">
            
                                        <h4>Name: Latest Album Name</h4>
            
                                        <div class="latest-album-meta">
                                            <span class="release-date"><strong>Release Date:</strong> May 5, 2017</span>
                                            <span class="release-date"><strong>Studio:</strong> Studio Name</span>
                                            <span class="release-date"><strong>Genre:</strong> POP/Rock</span>
                                            <span class="release-date"><strong>Total Songs:</strong> 10</span>
                                            <span class="release-date"><strong>Release Venue:</strong> Hollywood Bowl</span>
                                            <span class="release-date"><strong>Language:</strong> English</span>
                                            <span class="release-date"><strong>Title Track:</strong> Track Name</span>
                                        </div>
            
                                        <a href="#" class="regular-btn"><i class="fa fa-soundcloud"></i> Listen on SoundCloud</a>
            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
                </div>
            </section>

        ';

        return $html;
    }

    public function biographySession() {
        if(!$this->permission[__FUNCTION__]) {
            return '';
        }

        //' . $urlImg . '/about.jpg

        $title = 'História da nossa banda';
        $descrition = '
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum dicta odit officiis eum voluptates quod? Similique, temporibus repudiandae! Quam reiciendis eius suscipit? Quidem nostrum ipsa velit quos aliquam inventore dolores.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum dicta odit officiis eum voluptates quod? Similique, temporibus repudiandae! Quam reiciendis eius suscipit? Quidem nostrum ipsa velit quos aliquam inventore dolores.</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea voluptatem laborum dolores praesentium repellendus quasi molestiae distinctio consequatur numquam cum sequi minus quia quidem corrupti itaque, iure ab ipsum! Minus.</p>';

        $urlImg = $this->urlImg . '/slider-5.jpeg';
        $titleImg = 'History';
        $img = '<img src="' . $urlImg . '" alt="' . $titleImg . '">';

        $html = '';
        $html = '
            <!-- Biography Section -->
            <section class="biography-section section-padding grey-bg" id="history">
                <div class="container">
            
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="section-title">
                                <h2><i class="fa fa-history"></i> Biografia</h2>
                            </div>
                        </div>
                    </div>
            
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="biography-description">
                                <h4>' . $title . '</h4>
                                ' . $descrition . '
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="biography-image">
                                ' . $img . '
                            </div>
                        </div>
                    </div>
            
                </div>
            </section> <!-- End Biography Section -->

        ';
        return $html;
    }

    /**
     * @return string Adicionar VideoClipes
     * O video tem que ser um link com o youtube para nao pesar o server
     */
    public function videographySession() {
        if(!$this->permission[__FUNCTION__]) {
            return '';
        }

        $urlImg = $this->urlImg;
        $html = '';
        $html = '
            <!-- Discography Section -->
            <section class="discography-section section-padding" id="videos">
                <div class="container">
            
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="section-title">
                                <h2><i class="fa fa-video"></i> Videos</h2>
                            </div>
                        </div>
                    </div>
            
                    <div class="row">
            
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-album">
                                <div class="album-cover">
                                    <img src="' . $urlImg . '/slider-1.jpg" alt="Album One">
                                    <div class="album-meta">
                                        <a href="single-album.html"><h4>Album Name <i class="fa fa-long-arrow-right"></i></h4></a>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-album">
                                <div class="album-cover">
                                    <img src="' . $urlImg . '/slider-2.jpg" alt="Album One">
                                    <div class="album-meta">
                                        <a href="single-album.html"><h4>Album Name <i class="fa fa-long-arrow-right"></i></h4></a>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                    </div>
            
                </div>
            </section> <!-- End Discography Section -->

        ';

        return $html;
    }

    public function discographySession() {
        if(!$this->permission[__FUNCTION__]) {
            return '';
        }

        $urlImg = $this->urlImg;
        $html = '';
        $html = '
            <!-- Discography Section -->
            <section class="discography-section section-padding" id="albums">
                <div class="container">
            
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="section-title">
                                <h2><i class="fa fa-music"></i> Albums</h2>
                            </div>
                        </div>
                    </div>
            
                    <div class="row">
            
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-album">
                                <div class="album-cover">
                                    <img src="' . $urlImg . '/slider-1.jpg" alt="Album One">
                                    <div class="album-meta">
                                        <a href="single-album.html"><h4>Album Name <i class="fa fa-long-arrow-right"></i></h4></a>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-album">
                                <div class="album-cover">
                                    <img src="' . $urlImg . '/slider-2.jpg" alt="Album One">
                                    <div class="album-meta">
                                        <a href="single-album.html"><h4>Album Name <i class="fa fa-long-arrow-right"></i></h4></a>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-album">
                                <div class="album-cover">
                                    <img src="' . $urlImg . '/slider-3.jpeg" alt="Album One">
                                    <div class="album-meta">
                                        <a href="single-album.html"><h4>Album Name <i class="fa fa-long-arrow-right"></i></h4></a>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-album">
                                <div class="album-cover">
                                    <img src="' . $urlImg . '/slider-5.jpeg" alt="Album One">
                                    <div class="album-meta">
                                        <a href="single-album.html"><h4>Album Name <i class="fa fa-long-arrow-right"></i></h4></a>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                    </div>
            
                </div>
            </section> <!-- End Discography Section -->

        ';

        return $html;
    }

    public function members() {
        if(!$this->permission[__FUNCTION__]) {
            return '';
        }

        $urlImg = $this->urlImg;

        $members = $this->getMembers();
        $htmlMember = '';
        foreach ($members as $idMember => $member) {
            $htmlMember .= '
                <div class="col-lg-4">
                    <div class="band-member">
                        <div class="member-img">
                            <img src="' . $urlImg . '/' . $member['img'] . '" alt="' . $member['name'] . '">
                            ' . $this->getMedias($idMember) . '
                        </div>
                        <h4>' . $member['name'] . ' <span>' . $member['function'] . '</span></h4>
                    </div>
                </div>
            ';
        }

        $html = '';
        $html = '
            <!-- Band Member Section -->
            <section class="band-member-section section-padding grey-bg" id="members">
                <div class="container">
            
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="section-title">
                                <h2><i class="fa fa-users"></i> Membros da Banda</h2>
                            </div>
                        </div>
                    </div>
            
                    <div class="row">
            
                        ' . $htmlMember . '
            
                    </div>
            
                </div>
            </section> <!-- End Band Member Section -->

        ';

        return $html;
    }

    private function getMembers() {
        $members = [
            1 => ['name' => 'Reinaldo', 'function' => 'Vocal / Guitarra', 'img' => 'reinaldo.jpeg'],
            2 => ['name' => 'Moska', 'function' => 'Baixo', 'img' => 'moska.jpeg'],
            3 => ['name' => 'Fers', 'function' => 'Bateria', 'img' => 'fers.jpeg'],
        ];
        return $members;
    }

    private function getMedias($idMember) {
        $whatsApp = '12';
        $twitter = '123';
        $soundcloud = '123';
        $instagram = '123';

        if($whatsApp != '') {
            $whatsApp = '<a href="#' . $whatsApp . '"><i class="fa fa-facebook"></i></a>';
        }
        if($twitter != '') {
            $twitter = '<a href="#' . $twitter . '"><i class="fa fa-twitter"></i></a>';
        }
        if($soundcloud != '') {
            $soundcloud = '<a href="#' . $soundcloud . '"><i class="fa fa-soundcloud"></i></a>';
        }
        if($instagram != '') {
            $instagram = '<a href="#' . $instagram . '"><i class="fa fa-instagram"></i></a>';
        }

        $medias = '
            <div class="member-social-profile">
                ' . $whatsApp . '
                ' . $twitter . '
                ' . $soundcloud . '
                ' . $instagram . '
            </div>';
        return $medias;
    }

    public function upcomingTour() {
        if(!$this->permission[__FUNCTION__]) {
            return '';
        }

        $html = '';
        $html = '
            <!-- Upcoming Tour Section -->
            <section class="upcoming-tour-section section-padding" id="tours">
                <div class="container">
            
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="section-title">
                                <h2><i class="fa fa-plane"></i> Upcoming Tours</h2>
                            </div>
                        </div>
                    </div>
            
                    <div class="row">
            
                        <div class="col-lg-4">
                            <div class="tour-latest-one">
                                <div class="tour-latest-one-image">
                                    <img src="assets/img/tours/tour-1.jpeg" alt="Tour">
                                </div>
                                <div class="latest-tour-meta">
                                    <span class="date"><i class="fa fa-clock-o"></i> 17.00 - Jun 17, 2018</span>
                                    <span class="venue"><i class="fa fa-home"></i> Hollywood Bowl</span>
                                    <span class="location"><i class="fa fa-map-marker"></i> Los Angeles, California</span>
                                    <span class="price"><i class="fa fa-money"></i> $25</span>
                                    <a href="#" class="regular-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-lg-4">
                            <div class="tour-latest-one">
                                <div class="tour-latest-one-image">
                                    <img src="assets/img/tours/tour-2.jpeg" alt="Tour">
                                </div>
                                <div class="latest-tour-meta">
                                    <span class="date"><i class="fa fa-clock-o"></i> 17.00 - Jun 17, 2018</span>
                                    <span class="venue"><i class="fa fa-home"></i> Hollywood Bowl</span>
                                    <span class="location"><i class="fa fa-map-marker"></i> Los Angeles, California</span>
                                    <span class="price"><i class="fa fa-money"></i> $25</span>
                                    <a href="#" class="regular-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-lg-4">
                            <div class="tour-latest-one">
                                <div class="tour-latest-one-image">
                                    <img src="assets/img/tours/tour-3.jpg" alt="Tour">
                                </div>
                                <div class="latest-tour-meta">
                                    <span class="date"><i class="fa fa-clock-o"></i> 17.00 - Jun 17, 2018</span>
                                    <span class="venue"><i class="fa fa-home"></i> Hollywood Bowl</span>
                                    <span class="location"><i class="fa fa-map-marker"></i> Los Angeles, California</span>
                                    <span class="price"><i class="fa fa-money"></i> $25</span>
                                    <a href="#" class="regular-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
            
                    </div>
            
                </div>
            </section> <!-- End Upcoming Tour Section -->

        ';

        return $html;
    }

    public function gallery() {
        if(!$this->permission[__FUNCTION__]) {
            return '';
        }

        //$urlImg = 'assets/img/gallery/';
        //$urlImg = 'assets/uploads/imgs';
        $urlImg = $this->urlImg;
        $imagens = $files = glob("$urlImg/*.*");

//exit;
        $html = '';
        $html = '
            <!-- Gallery Section -->
            <section class="gallery-section section-padding grey-bg" id="gallery">
                <div class="container">
            
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="section-title">
                                <h2><i class="fa fa-picture-o"></i> Galeria de Fotos</h2>
                            </div>
                        </div>
                    </div>
            
                    <div class="row">';

        foreach ($imagens as $img) {

            $html .=   '<div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="gallery-image">
                                <a href="' . $img . '" data-featherlight="image"><img src="' . $img . '" alt="Gallery"></a>
                            </div>
                        </div>';
        }


        $html .=     '</div>
                </div>
            </section> <!-- Gallery Section End -->

        ';

        return $html;
    }

    public function latestBlog() {
        if(!$this->permission[__FUNCTION__]) {
            return '';
        }

        $html = '';
        $html = '
            <!-- Latest Blog Section -->
            <section class="latest-blog-section section-padding" id="blog">
                <div class="container">
            
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="section-title">
                                <h2><i class="fa fa-newspaper-o"></i> Latest News</h2>
                            </div>
                        </div>
                    </div>
            
                    <div class="row">
            
                        <div class="col-lg-4">
                            <div class="latest-single-blog">
                                <div class="s-img">
                                    <img src="assets/img/blog/blog-1.jpeg" alt="Blog">
            
                                    <div class="latest-blog-heading">
                                        <h4><a href="single-blog.html">Blog Title Goes Here</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-lg-4">
                            <div class="latest-single-blog">
                                <div class="s-img">
                                    <img src="assets/img/blog/blog-2.jpg" alt="Blog">
            
                                    <div class="latest-blog-heading">
                                        <h4><a href="single-blog.html">Blog Title Goes Here</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-lg-4">
                            <div class="latest-single-blog">
                                <div class="s-img">
                                    <img src="assets/img/blog/blog-3.jpg" alt="Blog">
            
                                    <div class="latest-blog-heading">
                                        <h4><a href="single-blog.html">Blog Title Goes Here</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                    </div>
            
                </div>
            </section>
        ';

        return $html;
    }

    public function contact() {
        if(!$this->permission[__FUNCTION__]) {
            return '';
        }

        $html = '';
        $html = '
            <!-- Contact Section -->
            <section class="contact-section section-padding" id="contact">
                <div class="container">
            
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="section-title">
                                <h2 class="text-white"><i class="fa fa-paperclip"></i> Entre em Contato</h2>
                            </div>
                        </div>
                    </div>
            
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="contact-form">
                                <form method="POST" action="send_mail" id="contact-form">
                                    <input type="hidden" name="_token" value="'. csrf_token() .'" />
                                    <p>
                                        <input type="text" name="name" placeholder="Seu Nome" required>
                                    </p>
                                    <p>
                                        <input type="email" name="email" placeholder="Seu Email" required>
                                    </p>
                                    <p>
                                        <input type="text" name="subject" placeholder="Título da Mensagem" required>
                                    </p>
                                    <p>
                                        <textarea rows="5" name="message" placeholder="Seu Mensagem"></textarea>
                                    </p>
                                    <p>
                                        <button type="submit" class="regular-btn">Enviar Mensagem <i class="fa fa-paper-plane"></i></button>
                                    </p>
                                </form>
                                <div class="form-message text-center"></div>
                            </div>
                        </div>
                    </div>
            
                </div>
            </section> <!-- End Contact Section -->

        ';

        return $html;
    }

    public function contactAddress() {
        if(!$this->permission[__FUNCTION__]) {
            return '';
        }

        $phonenumber = '+999-99-99-99';
        $email = 'example@example.com';
        $endereco = 'Stockholm, Sweden';


        $html = '';
        $html = '
            <!-- Contact Address Section -->
            <section class="contact-address-section section-padding">
                <div class="container">
                    <div class="row">
            
                        <div class="col-lg-4 col-12">
                            <div class="contact-details">
                                <i class="fa fa-home"></i>
                                <div class="contact-body-text">
                                    <h4>Endereço</h4>
                                    <span>' . $endereco . '</span>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-lg-4 col-12">
                            <div class="contact-details">
                                <i class="fa fa-mobile"></i>
                                <div class="contact-body-text">
                                    <h4>Phone</h4>
                                    <span>' . $phonenumber . '</span>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-lg-4 col-12">
                            <div class="contact-details">
                                <i class="fa fa-envelope-o"></i>
                                <div class="contact-body-text">
                                    <h4>Email</h4>
                                    <span>' . $email . '</span>
                                </div>
                            </div>
                        </div>
            
                    </div>
                </div>
            </section> <!-- End Contact Address Section -->

        ';

        return $html;
    }

    public function header() {
        $html = '';
        $html = '
            <!DOCTYPE html>
            <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
            
                <title>Banda  - MoskaRei</title>
            
                <!-- Google Font -->
                <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">
            
                <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
                <!-- Animate CSS -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
                <!-- Fontawesome CSS -->
            <!--    <link rel="stylesheet" href="assets/css/font-awesome.min.css"> -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/fontawesome.min.css" integrity="sha512-kJ30H6g4NGhWopgdseRb8wTsyllFUYIx3hiUwmGAkgA9B/JbzUBDQVr2VVlWGde6sdBVOG7oU8AL35ORDuMm8g==" crossorigin="anonymous" /> -->
                <!-- Owl-Carousel CSS -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
                <!-- Featherlight CSS -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/featherlight/1.7.13/featherlight.min.css">
                <!-- Main CSS -->
                <link rel="stylesheet" href="assets/css/main.css">
                <!-- Responsive CSS -->
                <link rel="stylesheet" href="assets/css/responsive.css">

                <link rel="preconnect" href="https://fonts.gstatic.com">
                <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">

            
            </head>
            <body id="home">
        ';

        return $html;
    }

    public function footer() {
        $html = '';
        $html = '
            <!-- Footer Section -->
            <footer class="footer-section">
                <div class="container">
                    <div class="col-12 text-center">
            
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                            <a href="#"><i class="fa fa-soundcloud"></i></a>
                        </div>
            
                        <span class="copyright-text">
                                &copy; Copyright 2021, All Rights Reserved.
                        </span>
                    </div>
                </div>
            </footer> <!-- End Footer Section -->
            
            
            <!-- Jquery -->
            <!--<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>-->
            <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
            <!-- Popper JS -->
            <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>-->
            <!-- Bootstrap JS -->
            <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            
            <!-- Owl-Carousel JS -->
            <!--<script src="assets/js/owl.carousel.min.js"></script>-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
            <!-- Featherlight JS -->
            <!--<script src="assets/js/featherlight.min.js"></script>-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/featherlight/1.7.13/featherlight.min.js"></script>
            <!-- Easing JS -->
            <!--<script src="assets/js/jquery.easing.min.js"></script>-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
            <!-- AJAX Main JS -->
            <script src="assets/js/ajax-mail.js"></script>
            <!-- Main JS -->
            <script src="assets/js/main.js"></script>
            
            </body>
            </html>
        ';

        return $html;
    }

}