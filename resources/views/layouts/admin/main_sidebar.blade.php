<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
      <img src="{{asset('/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Lê Minh Nghĩa</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
      </div>
    </form>
    <!-- /.search form -->
    
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">HEADER</li>
      <!-- Optionally, you can add icons to the links -->
      
      <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Thông tin liên quan sách</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('author.index')}}">Tác giả</a></li>
          <li><a href="{{route('bookcompany.index')}}">Công ty phát hành</a></li>
          <li><a href="{{route('publishinghouse.index')}}">Nhà xuất bản</a></li>
          <li><a href="{{route('type.index')}}">Loại sách</a></li>
          <li><a href="{{route('category.index')}}">Hạng mục sách</a></li>
          <li><a href="{{route('genre.index')}}">Thể loại nghệ thuật sách</a></li>
        </ul>
      </li>

      <li><a href="#"><i class="fa fa-link"></i> <span>Sách</span></a></li>
      
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
