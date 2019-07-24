@extends('front.master')

@section('title')
     Blog
@endsection


@section('content')

    <main id="page-content">
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs__title">Blog Posts</div>
                        <div class="breadcrumbs__items">
                            <div class="breadcrumbs__wrap">
                                <div class="breadcrumbs__item">
                                    <a href="index.html" class="breadcrumbs__item-link">Home</a> <span>/</span> <a href="blog.html" class="breadcrumbs__item-link">Blog Posts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Breadcrumbs  -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-9 post-list">
                    <article class="post-list__item format-standart">
                        <figure class="thumbnail post-list__thumbnail">
                            <a href="single-post.html"><img src="assets/images/blog-post-img-1.jpg" alt=""></a>
                        </figure>
                        <div class="post-list__item-content">
                            <header class="post-list__item-header">
                                <div class="post-list__item-meta post-block_meta">
                                    <span class="date"><i class="icon-clock"></i> 10 February, 2017</span>
                                    <a href="#" class="comment"><i class="icon-social"></i>  3</a>
                                </div>
                                <h3 class="post-list__item-title">RentalCars's Cheap One-Way Car Rental Guide</h3>
                                <span class="post-list__item-author">by <a href="#">Paul Johnson</a></span>
                            </header>
                            <div class="post-list__item-desc">
                                <p>Leann Rimes bought a one-way ticket on a westbound train, to see how far she could go. Eventually, she might want to make a return trip back east! If she's collected a lot of new possessions while out west, the cheapest option might be a one-way rental vehicle, where she rents...</p>
                            </div>
                            <footer class="post-list__item-footer">
                                <a href="single-post.html" class="btn">READ POST</a>
                                <div class="social-list">
                                    <ul class="social-list__icons">
                                        <li><a href="#"><i class="icon-facebook-logo"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter-letter-logo"></i></a></li>
                                        <li><a href="#"><i class="icon-google-plus"></i></a></li>
                                        <li><a href="#"><i class="icon-linkedin-logo"></i></a></li>
                                    </ul>
                                </div>
                            </footer>
                        </div>
                    </article>
                    <article class="post-list__item format-video">
                        <figure class="thumbnail post-list__thumbnail video-thumb">
                            <iframe src="https://player.vimeo.com/video/103180506"></iframe>
                        </figure>
                        <div class="post-list__item-content">
                            <header class="post-list__item-header">
                                <div class="post-list__item-meta post-block_meta">
                                    <span class="date"><i class="icon-clock"></i> 10 February, 2017</span>
                                    <a href="#" class="comment"><i class="icon-social"></i>  3</a>
                                </div>
                                <h3 class="post-list__item-title">An unlikely endorsement of rental cars from the star of Airplane!e</h3>
                                <span class="post-list__item-author">by <a href="#">Paul Johnson</a></span>
                            </header>
                            <div class="post-list__item-desc">
                                <p>Leann Rimes bought a one-way ticket on a westbound train, to see how far she could go. Eventually, she might want to make a return trip back east! If she's collected a lot of new possessions while out west, the cheapest option might be a one-way rental vehicle, where she rents...</p>
                            </div>
                            <footer class="post-list__item-footer">
                                <a href="single-post.html" class="btn">READ POST</a>
                                <div class="social-list">
                                    <ul class="social-list__icons">
                                        <li><a href="#"><i class="icon-facebook-logo"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter-letter-logo"></i></a></li>
                                        <li><a href="#"><i class="icon-google-plus"></i></a></li>
                                        <li><a href="#"><i class="icon-linkedin-logo"></i></a></li>
                                    </ul>
                                </div>
                            </footer>
                        </div>
                    </article>
                    <article class="post-list__item format-quote">
                        <div class="post-list__item-content">
                            <header class="post-list__item-header">
                                <div class="post-list__item-meta post-block_meta">
                                    <span class="date"><i class="icon-clock"></i> 10 February, 2017</span>
                                    <a href="#" class="comment"><i class="icon-social"></i>  3</a>
                                </div>
                                <h3 class="post-list__item-title">Premium Credit Cards That Offer Premium Car Rental Benefits</h3>
                                <span class="post-list__item-author">by <a href="#">Paul Johnson</a></span>
                            </header>
                            <div class="post-list__item-desc">
                                <p>Rental car companies have a vested interest in credit card users. After all, the companies need to get paid by consumers and the days of cash deposits are long gone. </p>

                                <blockquote class="post-format-quote">
                                    <p>Debit cards are also viewed as undesirable by the rental car companies as a proxy for "non-creditworthy renter" (whether fair or unfair). Using debit cards frequently come with many restrictions, if the rental car company will even accept the debit card at all! Without multiple forms of identification, large security deposits, and a successful credit check (among other provisions), the car renter with a debit card will likely be taking a taxi or Uber instead.</p>
                                    <p>A search for a one-way rental at is almost identical to searching for a round-trip rental. The only difference is selecting the option to Return at a different location. Looking for a Fort Lauderdale Airport to Orlando International Airport rental? </p>
                                </blockquote>
                            </div>
                            <footer class="post-list__item-footer">
                                <a href="single-post.html" class="btn">READ POST</a>
                                <div class="social-list">
                                    <ul class="social-list__icons">
                                        <li><a href="#"><i class="icon-facebook-logo"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter-letter-logo"></i></a></li>
                                        <li><a href="#"><i class="icon-google-plus"></i></a></li>
                                        <li><a href="#"><i class="icon-linkedin-logo"></i></a></li>
                                    </ul>
                                </div>
                            </footer>
                        </div>
                    </article>
                    <article class="post-list__item format-gallery">
                        <div class="swiper-container-slider-format swiper-container">
                            <div class="swiper-wrapper">
                                <figure class="thumbnail post-list__thumbnail swiper-slide">
                                    <img src="assets/images/blog-post-img-2.jpg" alt="">
                                </figure>
                                <figure class="thumbnail post-list__thumbnail swiper-slide">
                                    <img src="assets/images/blog-post-img-3.jpg" alt="">
                                </figure>
                                <figure class="thumbnail post-list__thumbnail swiper-slide">
                                    <img src="assets/images/blog-post-img-4.jpg" alt="">
                                </figure>
                            </div>
                            <div class="swiper-pagination swiper-pagination-slider-format"></div>
                            <span class="swiper-button-next-blog swiper-button-next"><i class="icon-left-arrow2"></i></span>
                            <span class="swiper-button-prev-blog swiper-button-prev"><i class="icon-left-arrow"></i></span>
                        </div>
                        <div class="post-list__item-content">
                            <header class="post-list__item-header">
                                <div class="post-list__item-meta post-block_meta">
                                    <span class="date"><i class="icon-clock"></i> 10 February, 2017</span>
                                    <a href="#" class="comment"><i class="icon-social"></i>  3</a>
                                </div>
                                <h3 class="post-list__item-title">RentalCars's Cheap One-Way Car Rental Guide</h3>
                                <span class="post-list__item-author">by <a href="#">Paul Johnson</a></span>
                            </header>
                            <div class="post-list__item-desc">
                                <p>Leann Rimes bought a one-way ticket on a westbound train, to see how far she could go. Eventually, she might want to make a return trip back east! If she's collected a lot of new possessions while out west, the cheapest option might be a one-way rental vehicle, where she rents...</p>
                            </div>
                            <footer class="post-list__item-footer">
                                <a href="single-post.html" class="btn">READ POST</a>
                                <div class="social-list">
                                    <ul class="social-list__icons">
                                        <li><a href="#"><i class="icon-facebook-logo"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter-letter-logo"></i></a></li>
                                        <li><a href="#"><i class="icon-google-plus"></i></a></li>
                                        <li><a href="#"><i class="icon-linkedin-logo"></i></a></li>
                                    </ul>
                                </div>
                            </footer>
                        </div>
                    </article>
                    <article class="post-list__item format-audio">
                        <figure class="thumbnail post-list__thumbnail audio-thumb">
                            <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/197377286&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                        </figure>
                        <div class="post-list__item-content">
                            <header class="post-list__item-header">
                                <div class="post-list__item-meta post-block_meta">
                                    <span class="date"><i class="icon-clock"></i> 10 February, 2017</span>
                                    <a href="#" class="comment"><i class="icon-social"></i>  3</a>
                                </div>
                                <h3 class="post-list__item-title">Can I Receive Disability Accommodations</h3>
                                <span class="post-list__item-author">by <a href="#">Paul Johnson</a></span>
                            </header>
                            <div class="post-list__item-desc">
                                <p>Leann Rimes bought a one-way ticket on a westbound train, to see how far she could go. Eventually, she might want to make a return trip back east! If she's collected a lot of new possessions while out west, the cheapest option might be a one-way rental vehicle, where she rents...</p>
                            </div>
                            <footer class="post-list__item-footer">
                                <a href="single-post.html" class="btn">READ POST</a>
                                <div class="social-list">
                                    <ul class="social-list__icons">
                                        <li><a href="#"><i class="icon-facebook-logo"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter-letter-logo"></i></a></li>
                                        <li><a href="#"><i class="icon-google-plus"></i></a></li>
                                        <li><a href="#"><i class="icon-linkedin-logo"></i></a></li>
                                    </ul>
                                </div>
                            </footer>
                        </div>
                    </article>
                    <article class="post-list__item format-link">
                        <figure class="thumbnail post-list__thumbnail link-thumb">
                            <a href="single-post.html"><img src="assets/images/blog-post-img-5.jpg" alt=""></a>
                            <a href="index.html" class="post-link">http://www.rentalcarslink.com</a>
                        </figure>
                        <div class="post-list__item-content">
                            <header class="post-list__item-header">
                                <div class="post-list__item-meta post-block_meta">
                                    <span class="date"><i class="icon-clock"></i> 10 February, 2017</span>
                                    <a href="#" class="comment"><i class="icon-social"></i>  3</a>
                                </div>
                                <h3 class="post-list__item-title">The Fee Detective and the Grace of Rental Car Companies</h3>
                                <span class="post-list__item-author">by <a href="#">Paul Johnson</a></span>
                            </header>
                            <div class="post-list__item-desc">
                                <p>Leann Rimes bought a one-way ticket on a westbound train, to see how far she could go. Eventually, she might want to make a return trip back east! If she's collected a lot of new possessions while out west, the cheapest option might be a one-way rental vehicle, where she rents...</p>
                            </div>
                            <footer class="post-list__item-footer">
                                <a href="single-post.html" class="btn">READ POST</a>
                                <div class="social-list">
                                    <ul class="social-list__icons">
                                        <li><a href="#"><i class="icon-facebook-logo"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter-letter-logo"></i></a></li>
                                        <li><a href="#"><i class="icon-google-plus"></i></a></li>
                                        <li><a href="#"><i class="icon-linkedin-logo"></i></a></li>
                                    </ul>
                                </div>
                            </footer>
                        </div>
                    </article>
                    <div class="pagination">
                        <ul>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </div></div>
                <aside class="col-xs-12 col-md-3 sidebar" id="sidebar">
                    <div class="sidebar-block">
                        <h3>Archive</h3>
                        <div class="calendar">
                            <div class="calendar__header">November 2017</div>
                            <table>
                                <tr>
                                    <th>M</th>
                                    <th>T</th>
                                    <th>W</th>
                                    <th>T</th>
                                    <th>F</th>
                                    <th>S</th>
                                    <th>S</th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>5</td>
                                    <td>6</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>8</td>
                                    <td>9</td>
                                    <td>10</td>
                                    <td>11</td>
                                    <td>12</td>
                                    <td>13</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>15</td>
                                    <td>16</td>
                                    <td class="selected">17</td>
                                    <td>18</td>
                                    <td>19</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>22</td>
                                    <td>23</td>
                                    <td>24</td>
                                    <td>25</td>
                                    <td>26</td>
                                    <td>27</td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>29</td>
                                    <td>30</td>
                                    <td>31</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>
                            <div class="calendar__footer"><a href="#">« Sep</a></div>
                        </div>
                    </div>
                    <div class="sidebar-block">
                        <h3>Post Categories</h3>
                        <ul class="list-categories">
                            <li><a href="#">Audios</a> <span class="count">(2)</span></li>
                            <li><a href="#">Daily Inspiration</a> <span class="count">(7)</span></li>
                            <li><a href="#">Freelance</a> <span class="count">(3)</span></li>
                            <li><a href="#">Links</a> <span class="count">(1)</span></li>
                            <li><a href="#">Mobile</a> <span class="count">(1)</span></li>
                            <li><a href="#">Photography </a> <span class="count">(5)</span></li>
                            <li><a href="#">Quotes</a> <span class="count">(1)</span></li>
                            <li><a href="#">Resources</a> <span class="count">(3)</span></li>
                            <li><a href="#">Status</a> <span class="count">(2)</span></li>
                        </ul>
                    </div>
                    <div class="sidebar-block">
                        <h3>Popular tags</h3>
                        <ul class="list-tags">
                            <li><a href="#">Car</a></li>
                            <li><a href="#">Rentals</a></li>
                            <li><a href="#">Mobile App</a></li>
                            <li><a href="#">Cheap Rental Cars</a></li>
                            <li><a href="#">Thrifty</a></li>
                            <li><a href="#">Online Booking</a></li>
                            <li><a href="#">Airport Rentals</a></li>
                            <li><a href="#">Rental Rates</a></li>
                            <li><a href="#">Auto</a></li>
                        </ul>
                    </div>
                    <div class="sidebar-block">
                        <h3>Featured Posts</h3>
                        <div class="post-block">
                            <figure class="thumbnail">
                                <a href="single-post.html"><img src="assets/images/post-thumb_small-1.jpg" alt=""></a>
                            </figure>
                            <div class="post-block__content">
                                <div class="post-block_meta">
                                    <span class="date"><i class="icon-clock"></i> 10 February, 2017</span>
                                    <a href="#" class="comment"><i class="icon-social"></i>  3</a>
                                </div>
                                <h4>International Airport Car Rental Guide</h4>
                            </div>
                        </div>
                        <div class="post-block">
                            <figure class="thumbnail">
                                <a href="single-post.html"><img src="assets/images/post-thumb_small-2.jpg" alt=""></a>
                            </figure>
                            <div class="post-block__content">
                                <div class="post-block_meta">
                                    <span class="date"><i class="icon-clock"></i> 10 February, 2017</span>
                                    <a href="#" class="comment"><i class="icon-social"></i>  3</a>
                                </div>
                                <h4>Tampa Airport Rental Car Facility Delayed</h4>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </main>

@endsection
