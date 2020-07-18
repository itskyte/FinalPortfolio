@extends('layouts.app')
@section('content')
<section class="news-single nav-arrow-b">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="news-img-box">
            <img src="assets/img/news1.jpeg" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
          <div class="post-information">
            <ul class="list-inline text-center color-a">
              <li class="list-inline-item mr-2">
                <strong>Author: </strong>
                <span class="color-text-a">Morgan Jimenez</span>
              </li>
              <li class="list-inline-item mr-2">
                <strong>Category: </strong>
                <span class="color-text-a">Travel</span>
              </li>
              <li class="list-inline-item">
                <strong>Date: </strong>
                <span class="color-text-a">19 Apr. 2017</span>
              </li>
            </ul>
          </div>
          <div class="post-content color-text-a">
            <span class="css-1f8uxyz"><p>Looking for freehold ownership in Phnom Penh? The Skyline's units can be owned for a low downpayment of  $25,000. The developer also offers loans payable up to 10 years with an annual interest rate of 6%. With 2 blocks of 39-storey residential towers complemented by a commercial plaza, The Skyline combines luxury and practicality like no other freehold property in the Kingdom today.
            </p><p>
            </p><p>The Skyline is a mixed-use development that combines luxury and practicality like no other freehold property in Cambodia today. It consists of 2 blocks of 39-storey residential towers complemented by an array from commercial areas, providing a total floor area of 90,444 sqm.
            </p><p>
            </p><p>Strategically located within the busy 7 Makara district, the Skyline offers convenient access to Phnom Penh’s many facets of business and entertainment while offering the simple luxury of a peaceful neighborhood. Several landmarks of the city are well within reach such as the Peace Palace, Vattanac Capital, Canadia Tower, Central Market, Olympia Mall, and the many bars &amp; restaurants by Riverside.
            </p><p>
            </p><p>The project’s residential towers offer 1 to 2 bedroom apartments with each floor having 14 units. Every unit comes standard with high-quality fixtures and fittings, also included are bedroom wardrobes, built-in kitchen cupboards complete with cooker hobs and exhaust hoods. Units also come with standard air conditioning and central water heating. The Skyline offers a total of 792 of these luxury units available for either sale or rent.
            </p><p>
            </p><p>The Skyline provides many amenities whether you’re looking to wind down after work or just want to spend a nice weekend at home. Residents can enjoy an expansive swimming pool, wading pool for kids, a fully-equipped gym, and a sky terrace with a BBQ area. A 3-storey commercial plaza within the Skyline complex provides most daily necessities for residents and more.
            </p><p>
            </p><p>The Skyline was finished in 2018, making it ideal for buyers looking for modern amenities and other facilities. Investors are also offered up to 30% guaranteed rental returns for 4 years. Freehold ownership of residential units is also available for both local and international buyers looking for property in Cambodia. Flexible payment options such as 20% downpayment and developer loans are also available from the developer.</p></span>
          </div>
          <div class="post-footer">
            <div class="post-share">
              <span>Share: </span>
              <ul class="list-inline socials">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-10 offset-md-1 col-lg-10 offset-lg-1">
          <div class="title-box-d">
            <h3 class="title-d">Comments (4)</h3>
          </div>
          <div class="box-comments">
            <ul class="list-comments">
              <li>
                <div class="comment-avatar">
                  <img src="assets/img/author-2.jpg" alt="">
                </div>
                <div class="comment-details">
                  <h4 class="comment-author">Emma Stone</h4>
                  <span>18 Sep 2017</span>
                  <p class="comment-description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                    ipsam temporibus maiores
                    quae natus libero optio, at qui beatae ducimus placeat debitis voluptates amet corporis.
                  </p>
                  <a href="3">Reply</a>
                </div>
              </li>
              <li class="comment-children">
                <div class="comment-avatar">
                  <img src="assets/img/author-1.jpg" alt="">
                </div>
                <div class="comment-details">
                  <h4 class="comment-author">Oliver Colmenares</h4>
                  <span>18 Sep 2017</span>
                  <p class="comment-description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                    ipsam temporibus maiores
                    quae.
                  </p>
                  <a href="3">Reply</a>
                </div>
              </li>
              <li>
                <div class="comment-avatar">
                  <img src="assets/img/author-2.jpg" alt="">
                </div>
                <div class="comment-details">
                  <h4 class="comment-author">Emma Stone</h4>
                  <span>18 Sep 2017</span>
                  <p class="comment-description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                    ipsam temporibus maiores
                    quae natus libero optio.
                  </p>
                  <a href="3">Reply</a>
                </div>
              </li>
            </ul>
          </div>
          <div class="form-comments">
            <div class="title-box-d">
              <h3 class="title-d"> Leave a Reply</h3>
            </div>
            <form class="form-a">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <label for="inputName">Enter name</label>
                    <input type="text" class="form-control form-control-lg form-control-a" id="inputName" placeholder="Name *" required>
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <label for="inputEmail1">Enter email</label>
                    <input type="email" class="form-control form-control-lg form-control-a" id="inputEmail1" placeholder="Email *" required>
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <div class="form-group">
                    <label for="inputUrl">Enter website</label>
                    <input type="url" class="form-control form-control-lg form-control-a" id="inputUrl" placeholder="Website">
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <div class="form-group">
                    <label for="textMessage">Enter message</label>
                    <textarea id="textMessage" class="form-control" placeholder="Comment *" name="message" cols="45" rows="8" required></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <button type="submit" class="btn btn-a">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection 	