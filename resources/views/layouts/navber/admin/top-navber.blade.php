<div class="header-advance-area">
    <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <!-- <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="icon nalika-menu-task"></i>
												</button>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n hd-search-rp">
                                            <div class="breadcome-heading">
												<form role="search" class="">
													<input type="text" placeholder="Search..." class="form-control">
													<a href=""><i class="fa fa-search"></i></a>
												</form>
											</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                          
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<!-- <i class="icon nalika-user"></i> -->
															<span class="admin-name"> <i class="fa fas fa-gear"></i> Settings</span>
															<!-- <i class="icon nalika-down-arrow nalika-angle-dw"></i> -->
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="\"><span class=""></span><i class="fa fa-home"></i> Home Page</a>
                                                        </li>
                                                        <li><a href="{{route('profile.index')}}"><span class=""></span> <i class="fa fas fa-user-circle"></i> Profile</a>
                                                        </li>
                                                        <li>
                                                        
                                                            <form method="POST" action="{{ route('logout') }}">
                                                                @csrf
                                                                <a href="" onclick="event.preventDefault(); this.closest('form').submit();"><span class=""></span><i class="fa fas fa-power-off"></i> Log Out</a>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</div>