<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1, width=device-width">
  <link rel="stylesheet" href="./global4.css">
  <link rel="stylesheet" href="./signin.css">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Work Sans:ital,wght@0,400;0,600;1,900&amp;display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Space Mono:wght@700&amp;display=swap">
  <title></title>
</head>

<body>
  <div class="create-account-sign-in">
    <header class="navigation">
      <div class="nav-logo" id="navLogo">
        <img class="bird-2-removebg-preview-1-icon" loading="lazy" alt="logo" src="assets/logo.png">
        <h3 class="careerotaku">CareerOtaku</h3>
      </div>
      <div class="nav-nav-menu">
        <div class="marketplace">
          <img class="rocketlaunch-icon" alt="rocket" src="assets/rocket.png">
          <div class="button">
            Career Test
          </div>
        </div>
        <div class="rankings">
          <img class="rocketlaunch-icon1" alt="rocket" src="assets/rocket.png">
          <div class="button1">
            Job Search
          </div>
        </div>
        <div class="connect-a-wallet">
          <img class="rocketlaunch-icon2" alt="rocket" src="assets/rocket.png">
          <div class="button2">
            Profile
          </div>
        </div><button class="sign-up"><img class="user-icon" alt="user" src="assets/user.png">
          <div class="button3">
            Sign Up
          </div>
        </button>
      </div>
    </header>
    <section class="create-account-section">
      <img class="image-placeholder-icon" loading="lazy" alt="sign" src="assets/sign.png">
      <div class="create-account-form">
        <div class="headline-subhead">
          <div class="headline-subhead1">
            <div class="headline">
              <h1 class="create-account">Create account</h1>
            </div>
            <div class="subhead">
              <h3 class="welcome-enter-your">Welcome! enter your details and start to enhance your Future</h3>
            </div>
          </div>
        </div>
        <form class="form">
          <div class="typeforms">
            <div class="type-form"><img class="user-icon1" alt="user" src="assets/user.png"> <input class="username"
                placeholder="Username" type="text"> <img class="eyeslash-icon" alt="eye" src="assets/eye.png"></div>
            <div class="type-form1"><img class="envelopesimple-icon" alt="email" src="assets/email.png"> <input
                class="username1" placeholder="Email Address" type="text"> <img class="eyeslash-icon1" alt="eye"
                src="assets/eye.png"></div>
            <div class="type-form2"><img class="lockkey-icon" alt="lockkey" src="assets/lock.png"> <input
                class="username2" placeholder="Password" type="text"> <img class="eyeslash-icon2" alt="eye"
                src="assets/eye.png"></div>
            <div class="type-form3"><img class="lockkey-icon1" alt="lock" src="assets/lock.png"> <input
                class="username3" placeholder="Confirm Password" type="text"> <img class="eyeslash-icon3" alt="eye"
                src="assets/eye.png"></div>
          </div><button class="button4" id="button"><img class="rocketlaunch-icon3" alt="rocket"
              src="assets/rocket.png">
            <div class="button5">
              Create account
            </div>
          </button> 
          
        </form>
        <button class="button6" id="button1" onclick="test()"><img class="rocketlaunch-icon4" alt="rocket"
          src="assets/rocket.png">
        <div class="button7">
          Already have an account
        </div>
      </button>
      </div>
    </section>
    <footer class="footer">
      <div class="footer-info">
        <div class="nft-marketplace-info">
          <div class="nav-logo1">
            <img class="bird-2-removebg-preview-1-icon1" loading="lazy" alt="logo" src="assets/logo.png">
            <h3 class="careerotaku1">CareerOtaku</h3>
          </div>
          <div class="additional-info">
            <div class="a-place-to">
              A place to find yourself
            </div>
            <div class="community-info">
              <div class="join-our-community">
                Join our community
              </div>
              <div class="icons"><img class="discordlogo-icon" loading="lazy" alt="tele" src="assets/tele.png"
                  id="discordLogoIcon"> <img class="youtubelogo-icon" loading="lazy" alt="you" src="assets/you.png"
                  id="youtubeLogoIcon"> <img class="twitterlogo-icon" loading="lazy" alt="whatsapp"
                  src="assets/whatsapp.png" id="twitterLogoIcon"> <img class="instagramlogo-icon" loading="lazy"
                  alt="insta" src="assets/insta.png" id="instagramLogoIcon"></div>
            </div>
          </div>
        </div>
        <div class="explore">
          <h3 class="explore1">Explore</h3>
          <div class="pages">
            <div class="career-test">
              Career Test
            </div>
            <div class="job-search">
              Job Search
            </div>
          </div>
        </div>
        <div class="subscribe">
          <h3 class="contact-us">Contact us</h3>
          <div class="subscribe-form-info">
            <div class="write-your-quries">
              Write your quries
            </div>
            <div class="subscribe-form">
              <div class="enter-your-email">
                Write your Queriees
              </div><button class="button8" id="button2"><img class="envelopesimple-icon1" alt="email"
                  src="assets/email.png">
                <div class="button9">
                  Email us
                </div>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright-area">
        <div class="divider"></div>
        <div class="nft-market-use">
          Ⓒ NFT Market. Use this template freely.
        </div>
      </div>
    </footer>
  </div>
  <script>
    var navLogo = document.getElementById("navLogo");
    if (navLogo) {
      navLogo.addEventListener("click", function (e) {
        // Please sync "CareerOtaku" to the project
        window.location.href = "careerotaku.html"

      });
    }

    var button = document.getElementById("button");
    if (button) {
      button.addEventListener("click", function (e) {
        // Please sync "Profile" to the project
        window.location.href = "profile.html"

      });
    }

    function test() {
      window.location.href = "http://127.0.0.1:5500/login.html"
    }

    var discordLogoIcon = document.getElementById("discordLogoIcon");
    if (discordLogoIcon) {
      discordLogoIcon.addEventListener("click", function () {
        window.open("https://t.me/+125WY9rDlIQ3YzI1");
      });
    }

    var youtubeLogoIcon = document.getElementById("youtubeLogoIcon");
    if (youtubeLogoIcon) {
      youtubeLogoIcon.addEventListener("click", function () {
        window.open("https://youtube.com/@user-vx9ps6dx6j?si=vBeSAT4pNS0RmQkQ");
      });
    }

    var twitterLogoIcon = document.getElementById("twitterLogoIcon");
    if (twitterLogoIcon) {
      twitterLogoIcon.addEventListener("click", function () {
        window.open("https://chat.whatsapp.com/GjA2bM8lCRk48ER2Kk7L97");
      });
    }

    var instagramLogoIcon = document.getElementById("instagramLogoIcon");
    if (instagramLogoIcon) {
      instagramLogoIcon.addEventListener("click", function () {
        window.open(
          "https://www.instagram.com/career_guidance_platform?utm_source=qr&igsh=amtreGx3djFubjg4"
        );
      });
    }

    const button2 = document.getElementById("button2");
    if (button2) {
      button2.addEventListener("click", function () {
        window.location.href = "mailto:guidingcareerpaths@gmail.com";
      });
    }
  </script>
</body>

</html>