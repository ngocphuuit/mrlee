<nav class="navbar">
  <div class="container">
    <div class="navbar-header">
      <button class="collapsed navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-scrollspy">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#home" class="navbar-brand"><img src="/img/logo.png" alt="logo"></a>
    </div>
    <div class="collapse navbar-collapse bs-example-js-navbar-scrollspy">
      <ul id="nav" class="nav navbar-nav">
        <li><a href="{{ Request::is('/') ? '#home' : '/#home' }}">Trang chủ</a></li>
        <li>
          <a href="{{ Request::is('/') ? '#gallery' : '/#gallery' }}">Album</a>
        </li>
        <li><a href="{{ Request::is('/') ? '#managent' : '/#managent' }}">Dịch Vụ</a></li>
        <li><a href="{{ Request::is('/') ? '#blog' : '/#blog' }}">Blog</a></li>
        <li><a href="{{ Request::is('/') ? '#story' : '/#story' }}">Giới Thiệu</a></li>
        <li><a href="{{ Request::is('/') ? '#event' : '/#event' }}">Bảng giá</a></li>
        <li><a href="{{ Request::is('/') ? '#contact' : '/#contact' }}">Liên Hệ</a></li>
      </ul>
    </div>
  </div>
</nav>