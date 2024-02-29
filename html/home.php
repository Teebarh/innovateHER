<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../../styles/home.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Maternify</title>
  </head>
  <body>
    <div class="allContent">
      <nav>
        <h2>Today</h2>
        <ul class="main">
          <li>
            <img src="../../assets/profileIcon.svg" alt="" /> 
          </li>
          <li onclick={toggleNav()}>
            <img src="../../assets/navIcon.svg" alt="" />
          </li>
        </ul>
          
          <li class="nav-open" id="nav">
            <ul>
              <a href="../Dashboard/profile.html">
                <li>
                  <img src="../../assets/profileIcon.svg" alt="" />
                  <p>Profile</p>
                </li>
              </a>
              <li>
                <img src="../../assets/calendarIcon.png" alt="" />
                <p>Calendar</p>
              </li>
             <a href="../Dashboard/articles.html">
               <li>
                  <img src="../../assets/articlesIcon.svg" alt="" />
                  <p>Articles</p>
                </li>
             </a>
              <a href="../login.html">
                <li>
                  <img src="../../assets/logoutIcon.svg" alt="" />
                  <p>Log out</p>
                </li>
              </a>
            </ul>
          </li>
      </nav>

      <div class="calendar">
        <!-- <div class="header">
          <h2>Calendar</h2>
          <p>See full view  <img src="../../assets/calendarIcon.png" alt="" /> </p>
        </div>                      -->
        <div class="calendarContent">
          <div class="calendarDay">
            <h3>S</h3>
            <p>11</p>
          </div>
          <div class="calendarDay">
            <h3>M</h3>
            <p class="active">12</p>
          </div>
          <div class="calendarDay">
            <h3>T</h3>
            <p>13</p>
          </div>
          <div class="calendarDay">
            <h3>W</h3>
            <p>14</p>
          </div>
          <div class="calendarDay">
            <h3>Th</h3>
            <p>15</p>
          </div>
          <div class="calendarDay">
            <h3>F</h3>
            <p>16</p>
          </div>
          <div class="calendarDay">
            <h3>S</h3>
            <p>17</p>
          </div>
      </div>
    </div>

    <div class="mainArticle">
        <a href="">
            <p class="button">
                Learn More
                <img src="../../assets/bookIcon.svg" alt="">
            </p>
            <div class="timeline">
                <h2>Day 40</h2>
                <p class="edit">Edit</p>
            </div>
        </a>
    </div>

    <div class="symptoms">
        <h2>Daily Symptoms</h2>
        <section>
          <div class="circles">
            <div class="circle">
              <div class="first"></div>
            </div>
            <div class="circle">
              <div class="second"></div>
            </div>
            <div class="circle">
                <div class="main">+5</div>
            </div>
        </div>
          <div class="addSymptoms">
            +
          </div>
        </section>
    </div>

    <section class="articles">
        <div class="header">
            <h2>Articles</h2>
            <a href="../../html/Dashboard/articles.html">
              <p>Discover <img src="../../assets/discoverIcon.png" alt=""></p>
            </a>
        </div>
        <ul class="article">
          <li>
            <div class="tag"><img src="../../assets/articlesIcon.svg" alt="tag">Articles</div>
            <h2>Body Changes</h2>
          </li>
          <li class="second">
            <div class="tag"><img src="../../assets/articlesIcon.svg" alt="tag">Articles</div>
            <h2>Body Changes</h2>
          </li>
        </ul>
        <ul class="article">
          <li>
            <div class="tag"><img src="../../assets/articlesIcon.svg" alt="tag">Articles</div>
            <h2>Body Changes</h2>
          </li>
          <li class="second">
            <div class="tag"><img src="../../assets/articlesIcon.svg" alt="tag">Articles</div>
            <h2>Body Changes</h2>
          </li>
        </ul>
    </section>
  </body>
  <script src="../../script/home.js"></script>
</html>
