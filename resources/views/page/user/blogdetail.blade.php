@extends('index')

@section('content')
<main id="tg-main" class="tg-main tg-haslayout">
    <div class="tg-main-section tg-haslayout">
        <div class="container">
            <div class="row">
                <div id="tg-twocolumns" class="tg-twocolumns tg-haslayout">
                    <div class="col-sm-12 col-xs-12">
                        <figure class="tg-postimg tg-postimgdetail">
                            <img src="images/blog/img-18.jpg" alt="image description">
                            <figcaption>
                                <ul class="tg-postmetadata">
                                    <li><a href="#">by admin</a></li>
                                    <li><a href="#">04 comments</a></li>
                                    <li><a href="#">lifestyle</a></li>
                                </ul>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-9 col-sm-8 col-xs-12 pull-left">
                        <div class="tg-postdetail">
                            <div class="tg-mathtextbox">
                                <div class="tg-section-heading">
                                    <h2>{{ $post->title }}</h2>
                                </div>
                                <p>{{ $post->body }}</p>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quiata non numquam aliquam quaerat voluptatem.</p>
                                <div id="tg-matchdetailslider" class="tg-matchdetailslider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <figure><img src="images/match-detail/img-01.jpg" alt="image description"></figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure><img src="images/match-detail/img-01.jpg" alt="image description"></figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure><img src="images/match-detail/img-01.jpg" alt="image description"></figure>
                                        </div>
                                    </div>
                                    <div class="tg-themebtnprev"><span class="fa fa-angle-right"></span></div>
                                    <div class="tg-themebtnnext"><span class="fa fa-angle-left"></span></div>
                                </div>
                                <div class="tg-section-heading">
                                    <h2>Lorem ipsum dolor sit amet consectetur</h2>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dousmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
                                <p>Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla atur Excepteur sint occaecat cupidatat non proident.</p>
                            
                                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quistat nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
                                <blockquote><q>“ Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab. ”</q></blockquote>
                                <ul class="tg-detail">
                                    <li><i class="fa fa-check"></i>Consectetur adipisicing elit do eiusmod tempor</li>
                                    <li><i class="fa fa-check"></i>Consectetur adipisicing elit do eiusmod tempor</li>
                                    <li><i class="fa fa-check"></i>Consectetur adipisicing elit do eiusmod tempor</li>
                                    <li><i class="fa fa-check"></i>Consectetur adipisicing elit do eiusmod tempor</li>
                                    <li><i class="fa fa-check"></i>Consectetur adipisicing elit do eiusmod tempor</li>
                                    <li><i class="fa fa-check"></i>Consectetur adipisicing elit do eiusmod tempor</li>
                                </ul>
                                <ul class="tg-detail">
                                    <li><i class="fa fa-caret-right"></i>Consectetur adipisicing elit do eiusmod tempor</li>
                                    <li><i class="fa fa-caret-right"></i>Consectetur adipisicing elit do eiusmod tempor</li>
                                    <li><i class="fa fa-caret-right"></i>Consectetur adipisicing elit do eiusmod tempor</li>
                                    <li><i class="fa fa-caret-right"></i>Consectetur adipisicing elit do eiusmod tempor</li>
                                    <li><i class="fa fa-caret-right"></i>Consectetur adipisicing elit do eiusmod tempor</li>
                                    <li><i class="fa fa-caret-right"></i>Consectetur adipisicing elit do eiusmod tempor</li>
                                </ul>
                                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quistat nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur eaque ipsa quae.</p>
                            </div>
                            <div id="tg-playerslider" class="tg-playerslider tg-haslayout">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="tg-videobox">
                                            <figure>
                                                <img src="images/player-detail/img-02.jpg" alt="image description">
                                                <figcaption>
                                                    <a class="tg-playbtn" href="https://youtu.be/a0ksVaLlaIw?iframe=true" data-rel="prettyPhoto[iframe]"></a>
                                                    <h2>accusantium doloremque lauda totam rem aperiam ipsa</h2>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tg-videobox">
                                            <figure>
                                                <img src="images/player-detail/img-02.jpg" alt="image description">
                                                <figcaption>
                                                    <a class="tg-playbtn" href="https://youtu.be/a0ksVaLlaIw?iframe=true" data-rel="prettyPhoto[iframe]"></a>
                                                    <h2>accusantium doloremque lauda totam rem aperiam ipsa</h2>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tg-videobox">
                                            <figure>
                                                <img src="images/player-detail/img-02.jpg" alt="image description">
                                                <figcaption>
                                                    <a class="tg-playbtn" href="https://youtu.be/a0ksVaLlaIw?iframe=true" data-rel="prettyPhoto[iframe]"></a>
                                                    <h2>accusantium doloremque lauda totam rem aperiam ipsa</h2>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="tg-themebtnprev"><span class="fa fa-angle-left"></span></div>
                                <div class="tg-themebtnnext"><span class="fa fa-angle-right"></span></div>
                            </div>
                            <div class="tg-tags-social tg-haslayout">
                                <div class="tg-tags pull-left">
                                    <i class="fa fa-tags"></i>
                                    <span>tags: </span>
                                    <a href="#" class="tg-btn">fashion</a>
                                    <a href="#" class="tg-btn">travel</a>
                                    <a href="#" class="tg-btn">tech</a>
                                    <a href="#" class="tg-btn">sports</a>
                                </div>
                                <div class="tg-social-share pull-right">
                                    <i class="fa fa-share-square-o"></i>
                                    <span>share: </span>
                                    <ul>
                                        <li><a href="#"><i data-iconname="on facebook" class="fa fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i data-iconname="on twitter" class="fa fa-twitter "></i></a></li>
                                        <li><a href="#"><i data-iconname="on pinterest" class="fa fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i data-iconname="on linkedin" class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tg-authorbox">
                                <figure class="tg-authorpic">
                                    <a href="#">
                                        <img src="images/author/img-01.png" alt="image description">
                                    </a>
                                </figure>
                                <div class="tg-authorinfo">
                                    <a href="#" class="tg-theme-tag">About Author</a>
                                    <div class="tg-section-heading">
                                        <h3>Maynard Brabant</h3>
                                    </div>
                                    <div class="tg-description">
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etire magna aliqua. Ut enim ad minim veniam.</p>
                                    </div>
                                    <ul class="tg-socialicons">
                                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="tg-comments" class="tg-comments">
                                <div class="tg-section-heading">
                                    <h2>Latest Comments</h2>
                                </div>
                                <ul>
                                    <li>
                                        <div class="tg-comment">
                                            <figure>
                                                <a href="#">
                                                    <img src="images/thumbnails/img-08.jpg" alt="image description">
                                                </a>
                                            </figure>
                                            <div class="tg-commentdata">
                                                <span class="tg-theme-tag"><time datetime="2016-05-03">May 3, 2016</time></span>
                                                <a class="tg-btnreply" href="#">reply</a>
                                                <div class="tg-section-heading">
                                                    <h3>Will Mccaulley</h3>
                                                </div>
                                                <div class="tg-description">
                                                    <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etire magna aliqua. Ut enim ad minim veniam.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tg-comment">
                                            <figure>
                                                <a href="#">
                                                    <img src="images/thumbnails/img-09.jpg" alt="image description">
                                                </a>
                                            </figure>
                                            <div class="tg-commentdata">
                                                <span class="tg-theme-tag"><time datetime="2016-05-03">May 3, 2016</time></span>
                                                <a class="tg-btnreply" href="#">reply</a>
                                                <div class="tg-section-heading">
                                                    <h3>Will Mccaulley</h3>
                                                </div>
                                                <div class="tg-description">
                                                    <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etire magna aliqua. Ut enim ad minim veniam.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tg-comment">
                                            <figure>
                                                <a href="#">
                                                    <img src="images/thumbnails/img-10.jpg" alt="image description">
                                                </a>
                                            </figure>
                                            <div class="tg-commentdata">
                                                <span class="tg-theme-tag"><time datetime="2016-05-03">May 3, 2016</time></span>
                                                <a class="tg-btnreply" href="#">reply</a>
                                                <div class="tg-section-heading">
                                                    <h3>Will Mccaulley</h3>
                                                </div>
                                                <div class="tg-description">
                                                    <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etire magna aliqua. Ut enim ad minim veniam.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tg-leavecomment" class="tg-leavecomment">
                                <div class="tg-section-heading">
                                    <h2>Leave Your Comment</h2>
                                </div>
                                <form id="tg-commentform" class="tg-commentform" method="post" action="#" enctype="text/plain">
                                    <fieldset>
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Name*" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Email*" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Message*" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button class="tg-btn" type="submit">send</button>
                                        </div>
                                    </fieldset>
                                </form>
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <aside id="tg-sidebar" class="tg-sidebar">
                            <div class="tg-widget tg-search">
                                <form class="form-search">
                                    <fieldset>
                                        <input type="search" placeholder="Search Here" class="form-control">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </fieldset>
                                </form>
                            </div>
                            <div class="tg-widget tg-catagories-widget">
                                <h3>catagories</h3>
                                <ul>
                                    <li><a href="#"><em>Web Design</em><i>389</i></a></li>
                                    <li><a href="#"><em>Marketing</em><i>203</i></a></li>
                                    <li><a href="#"><em>Wordpress</em><i>256</i></a></li>
                                    <li><a href="#"><em>Graphic Design</em><i>52</i></a></li>
                                    <li><a href="#"><em>Photography</em><i>43</i></a></li>
                                    <li><a href="#"><em>eCommerce</em><i>23</i></a></li>
                                    <li><a href="#"><em>Html</em><i>389</i></a></li>
                                </ul>
                            </div>
                            <div class="tg-widget tg-price-widget">
                                <h3>filter by price</h3>
                                <div class="tg-price-range">
                                    <div id="tg-slider-range" class="tg-slider-range"></div>
                                    <p>
                                        <label for="amount">Price:</label>
                                        <input type="text" id="amount" readonly>
                                    </p>
                                    <a class="tg-btn" href="#">Filter</a>
                                </div>
                            </div>
                            <div class="tg-widget">
                                <h3>Slideshow Widget</h3>
                                <div class="tg-slideshow-widget tg-haslayout">
                                    <div id="tg-slideshow-slider" class="tg-slideshow-slider tg-haslayout">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <figure class="tg-postimg">
                                                    <img src="images/sidebar/img-01.jpg" alt="image description">
                                                </figure>
                                            </div>
                                            <div class="swiper-slide">
                                                <figure class="tg-postimg">
                                                    <img src="images/sidebar/img-01.jpg" alt="image description">
                                                </figure>
                                            </div>
                                            <div class="swiper-slide">
                                                <figure class="tg-postimg">
                                                    <img src="images/sidebar/img-01.jpg" alt="image description">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination tg-pagination-slider"></div>
                                        <div class="tg-themebtnnext"><span class="fa fa-angle-down"></span></div>
                                        <div class="tg-themebtnprev"><span class="fa fa-angle-up"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tg-widget tg-tags-widget">
                                <h3>popular tags</h3>
                                <ul>
                                    <li><a class="tg-btn" href="#">fashion</a></li>
                                    <li><a class="tg-btn" href="#">travel</a></li>
                                    <li><a class="tg-btn" href="#">sports</a></li>
                                    <li><a class="tg-btn" href="#">blog</a></li>
                                    <li><a class="tg-btn" href="#">magazine</a></li>
                                    <li><a class="tg-btn" href="#">fun time</a></li>
                                    <li><a class="tg-btn" href="#">ui</a></li>
                                    <li><a class="tg-btn" href="#">tech</a></li>
                                    <li><a class="tg-btn" href="#">soccer</a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
