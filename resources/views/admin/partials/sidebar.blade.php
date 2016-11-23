<!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <li class="{!! ($section == 'users') ? 'active': ''!!}">
                <a href="{{ route('admin.users') }}"><i class='fa fa-user'></i> <span>Usuários</span></a>
            </li>
            <li class="{!! ($section == 'posts') ? 'active': ''!!}">
                <a href="{{ route('admin.posts') }}"><i class='fa fa-instagram'></i> <span>Posts Instagram</span></a>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>



