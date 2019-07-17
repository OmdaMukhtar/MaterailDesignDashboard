<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
      <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        Creative Tim
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item active  ">
          <a class="nav-link" href="{{ url('admin/dashboard') }}">
            <i class="material-icons">dashboard</i>
            <p>لوحة التحكم</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ url('profile') }}">
            <i class="material-icons">person</i>
            <p>الملف الشخصي</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ url('tables') }}">
            <i class="material-icons">tables</i>
            <p>الجداول</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ url('typography') }}">
            <i class="material-icons">lib_</i>
            <p>Typography</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ url('icons') }}">
            <i class="material-icons">icons</i>
            <p>الإيقونات</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ url('notification') }}">
            <i class="material-icons">notifications</i>
            <p>الإشعارات</p>
          </a>
        </li>
      </ul>
    </div>
  </div>