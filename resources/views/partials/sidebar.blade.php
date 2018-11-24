    <!-- start: sidebar -->
    <aside id="sidebar-left" class="sidebar-left">
        
        <div class="sidebar-header">
            <div class="sidebar-title">
                Navigation
            </div>
            <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>
    
        <div class="nano">
            <div class="nano-content">
                <nav id="menu" class="nav-main" role="navigation">
                    <ul class="nav nav-main">
                        <li class="nav-active">
                            <a href="{{ url('/dashboard') }}">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <span>Dashboard</span>
                            </a>
                        </li><!--
                        <li>
                            <a href="mailbox-folder.html">
                                <span class="pull-right label label-primary">182</span>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>Mailbox</span>
                            </a>
                        </li>-->
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-hospital-o" aria-hidden="true"></i>
                                <span>Hospitals</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="{{ url('/hospitals') }}">
                                        List Hospitals
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/hospitals/create') }}">
                                        Register Hospital
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-exchange" aria-hidden="true"></i>
                                <span>Referrals</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="{{ url('/referrals') }}">
                                         List Referrals
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                         ...
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-user-md" aria-hidden="true"></i>
                                <span>Physicians</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="{{ url('/physicians') }}">
                                         List Physicians
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/new-physician') }}">
                                         Register Patient
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-wheelchair" aria-hidden="true"></i>
                                <span>Patients</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="{{ url('/patients') }}">
                                         List Patients
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/new-patient') }}">
                                         Register Patient
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-users" aria-hidden="true"></i>
                                <span>Users</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="{{ url('/users') }}">
                                         Manage Users 
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/new-admin') }}">
                                         Add User Admin
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>

                <hr class="separator" />
            </div>
        </div>
    </aside>
    <!-- end: sidebar -->