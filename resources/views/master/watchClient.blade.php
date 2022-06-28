<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
          crossorigin="anonymous">
{{--    <link rel="stylesheet" href="{{asset('css/site.css')}}">--}}
    <title>Watch</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/favicon.png')}}"/>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

  <!-- Core theme CSS (includes Bootstrap)-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
  <link href="{{asset('css/chat.css')}}" rel="stylesheet" />



</head>

<body>
<header>
@include('partials.watchNavClient')
@include('partials.header')
</header>

<main role="main">
    @yield('main')
</main>

<div role="other">
    @yield('other')
</div>

<div id='chat-box'>
  <div id='chat-top'>Chat with cheap genuine Aura-Watch <i class="bi bi-watch"></i><span id='chat-top-right'><svg id='close-box' xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 48 48"><path d="M38 12.83L35.17 10 24 21.17 12.83 10 10 12.83 21.17 24 10 35.17 12.83 38 24 26.83 35.17 38 38 35.17 26.83 24z" fill='#fff'/></svg></span><div class='clear'></div></div>
  <div id='chat-msg'><p style="font-weight: bold">Hello ! Please leave a message, the Aura Watch will help you ! <i class="bi bi-person-heart"></i><!doctype html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
      </head>
      <body>

      </body>
      </html></p>
    <div id='chat-form'>
      <div class='chat-in'>
        <input type='text' id='whats-in' Placeholder='Send Your Message...'/></div><div id='send-btn'>
{{--        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 48 48"><path d="M4.02 42L46 24 4.02 6 4 20l30 4-30 4z" fill='rgb(18, 140, 126)'/></svg>--}}
      <a> <img src="https://cdn-icons-png.flaticon.com/512/3814/3814305.png" width="" height="33" viewBox="1 1 50 50" style="margin-right:10rem" > </a>
      </div></div>
  </div>
</div>
<div id='whats-chat'>
{{--  <svg xmlns="http://www.w3.org/2000/svg" version="1" width="35" height="35" viewBox="0 0 90 90"><path d="M90 44a44 44 0 0 1-66 38L0 90l8-24A44 44 0 0 1 46 0c24 0 44 20 44 44zM46 7C25 7 9 24 9 44c0 8 2 15 7 21l-5 14 14-4a37 37 0 0 0 58-31C83 24 66 7 46 7zm22 47l-2-1-7-4-3 1-3 4h-3c-1 0-4-1-8-5-3-3-6-6-6-8v-2l2-2 1-1v-2l-4-8c0-2-1-2-2-2h-2l-3 1c-1 1-4 4-4 9s4 11 5 11c0 1 7 12 18 16 11 5 11 3 13 3s7-2 7-5l1-5z" fill="#FFF"/></svg>--}}
  <a> <img src="https://icons.iconarchive.com/icons/johanchalibert/mac-osx-yosemite/256/messages-icon.png" version="1" width="35" height="35" viewBox="0 0 90 90"> <path d="M90 44a44 44 0 0 1-66 38L0 90l8-24A44 44 0 0 1 46 0c24 0 44 20 44 44zM46 7C25 7 9 24 9 44c0 8 2 15 7 21l-5 14 14-4a37 37 0 0 0 58-31C83 24 66 7 46 7zm22 47l-2-1-7-4-3 1-3 4h-3c-1 0-4-1-8-5-3-3-6-6-6-8v-2l2-2 1-1v-2l-4-8c0-2-1-2-2-2h-2l-3 1c-1 1-4 4-4 9s4 11 5 11c0 1 7 12 18 16 11 5 11 3 13 3s7-2 7-5l1-5z" fill="#FFF"/></a>
</div>
<style>
  body{width:100%}
  *{margin:0px;padding:0px;box-sizing:border-box;}
  #whats-chat{position:fixed;right:3%;bottom:10%;height:auto;width:auto;background:#818183;padding:12.5px;border-radius:50px;}
  #whats-chat:hover{cursor:pointer;box-shadow:2px 2px 15px #ccc;bottom:11%;}
  /*===============================*/
  #chat-box{position:fixed;right:-500px;bottom:18%;width:250px;height:200px;transition:all .5s;}
  #chat-top{width:100%;line-height:2;background:darkgray;color:white;text-align:center;border-radius:5px 5px 0 0;padding:0 10px;}
  #chat-msg{background:#ece5dd;padding:10px;border-radius:0 0 5px 5px;box-shadow:0 0 25px -10px #999;}
  #chat-msg p{font-size:12px;padding:5px;background:white;border-radius:0 50px 50px 50px;margin-bottom: 135px;}
  #chat-form{display:flex;}
  .chat-in{width:80%;}
  #chat-form input{border-radius:5px 0 5px 5px;border:none;outline:none;font-size:14px;padding:5px;line-height:2;}
  #send-btn{width:20%;padding: 0 5px;}
  #chat-top-right{float:right;padding:5px 0;}
  #chat-box:after{content:'';
    position: absolute;
    top:58%;
    left: 90%;
    width: 0;
    height: 0;
    border-top: 25px solid transparent;
    border-bottom: 25px solid transparent;

    border-right:25px solid #ece5dd;}
  .right{float:right}
  .clear{clear:both}
</style>
<script>
  document.getElementById('whats-chat').addEventListener("mouseover", showchatbox);
  document.getElementById('chat-top-right').addEventListener("click", closechatbox);
  document.getElementById('send-btn').addEventListener("click", sendmsg);
  window.addEventListener("load", showchatboxtime);
  function showchatbox(){
    document.getElementById('chat-box').style.right='8%'
  }
  function closechatbox(){
    document.getElementById('chat-box').style.right='-500px'


  }
  function showchatboxtime(){
    setTimeout(launchbox,5000)
  }
  function launchbox(){
    document.getElementById('chat-box').style.right='8%'

  }
  function sendmsg(){
    var msg = document.getElementById('whats-in').value;
    var relmsg = msg.replace(/ /g,"%20");
    window.open('https://www.facebook.com/Aura-Watch-112254041526996'+relmsg,'_blank');

  }
</script>
<!-- Footer-->
<footer class="footer py-4" >
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2022</div>
            <div class="col-lg-4 my-3 my-lg-0">
                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/Aura-Watch-112254041526996" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
            </div>
        </div>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{asset('js/scripts.js')}}"></script>
<script src="{{asset('js.chat.js')}}"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>
