<div class="container wide-xl">
    <div class="nk-content-inner">
        <div class="nk-aside" data-content="sideNav" data-toggle-overlay="true" data-toggle-screen="lg"
             data-toggle-body="true">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-heading">
                        <h6 class="overline-title">Menu</h6>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ route('account.dashboard') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                            <span class="nk-menu-text">{{ __('Dashboard') }}</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ route('profile', [auth()->user()->id]) }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-user"></em></span>
                            <span class="nk-menu-text">{{ __('Profile') }}</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ route('account.collections') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-cc-new"></em></span>
                            <span class="nk-menu-text">{{ __('Collections') }}</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ route('account.stars') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-star"></em></span>
                            <span class="nk-menu-text">{{ __('Stars') }}</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ route('account.settings') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-setting"></em></span>
                            <span class="nk-menu-text">{{ __('Settings') }}</span>
                        </a>
                    </li>
                </ul>

                <ul class="nk-menu nk-menu-sm">
                    <li class="nk-menu-heading">
                        <span>{{ __('Help Center') }}</span>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ route('faq') }}" class="nk-menu-link">
                            <span class="nk-menu-text">{{ __('FAQs') }}</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ route('contact') }}" class="nk-menu-link">
                            <span class="nk-menu-text">{{ __('Contact') }}</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ route('support') }}" class="nk-menu-link">
                            <span class="nk-menu-text">{{ __('Support') }}</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="nk-aside-close">
                <a href="#" class="toggle" data-target="sideNav"><em class="icon ni ni-cross"></em></a>
            </div>
        </div>
        <div class="nk-content-body">
            <div class="nk-content-wrap">
                <div class="nk-block-head nk-block-head-lg">
                    <div class="nk-block-between-md g-4">
                        <ul class="nav nav-tabs nav-tabs-s2">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                                    href="#tabItem9">Feed</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab"
                                                    href="#tabItem10">Organazitaion</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab"
                                                    href="#tabItem11">Collections</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab"
                                                    href="#tabItem12">Follower</a></li>
                        </ul>
                        <span class="create-link">
                                                 <div class="user-action">
                                                                <div class="drodown"><a href="#"
                                                                                        class="dropdown-toggle btn btn-icon btn-trigger mr-n1"
                                                                                        data-toggle="dropdown"
                                                                                        aria-expanded="false"><em
                                                                                class="icon ni ni-plus"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right"
                                                                         style="">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="#"><em
                                                                                            class="icon ni ni-book"></em><span>Create Collection</span></a>
                                                                            </li>
                                                                            <li><a href="#"><em
                                                                                            class="icon ni ni-package"></em><span>    <span
                                                                                                type="button"
                                                                                                data-toggle="modal"
                                                                                                data-target="#modalDefault">Create Organization
                                        </span></span></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                        </span>
                        <div class="modal fade" tabindex="-1" id="modalDefault">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><h5 class="modal-title">Organization Info</h5>
                                        <a href="#" class="close" data-dismiss="modal"
                                           aria-label="Close"><em class="icon ni ni-cross"></em></a>
                                    </div>
                                    <div class="modal-body">
                                        <form action="#" class="form-validate is-alter"
                                              novalidate="novalidate">
                                            <div class="form-group"><label class="form-label"
                                                                           for="full-name">Organization Name
                                                    Name</label>
                                                <div class="form-control-wrap"><input type="text"
                                                                                      class="form-control"
                                                                                      id="full-name"
                                                                                      required=""></div>
                                            </div>
                                            <div class="form-group"><label class="form-label"
                                                                           for="phone-no">Add People
                                                    No</label>
                                                <div class="form-control-wrap"><input type="text"
                                                                                      class="form-control"
                                                                                      id="phone-no">
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="form-label">Notification Type</label>
                                                <ul class="custom-control-group g-3 align-center">
                                                    <li>
                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                            <input type="checkbox"
                                                                   class="custom-control-input"
                                                                   id="com-email"><label
                                                                    class="custom-control-label"
                                                                    for="com-email">Email</label></div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                            <input type="checkbox"
                                                                   class="custom-control-input"
                                                                   id="com-sms"><label
                                                                    class="custom-control-label"
                                                                    for="com-sms">SMS</label></div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="form-group"><label class="form-label"
                                                                           for="pay-amount">Description</label>
                                                <div class="form-control-wrap"><input type="text"
                                                                                      class="form-control"
                                                                                      id="pay-amount">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary">
                                                    Create Organization
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-block">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabItem9">
                            <div class="card card-bordered card-full">
                                <div class="card-inner-group">
                                    <div class="card-inner card-inner-md">
                                        <div class="user-card">
                                            <div class="user-avatar bg-primary-dim"><span>AB</span>
                                            </div>
                                            <div class="user-info"><span class="lead-text">Abu Bin Ishtiyak</span>
                                                <span class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolore dolores, eos error excepturi labore laboriosam magni nobis porro quaerat rem sint tempore tenetur. Aliquid blanditiis eveniet ex itaque voluptates!</span>
                                                <span class="sub-text">3 Hours ago</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="drodown"><a href="#"
                                                                        class="dropdown-toggle btn btn-icon btn-trigger mr-n1"
                                                                        data-toggle="dropdown"
                                                                        aria-expanded="false"><em
                                                                class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                         style="">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em
                                                                            class="icon ni ni-trash"></em><span>Remove my feed</span></a>
                                                            </li>
                                                            <li><a href="#"><em
                                                                            class="icon ni ni-share"></em><span>ReFeed</span></a>
                                                            </li>
                                                            <li><a href="#"><em
                                                                            class="icon ni ni-label"></em><span>Follow User</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner card-inner-md">
                                        <div class="user-card">
                                            <div class="user-avatar bg-pink-dim"><span>UA</span>
                                            </div>
                                            <div class="user-info"><span
                                                        class="lead-text">Usame Avcı</span>
                                                <span class="">Js ne moruq</span>
                                                <span class="sub-text">4 Hours ago</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="drodown"><a href="#"
                                                                        class="dropdown-toggle btn btn-icon btn-trigger mr-n1"
                                                                        data-toggle="dropdown"
                                                                        aria-expanded="false"><em
                                                                class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                         style="">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em
                                                                            class="icon ni ni-trash"></em><span>Remove my feed</span></a>
                                                            </li>
                                                            <li><a href="#"><em
                                                                            class="icon ni ni-share"></em><span>ReFeed</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner card-inner-md">
                                        <div class="user-card">
                                            <div class="user-avatar bg-primary-dim"><span>AB</span>
                                            </div>
                                            <div class="user-info"><span class="lead-text">Abu Bin Ishtiyak</span>
                                                <span class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolore dolores, eos error excepturi labore laboriosam magni nobis porro quaerat rem sint tempore tenetur. Aliquid blanditiis eveniet ex itaque voluptates!</span>
                                                <span class="sub-text">3 Hours ago</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="drodown"><a href="#"
                                                                        class="dropdown-toggle btn btn-icon btn-trigger mr-n1"
                                                                        data-toggle="dropdown"
                                                                        aria-expanded="false"><em
                                                                class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                         style="">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em
                                                                            class="icon ni ni-trash"></em><span>Remove my feed</span></a>
                                                            </li>
                                                            <li><a href="#"><em
                                                                            class="icon ni ni-share"></em><span>ReFeed</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner card-inner-md">
                                        <div class="user-card">
                                            <div class="user-avatar bg-pink-dim"><span>AS</span>
                                            </div>
                                            <div class="user-info"><span
                                                        class="lead-text">Anıl ŞAHİN</span>
                                                <span class="">Pehepe zihniyeti bu ülkeyi kurtarmaz</span>
                                                <span class="sub-text">4 Hours ago</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="drodown"><a href="#"
                                                                        class="dropdown-toggle btn btn-icon btn-trigger mr-n1"
                                                                        data-toggle="dropdown"
                                                                        aria-expanded="false"><em
                                                                class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                         style="">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em
                                                                            class="icon ni ni-trash"></em><span>Remove my feed</span></a>
                                                            </li>
                                                            <li><a href="#"><em
                                                                            class="icon ni ni-share"></em><span>ReFeed</span></a>
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
                        <div class="tab-pane" id="tabItem10">
                            <div class="card card-bordered card-full">
                                <div class="card-inner-group">
                                    <div class="card-inner card-inner-md">
                                        <div class="user-card">
                                            <div class="user-avatar bg-primary-dim"><span>AB</span>
                                            </div>
                                            <div class="user-info"><span class="lead-text">Abu Bin Ishtiyak</span>
                                                <span class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolore dolores, eos error excepturi labore laboriosam magni nobis porro quaerat rem sint tempore tenetur. Aliquid blanditiis eveniet ex itaque voluptates!</span>
                                                <span class="sub-text">3 Hours ago</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="drodown"><a href="#"
                                                                        class="dropdown-toggle btn btn-icon btn-trigger mr-n1"
                                                                        data-toggle="dropdown"
                                                                        aria-expanded="false"><em
                                                                class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                         style="">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em
                                                                            class="icon ni ni-trash"></em><span>Remove my feed</span></a>
                                                            </li>
                                                            <li><a href="#"><em
                                                                            class="icon ni ni-share"></em><span>ReFeed</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner card-inner-md">
                                        <div class="user-card">
                                            <div class="user-avatar bg-pink-dim"><span>SW</span></div>
                                            <div class="user-info"><span
                                                        class="lead-text">Sharon Walker</span><span
                                                        class="sub-text">sharon-90@example.com</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="drodown"><a href="#"
                                                                        class="dropdown-toggle btn btn-icon btn-trigger mr-n1"
                                                                        data-toggle="dropdown"
                                                                        aria-expanded="false"><em
                                                                class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em
                                                                            class="icon ni ni-setting"></em><span>Action Settings</span></a>
                                                            </li>
                                                            <li><a href="#"><em
                                                                            class="icon ni ni-notify"></em><span>Push Notification</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner card-inner-md">
                                        <div class="user-card">
                                            <div class="user-avatar bg-warning-dim"><span>GO</span>
                                            </div>
                                            <div class="user-info"><span
                                                        class="lead-text">Gloria Oliver</span><span
                                                        class="sub-text">gloria_72@example.com</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="drodown"><a href="#"
                                                                        class="dropdown-toggle btn btn-icon btn-trigger mr-n1"
                                                                        data-toggle="dropdown"
                                                                        aria-expanded="false"><em
                                                                class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em
                                                                            class="icon ni ni-setting"></em><span>Action Settings</span></a>
                                                            </li>
                                                            <li><a href="#"><em
                                                                            class="icon ni ni-notify"></em><span>Push Notification</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner card-inner-md">
                                        <div class="user-card">
                                            <div class="user-avatar bg-success-dim"><span>PS</span>
                                            </div>
                                            <div class="user-info"><span class="lead-text">Phillip Sullivan</span><span
                                                        class="sub-text">phillip-85@example.com</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="drodown"><a href="#"
                                                                        class="dropdown-toggle btn btn-icon btn-trigger mr-n1"
                                                                        data-toggle="dropdown"
                                                                        aria-expanded="false"><em
                                                                class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em
                                                                            class="icon ni ni-setting"></em><span>Action Settings</span></a>
                                                            </li>
                                                            <li><a href="#"><em
                                                                            class="icon ni ni-notify"></em><span>Push Notification</span></a>
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
                        <div class="tab-pane" id="tabItem11">
                            <div class="card card-bordered card-full">
                                <div class="card-inner-group">
                                    <div class="card-inner card-inner-md">
                                        <div class="user-card">
                                            <div class="user-avatar bg-primary-dim"><span>AB</span>
                                            </div>
                                            <div class="user-info"><span class="lead-text">Abu Bin Ishtiyak</span>
                                                <span class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolore dolores, eos error excepturi labore laboriosam magni nobis porro quaerat rem sint tempore tenetur. Aliquid blanditiis eveniet ex itaque voluptates!</span>
                                                <span class="sub-text">3 Hours ago</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="drodown"><a href="#"
                                                                        class="dropdown-toggle btn btn-icon btn-trigger mr-n1"
                                                                        data-toggle="dropdown"
                                                                        aria-expanded="false"><em
                                                                class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                         style="">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em
                                                                            class="icon ni ni-trash"></em><span>Remove my feed</span></a>
                                                            </li>
                                                            <li><a href="#"><em
                                                                            class="icon ni ni-share"></em><span>ReFeed</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner card-inner-md">
                                        <div class="user-card">
                                            <div class="user-avatar bg-pink-dim"><span>SW</span></div>
                                            <div class="user-info"><span
                                                        class="lead-text">Sharon Walker</span><span
                                                        class="sub-text">sharon-90@example.com</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="drodown"><a href="#"
                                                                        class="dropdown-toggle btn btn-icon btn-trigger mr-n1"
                                                                        data-toggle="dropdown"
                                                                        aria-expanded="false"><em
                                                                class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em
                                                                            class="icon ni ni-setting"></em><span>Action Settings</span></a>
                                                            </li>
                                                            <li><a href="#"><em
                                                                            class="icon ni ni-notify"></em><span>Push Notification</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner card-inner-md">
                                        <div class="user-card">
                                            <div class="user-avatar bg-warning-dim"><span>GO</span>
                                            </div>
                                            <div class="user-info"><span
                                                        class="lead-text">Gloria Oliver</span><span
                                                        class="sub-text">gloria_72@example.com</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="drodown"><a href="#"
                                                                        class="dropdown-toggle btn btn-icon btn-trigger mr-n1"
                                                                        data-toggle="dropdown"
                                                                        aria-expanded="false"><em
                                                                class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em
                                                                            class="icon ni ni-setting"></em><span>Action Settings</span></a>
                                                            </li>
                                                            <li><a href="#"><em
                                                                            class="icon ni ni-notify"></em><span>Push Notification</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner card-inner-md">
                                        <div class="user-card">
                                            <div class="user-avatar bg-success-dim"><span>PS</span>
                                            </div>
                                            <div class="user-info"><span class="lead-text">Phillip Sullivan</span><span
                                                        class="sub-text">phillip-85@example.com</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="drodown"><a href="#"
                                                                        class="dropdown-toggle btn btn-icon btn-trigger mr-n1"
                                                                        data-toggle="dropdown"
                                                                        aria-expanded="false"><em
                                                                class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em
                                                                            class="icon ni ni-setting"></em><span>Action Settings</span></a>
                                                            </li>
                                                            <li><a href="#"><em
                                                                            class="icon ni ni-notify"></em><span>Push Notification</span></a>
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
                        <div class="tab-pane" id="tabItem12">
                            <div class="card card-bordered card-full">
                                <div class="card-inner-group">
                                    <div class="card-inner card-inner-md">
                                        <div class="user-card">
                                            <div class="user-avatar bg-primary-dim"><span>AB</span>
                                            </div>
                                            <div class="user-info"><span class="lead-text">Abu Bin Ishtiyak</span>
                                                <span class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolore dolores, eos error excepturi labore laboriosam magni nobis porro quaerat rem sint tempore tenetur. Aliquid blanditiis eveniet ex itaque voluptates!</span>
                                                <span class="sub-text">3 Hours ago</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="drodown"><a href="#"
                                                                        class="dropdown-toggle btn btn-icon btn-trigger mr-n1"
                                                                        data-toggle="dropdown"
                                                                        aria-expanded="false"><em
                                                                class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                         style="">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em
                                                                            class="icon ni ni-trash"></em><span>Remove my feed</span></a>
                                                            </li>
                                                            <li><a href="#"><em
                                                                            class="icon ni ni-share"></em><span>ReFeed</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner card-inner-md">
                                        <div class="user-card">
                                            <div class="user-avatar bg-pink-dim"><span>SW</span></div>
                                            <div class="user-info"><span
                                                        class="lead-text">Sharon Walker</span><span
                                                        class="sub-text">sharon-90@example.com</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="drodown"><a href="#"
                                                                        class="dropdown-toggle btn btn-icon btn-trigger mr-n1"
                                                                        data-toggle="dropdown"
                                                                        aria-expanded="false"><em
                                                                class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em
                                                                            class="icon ni ni-setting"></em><span>Action Settings</span></a>
                                                            </li>
                                                            <li><a href="#"><em
                                                                            class="icon ni ni-notify"></em><span>Push Notification</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner card-inner-md">
                                        <div class="user-card">
                                            <div class="user-avatar bg-warning-dim"><span>GO</span>
                                            </div>
                                            <div class="user-info"><span
                                                        class="lead-text">Gloria Oliver</span><span
                                                        class="sub-text">gloria_72@example.com</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="drodown"><a href="#"
                                                                        class="dropdown-toggle btn btn-icon btn-trigger mr-n1"
                                                                        data-toggle="dropdown"
                                                                        aria-expanded="false"><em
                                                                class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em
                                                                            class="icon ni ni-setting"></em><span>Action Settings</span></a>
                                                            </li>
                                                            <li><a href="#"><em
                                                                            class="icon ni ni-notify"></em><span>Push Notification</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner card-inner-md">
                                        <div class="user-card">
                                            <div class="user-avatar bg-success-dim"><span>PS</span>
                                            </div>
                                            <div class="user-info"><span class="lead-text">Phillip Sullivan</span><span
                                                        class="sub-text">phillip-85@example.com</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="drodown"><a href="#"
                                                                        class="dropdown-toggle btn btn-icon btn-trigger mr-n1"
                                                                        data-toggle="dropdown"
                                                                        aria-expanded="false"><em
                                                                class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em
                                                                            class="icon ni ni-setting"></em><span>Action Settings</span></a>
                                                            </li>
                                                            <li><a href="#"><em
                                                                            class="icon ni ni-notify"></em><span>Push Notification</span></a>
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
                </div>
            </div>

            <div class="nk-footer">
                <div class="container wide-xl">
                    <div class="nk-footer-wrap g-2">
                        <div class="nk-footer-copyright"> &copy; 2020 DashLite. Template by <a href="#">Softnio</a>
                        </div>
                        <div class="nk-footer-links">
                            <ul class="nav nav-sm">
                                <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
