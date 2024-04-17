<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    html,
    body {
        margin: 0px;
        padding: 0px;
        font-size: 16px;
        font-family: "Ubuntu", sans-serif;
        scroll-behavior: smooth;
        overflow-x: hidden;
    }
    .wrapper{
        width: 1024px;
        margin: auto;
        padding: 20px 0px 20px 0px;
    }
    nav {
        background-color: #161A30;
        color: #fff;
        position: sticky;
        top: 0;
        z-index: 100;
    }
    nav > .wrapper {
        display: flex;
        justify-content: space-between;
        font-size: 1.2rem;
        align-items: center;
    }

    .menu{
        width: 50%;
    }

    .menu > ul {
        display: flex;
        list-style-type: none;
        margin: 0px;
        padding: 0px;
        justify-content: space-between;
    }

    .menu > ul > li > a{
        text-decoration: none;
        color: #fff;
    }

    .logo{
        display: flex;
        align-items: center;
    }

    .logo > img{
        height: 55px;
    }

    footer{
        background-color: #161A30;
        text-align: center;
        color: #fff;
    }

    footer > .wrapper {
        padding: 30px 0px 30px 0px;
    }

      @media only screen and (max-width: 1024px) {
        .wrapper {
            width: 90%;
        }
        #aboutme > .wrapper > div > .pfp {
            width: 50%;
        }

        #aboutme > .wrapper > div > .pfp > img{
            max-width: 100%;
        }
        #aboutme > .wrapper > div > .desc {
            width: 70%;
            padding: 20px;
            margin: 10px;
        }   
        #aboutme > .wrapper > div {
            width: 100%;
        }
      }

      @media only screen and (max-width: 900px) {
        #fav > .wrapper > div > p {
            font-size: 2.5rem;
            margin: 0px;
            padding: 0px;
        }
        .grid {
            grid-template-columns: 45% 45%;
        }
        .item > img {
            width: 8%;
        }
        .grid2 > .item2 > img {
            margin-right: 30px;
            width: 30%;
        }
      }

      @media only screen and (max-width: 768px) {
          .menu {
              width: 60%;
          }

          #aboutme > .wrapper > div {
              width: 100%;
          }
          .grid2 > .item2 > img {
              margin-right: 20px;
              width: 30%;
          }


      }

      @media only screen and (max-width: 600px) {
          #aboutme > .wrapper > div {
              width: 100%;
              flex-direction: column;
          }
          #aboutme > .wrapper > div > .desc > .social{
              margin: auto;
          }
          .grid2 > .item2 > img {
              margin-right: 20px;
              width: 30%;
          }
          button.hamburgmenu {
              display: inline;
          }
          .menu {
              display: none;
          }
      }

      @media only screen and (max-width: 600px){
          .grid2 > .item2 > img {
              margin-right: 5px;
              width: 35%;
          }
          .tampil {
              display: inline;
          }
          .tampil > ul {
              flex-direction: column;
              background-color: #000;
              width: 100%;
              position: fixed;
              top: 90px;
              left: 0;
          }
          .tampil > ul > li {
              padding: 10px 20px 10px 20px;

          }

          .itemdetail {
              display: flex;
              align-items: center;
              flex-direction: column;
              justify-content: center;
              text-align: center; /* Optional: To center-align text */
          }


          .item2 .itemdetail p {
              display: none;
          }
      }



  </style>
  
</head>
<body>
          <nav>
            <div class="wrapper">
                <div class="logo">
                    <img src="{{asset('img/inabakumorilogo.png')}}">
                </div>
                <div class="menu">
                    <ul>
                        <li class="{{(Request::is('varqse/homepage'))?'active':''}}"><a href="{{url('varqse/homepage')}}">Main</a></li>
                        <li class="{{(Request::is('varqse/projects'))?'active':''}}"><a href="{{url('varqse/projects')}}">Projects</a></li>
                    </ul>
                </div>
            </div>
          </nav>
    @yield('container')
          <footer>
            <div class="wrapper">&copy; 2024 Varqse </div>
          </footer>
</body>
</html>
