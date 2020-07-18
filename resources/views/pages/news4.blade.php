@extends('layouts.app')
@section('content')
<section class="news-single nav-arrow-b">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="news-img-box">
            <img src="assets/img/news4.jpeg" alt="" class="img-fluid">
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
            <div class="css-1ob0g35 e1fxknr40"><h2>Vue Aston</h2><span class="css-1f8uxyz"><p>One of the most exciting project launches of 2020, Vue Aston offers a sleek space in a 38 storey building, each unit offers plenty of amenities and facilities that you need for a comfortable life in the city. 
            </p><p>
            </p><p>Why we chose this project
            </p><p>
            </p><p>1. Located right on the river bank with unobstructed views across the mekong river &amp; Diamond Island 
            </p><p>2. Right next door to the newly developing Norea Island, with a bridge already approved to connect to Koh Pich
            </p><p>3. 35% Guaranteed rental return over 5 years
            </p><p>4. Attractive starting price, payment terms &amp; bank loan available
            </p><p>
            </p><p>The Vue Aston project was developed by Peninsula Capital, and was jointly created and carefully designed by HKS Architects, the world’s top ten US, and the Golden Mantis Decoration Design Company of Internationally renowned, with luxury apartments as terminal products for the real estate market.
            </p><p>
            </p><p>The project is located in the Nirouth subdistrict of Tieqiaotou district, the core area of the main city of Phnom Penh. Within three years, the area will be completed as a bridge connecting Diamond Island and Gandong New District. By then, the owners of Vue Aston will be able to reach Phnom Penh city centre within a few minutes.
            </p><p>
            </p><p>At present, the project is surrounded by many cafes, shopping malls, banks and restaurants, and it has the geographical advantage of absolute convenience. The first phase of the project has a total of 38 floors, and the developer integrates the world's top hotel facilities and services into one, providing each owner with super first-class facilities and other comfortable living services:
            </p><p>
            </p><p>- The floor area of the project ranges from 39.69 square meters to 91.42 square meters.
            </p><p>-  First-class property, all-round housekeeping service.
            </p><p>-  Convenient parking service, large parking area and spacious entrance and exit.
            </p><p>-  Provide chartered rents with annual rental returns of 5%-9% (increasing year by year).</p></span></div>
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