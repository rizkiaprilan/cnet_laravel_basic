<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>{{ Auth::user()->name }}</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Playing</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                  </span>
            </div>
          </form>
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">NAVIGATION</li>

            @switch(Auth::user()->role)
            @case(1)

                <li><a href="/">
                    <i class="fa fa-dashboard"></i>
                    <span>Home</span></a></li>

                <li><a href="/faculty">
                    <i class="fa fa-book"></i>
                    <span>Faculty</span></a></li>

                <li><a href="/majority">
                    <i class="fa fa-book"></i>
                    <span>Majority</span></a></li>

                <li><a href="/student">
                    <i class="fa fa-book"></i>
                    <span>Students</span></a></li>

                <li><a href="/club">
                    <i class="fa fa-book"></i>
                    <span>Student Clubs</span></a></li>

                <li><a href="/card">
                    <i class="fa fa-book"></i>
                    <span>Student Cards</span></a></li>

                <li><a href="/credit">
                    <i class="fa fa-book"></i>
                    <span>Student Credits</span></a></li>

                @break

            @case(2)

                <li><a href="/faculty">
                    <i class="fa fa-book"></i>
                    <span>Faculty</span></a></li>

                <li><a href="/majority">
                    <i class="fa fa-book"></i>
                    <span>Majority</span></a></li>

                <li><a href="/student">
                    <i class="fa fa-book"></i>
                    <span>Students</span></a></li>

                <li><a href="/dummy">
                    <i class="fa fa-book"></i>
                    <span>Data Dummy</span></a></li>

                @break
            @default
                @break

        @endswitch

            {{-- <li><a href="/product">
                <i class="fa fa-dashboard"></i>
                <span>Our Product</span></a></li> --}}

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
