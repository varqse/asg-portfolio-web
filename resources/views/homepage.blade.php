@extends('layout.master')
@section('container')
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    header {
    background: url('{{asset('img/binusmlg.jpeg')}}');
      height: 87vh;
      background-position: center center;
      background-size: cover;
      background-repeat: no-repeat;
      position: relative;
  }

  /*
  *aboutme
  */

  #aboutme {
      color: #333;
  }

  #aboutme > .wrapper {
      padding: 50px 0px 50px 0px;
  }

  #aboutme > .wrapper > div > .desc > h1 {
      font-size: 2.8rem;
      margin: 0px;
      padding: 0px;

  }

  #aboutme > .wrapper > div > .desc > h2{
      margin: 0px;
      padding: 0px;
      margin-bottom: 20px;
  }

  #aboutme > .wrapper > div {
      display: flex;
      width: 100%;
      margin: auto;
      justify-content: space-around;
      align-items: center;
  }

  #aboutme > .wrapper > div > .pfp {
      width: 37%;
      border-radius: 50%;
      overflow: hidden;
      border: 15px solid #161A30;
      box-shadow: 5px 7px 25px rgba(0,0,0,0.5);
  }

  #aboutme > .wrapper > div > .desc {
      width: 70%;
      padding: 20px;
      margin: 10px;
      background-color: #B2B2B2;
      border-radius: 20px;
      border: 15px solid #161A30;
      box-shadow: 5px 7px 25px rgba(0,0,0,0.5);
  }

  #aboutme > .wrapper > div > .desc > .social > a {
      color: #161A30;
  }

  #aboutme > .wrapper > div > .desc > .social{
      display: flex;
      width: 40%;
      justify-content: space-between;
      font-size: 1.3rem;
  }

  /*
  *
  */

  #fav {
      background-color: #B6BBC4;
      color: #161A30;
  }

  #fav > .wrapper {
      padding: 50;
      color: 80%;
      display: flex;
      justify-content: space-evenly;
  }

  #fav > .wrapper > div {
      text-align: center;
  }

  #fav > .wrapper > div > p {
      font-size: 3.5rem;
      margin: 0px;
      padding: 0px;
  }

  #fav > .wrapper > div > p > i {
      margin-right: 10px;
      font-size: 3.5rem;
  }

  #aboutme > .wrapper {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }

    .edit-button {
      background-color: #B2B2B2;
      color: white;
      padding: 10px 20px;
      border: 7px solid #161A30;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      margin-bottom: 50px;
  }

  .edit-button:hover {
      background-color: #B2B2B2;
      border-color: #161A30;
  }

</style>
</head>
<header id="aboutme">
            <div class="wrapper">

                <div>
                    <div class="pfp"><img src="{{asset('img/myself.jpg')}}" alt="profile"></div>
                    <div class="desc">
                        <h1>{{ $data->name }}</h1>
                        <h2>{{ $data->fullname }}</h2>
                        <p>{{ $data->text }}</p>
                        <br>
                        <div class="social">
                            <a href="https://twitter.com/varqse"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="https://www.instagram.com/ishvarapl/"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://open.spotify.com/user/31yn6e7chxib7zckbs7idnn74ocm?si=a146309414c24f92"><i class="fa-brands fa-spotify"></i></a>
                            <a href="https://www.youtube.com/channel/UCAoOnWIcjjvceCBsxJpENNA"><i class="fa-brands fa-youtube"></i></a>
                            <a href="https://steamcommunity.com/profiles/76561199380108374/"><i class="fa-brands fa-steam"></i></a>
                        </div>
                    </div>
                </div>

                <a href="{{ route('edit-profile') }}" class="edit-button">Edit Profile</a>

            </div>
        </header>
@stop