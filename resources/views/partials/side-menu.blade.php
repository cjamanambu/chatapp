<div class="side-menu flex-lg-column">
    @include('partials.app-branding')
    <div class="flex-lg-column my-0 sidemenu-navigation">
        <ul class="nav nav-pills side-menu-nav" role="tablist">
            <li class="nav-item d-none d-lg-block" data-bs-toggle="tooltip" data-bs-placement="right"
                data-bs-trigger="hover" data-bs-container=".sidemenu-navigation" title="Profile">
                <a class="nav-link" id="pills-user-tab" data-bs-toggle="pill" href="#pills-user" role="tab">
                    <i class='bx bx-user-circle'></i>
                </a>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-trigger="hover"
                data-bs-container=".sidemenu-navigation" title="Chats">
                <a class="nav-link active" id="pills-chat-tab" data-bs-toggle="pill" href="#pills-chat" role="tab">
                    <i class='bx bx-conversation'></i>
                </a>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-trigger="hover"
                data-bs-container=".sidemenu-navigation" title="Contacts">
                <a class="nav-link" id="pills-contacts-tab" data-bs-toggle="pill" href="#pills-contacts" role="tab">
                    <i class='bx bxs-user-detail'></i>
                </a>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-trigger="hover"
                data-bs-container=".sidemenu-navigation" title="Calls">
                <a class="nav-link" id="pills-calls-tab" data-bs-toggle="pill" href="#pills-calls" role="tab">
                    <i class='bx bx-phone-call'></i>
                </a>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-trigger="hover"
                data-bs-container=".sidemenu-navigation" title="Bookmark">
                <a class="nav-link" id="pills-bookmark-tab" data-bs-toggle="pill" href="#pills-bookmark" role="tab">
                    <i class='bx bx-bookmarks'></i>
                </a>
            </li>
            <li class="nav-item d-none d-lg-block" data-bs-toggle="tooltip" data-bs-placement="right"
                data-bs-container=".sidemenu-navigation" data-bs-trigger="hover" title="Settings">
                <a class="nav-link" id="pills-setting-tab" data-bs-toggle="pill" href="#pills-setting" role="tab">
                    <i class='bx bx-cog'></i>
                </a>
            </li>
            <li class="nav-item mt-auto">
                <a class="nav-link light-dark" href="#" data-bs-toggle="tooltip" data-bs-trigger="hover"
                   data-bs-placement="right" data-bs-container=".sidemenu-navigation" data-bs-html="true"
                   title="<span class='light-mode'>Light</span> <span class='dark-mode'>Dark</span> Mode">
                    <i class='bx bx-moon'></i>
                </a>
            </li>
            <li class="nav-item dropdown profile-user-dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <img src="{{asset('images/users/user-dummy-img.jpg')}}" alt="" class="profile-user rounded-circle">
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item d-flex align-items-center justify-content-between" id="pills-user-tab"
                       data-bs-toggle="pill" href="#pills-user" role="tab">Profile <i
                            class="bx bx-user-circle text-muted ms-1"></i></a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" id="pills-setting-tab"
                       data-bs-toggle="pill" href="#pills-setting" role="tab">Setting <i
                            class="bx bx-cog text-muted ms-1"></i></a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                       href="auth-changepassword.html">Change Password <i
                            class="bx bx-lock-open text-muted ms-1"></i></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="auth-logout.html">Log
                        out <i class="bx bx-log-out-circle text-muted ms-1"></i></a>
                </div>
            </li>
        </ul>
    </div>

</div>