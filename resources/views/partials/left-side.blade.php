<!-- start chat-leftsidebar -->
<div class="chat-leftsidebar">

    <div class="tab-content">
        @include('partials.left-side-user')

        <!-- Start chats tab-pane -->
        <div class="tab-pane" id="pills-chat" role="tabpanel" aria-labelledby="pills-chat-tab">
            <!-- Start chats content -->
            <div>
                <div class="px-4 pt-4">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1">
                            <h4 class="mb-4">Chats</h4>
                        </div>
                        <div class="flex-shrink-0">
                            <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="bottom"
                                 title="Add Contact">

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#addContact-exampleModal">
                                    <i class="bx bx-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <form>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control bg-light border-0 pe-0" id="serachChatUser"
                                   onkeyup="searchUser()" placeholder="Search here.."
                                   aria-label="Example text with button addon" aria-describedby="searchbtn-addon"
                                   autocomplete="off">
                            <button class="btn btn-light" type="button" id="searchbtn-addon"><i
                                    class='bx bx-search align-middle'></i></button>
                        </div>
                    </form>

                </div> <!-- .p-4 -->

                <div class="chat-room-list" data-simplebar>
                    <!-- Start chat-message-list -->
                    <h5 class="mb-3 px-4 mt-4 font-size-11 text-muted text-uppercase">Favourites</h5>

                    <div class="chat-message-list">

                        <ul class="list-unstyled chat-list chat-user-list" id="favourite-users">
                        </ul>
                    </div>

                    <div class="d-flex align-items-center px-4 mt-5 mb-2">
                        <div class="flex-grow-1">
                            <h4 class="mb-0 font-size-11 text-muted text-uppercase">Direct Messages</h4>
                        </div>
                        <div class="flex-shrink-0">
                            <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="bottom"
                                 title="New Message">

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target=".contactModal">
                                    <i class="bx bx-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="chat-message-list">

                        <ul class="list-unstyled chat-list chat-user-list" id="usersList">

                        </ul>
                    </div>

                    <div class="d-flex align-items-center px-4 mt-5 mb-2">
                        <div class="flex-grow-1">
                            <h4 class="mb-0 font-size-11 text-muted text-uppercase">Channels</h4>
                        </div>
                        <div class="flex-shrink-0">
                            <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="bottom"
                                 title="Create group">

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#addgroup-exampleModal">
                                    <i class="bx bx-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="chat-message-list">

                        <ul class="list-unstyled chat-list chat-user-list mb-3" id="channelList">

                        </ul>
                    </div>
                    <!-- End chat-message-list -->
                </div>

            </div>
            <!-- Start chats content -->

            <!-- Start add group Modal -->
            <div class="modal fade" id="addgroup-exampleModal" tabindex="-1" role="dialog"
                 aria-labelledby="addgroup-exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content modal-header-colored shadow-lg border-0">
                        <div class="modal-header">
                            <h5 class="modal-title text-white font-size-16" id="addgroup-exampleModalLabel">Create
                                New Group</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                    aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body p-4">
                            <form>
                                <div class="mb-4">
                                    <label for="addgroupname-input" class="form-label">Group Name</label>
                                    <input type="text" class="form-control" id="addgroupname-input"
                                           placeholder="Enter Group Name">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Group Members</label>
                                    <div class="mb-3">
                                        <button class="btn btn-light btn-sm" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#groupmembercollapse" aria-expanded="false"
                                                aria-controls="groupmembercollapse">
                                            Select Members
                                        </button>
                                    </div>

                                    <div class="collapse" id="groupmembercollapse">
                                        <div class="card border">
                                            <div class="card-header">
                                                <h5 class="font-size-15 mb-0">Contacts</h5>
                                            </div>
                                            <div class="card-body p-2">
                                                <div data-simplebar style="max-height: 150px;">
                                                    <div>
                                                        <div class="contact-list-title">
                                                            A
                                                        </div>

                                                        <ul class="list-unstyled contact-list">
                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                           id="memberCheck1" checked>
                                                                    <label class="form-check-label"
                                                                           for="memberCheck1">Albert Rodarte</label>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                           id="memberCheck2">
                                                                    <label class="form-check-label"
                                                                           for="memberCheck2">Allison Etter</label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div>
                                                        <div class="contact-list-title">
                                                            C
                                                        </div>

                                                        <ul class="list-unstyled contact-list">
                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                           id="memberCheck3">
                                                                    <label class="form-check-label"
                                                                           for="memberCheck3">Craig Smiley</label>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>

                                                    <div>
                                                        <div class="contact-list-title">
                                                            D
                                                        </div>

                                                        <ul class="list-unstyled contact-list">
                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                           id="memberCheck4">
                                                                    <label class="form-check-label"
                                                                           for="memberCheck4">Daniel Clay</label>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>

                                                    <div>
                                                        <div class="contact-list-title">
                                                            I
                                                        </div>

                                                        <ul class="list-unstyled contact-list">
                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                           id="memberCheck5">
                                                                    <label class="form-check-label"
                                                                           for="memberCheck5">Iris Wells</label>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>

                                                    <div>
                                                        <div class="contact-list-title">
                                                            J
                                                        </div>

                                                        <ul class="list-unstyled contact-list">
                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                           id="memberCheck6">
                                                                    <label class="form-check-label"
                                                                           for="memberCheck6">Juan Flakes</label>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                           id="memberCheck7">
                                                                    <label class="form-check-label"
                                                                           for="memberCheck7">John Hall</label>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                           id="memberCheck8">
                                                                    <label class="form-check-label"
                                                                           for="memberCheck8">Joy Southern</label>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>

                                                    <div>
                                                        <div class="contact-list-title">
                                                            M
                                                        </div>

                                                        <ul class="list-unstyled contact-list">
                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                           id="memberCheck9">
                                                                    <label class="form-check-label"
                                                                           for="memberCheck9">Michael Hinton</label>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                           id="memberCheck10">
                                                                    <label class="form-check-label"
                                                                           for="memberCheck10">Mary Farmer</label>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>

                                                    <div>
                                                        <div class="contact-list-title">
                                                            P
                                                        </div>

                                                        <ul class="list-unstyled contact-list">
                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                           id="memberCheck11">
                                                                    <label class="form-check-label"
                                                                           for="memberCheck11">Phillis
                                                                        Griffin</label>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>

                                                    <div>
                                                        <div class="contact-list-title">
                                                            R
                                                        </div>

                                                        <ul class="list-unstyled contact-list">
                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                           id="memberCheck12">
                                                                    <label class="form-check-label"
                                                                           for="memberCheck12">Rocky Jackson</label>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>

                                                    <div>
                                                        <div class="contact-list-title">
                                                            S
                                                        </div>

                                                        <ul class="list-unstyled contact-list">
                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                           id="memberCheck13">
                                                                    <label class="form-check-label"
                                                                           for="memberCheck13">Simon Velez</label>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="addgroupdescription-input" class="form-label">Description</label>
                                    <textarea class="form-control" id="addgroupdescription-input" rows="3"
                                              placeholder="Enter Description"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Create Groups</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End add group Modal -->
        </div>
        <!-- End chats tab-pane -->

        <!-- Start contacts tab-pane -->
        <div class="tab-pane" id="pills-contacts" role="tabpanel" aria-labelledby="pills-contacts-tab">
            <!-- Start Contact content -->
            <div>
                <div class="px-4 pt-4">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1">
                            <h4 class="mb-4">Contacts</h4>
                        </div>
                        <div class="flex-shrink-0">
                            <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="bottom"
                                 title="Add Contact">

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#addContact-exampleModal">
                                    <i class="bx bx-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <form>
                        <div class="input-group mb-4">
                            <input type="text" class="form-control bg-light border-0 pe-0" id="searchContact"
                                   onkeyup="searchContacts()" placeholder="Search Contacts.."
                                   aria-label="Search Contacts..."
                                   aria-describedby="button-searchcontactsaddon" autocomplete="off">
                            <button class="btn btn-light" type="button" id="button-searchcontactsaddon"><i
                                    class='bx bx-search align-middle'></i></button>
                        </div>
                    </form>
                </div>
                <!-- end p-4 -->

                <div class="chat-message-list chat-group-list" data-simplebar>
                    <div class="sort-contact">
                    </div>
                </div>
                <!-- end contact lists -->
            </div>
            <!-- Start Contact content -->
        </div>
        <!-- End contacts tab-pane -->

        <!-- Start calls tab-pane -->
        <div class="tab-pane" id="pills-calls" role="tabpanel" aria-labelledby="pills-calls-tab">
            <!-- Start Contact content -->
            <div>
                <div class="px-4 pt-4">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1">
                            <h4 class="mb-3">Calls</h4>
                        </div>
                    </div>
                </div>
                <!-- end p-4 -->

                <!-- Start contact lists -->
                <div class="chat-message-list chat-call-list" data-simplebar>
                    <ul class="list-unstyled chat-list" id="callList">

                    </ul>
                </div>
                <!-- end contact lists -->
            </div>
            <!-- Start Contact content -->
        </div>
        <!-- End calls tab-pane -->

        <!-- Start bookmark tab-pane -->
        <div class="tab-pane" id="pills-bookmark" role="tabpanel" aria-labelledby="pills-bookmark-tab">
            <!-- Start Contact content -->
            <div>
                <div class="px-4 pt-4">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1">
                            <h4 class="mb-3">Bookmark</h4>
                        </div>
                    </div>
                </div>
                <!-- end p-4 -->

                <!-- Start contact lists -->
                <div class="chat-message-list chat-bookmark-list" data-simplebar>
                    <ul class="list-unstyled chat-list">
                        <li>
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 avatar-xs ms-1 me-3">
                                    <div class="avatar-title bg-soft-primary text-primary rounded-circle">
                                        <i class="bx bx-file"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-truncate p-0">design-phase-1-approved.pdf</a>
                                    </h5>
                                    <p class="text-muted text-truncate font-size-13 mb-0">12.5 MB</p>
                                </div>

                                <div class="flex-shrink-0 ms-3">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle font-size-16 text-muted px-1" href="#"
                                           role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Open <i class="bx bx-folder-open ms-2 text-muted"></i></a>
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Edit <i class="bx bx-pencil ms-2 text-muted"></i></a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Delete <i class="bx bx-trash ms-2 text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 avatar-xs ms-1 me-3">
                                    <div class="avatar-title bg-soft-primary text-primary rounded-circle">
                                        <i class="bx bx-pin"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-truncate p-0">Bg
                                            Pattern</a></h5>
                                    <p class="text-muted text-truncate font-size-13 mb-0">https://bgpattern.com/</p>
                                </div>

                                <div class="flex-shrink-0 ms-3">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle font-size-18 text-muted px-1" href="#"
                                           role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Open <i class="bx bx-folder-open ms-2 text-muted"></i></a>
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Edit <i class="bx bx-pencil ms-2 text-muted"></i></a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Delete <i class="bx bx-trash ms-2 text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 avatar-xs ms-1 me-3">
                                    <div class="avatar-title bg-soft-primary text-primary rounded-circle">
                                        <i class="bx bx-image"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <h5 class="font-size-14 mb-1"><a href="#"
                                                                     class="text-truncate p-0">Image-001.jpg</a>
                                    </h5>
                                    <p class="text-muted text-truncate font-size-13 mb-0">4.2 MB</p>
                                </div>

                                <div class="flex-shrink-0 ms-3">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle font-size-16 text-muted px-1" href="#"
                                           role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Open <i class="bx bx-folder-open ms-2 text-muted"></i></a>
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Edit <i class="bx bx-pencil ms-2 text-muted"></i></a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Delete <i class="bx bx-trash ms-2 text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 avatar-xs ms-1 me-3">
                                    <div class="avatar-title bg-soft-primary text-primary rounded-circle">
                                        <i class="bx bx-pin"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-truncate p-0">Images</a>
                                    </h5>
                                    <p class="text-muted text-truncate font-size-13 mb-0">https://images123.com/</p>
                                </div>

                                <div class="flex-shrink-0 ms-3">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle font-size-18 text-muted px-1" href="#"
                                           role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Open <i class="bx bx-folder-open ms-2 text-muted"></i></a>
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Edit <i class="bx bx-pencil ms-2 text-muted"></i></a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Delete <i class="bx bx-trash ms-2 text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 avatar-xs ms-1 me-3">
                                    <div class="avatar-title bg-soft-primary text-primary rounded-circle">
                                        <i class="bx bx-pin"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-truncate p-0">Bg
                                            Gradient</a></h5>
                                    <p class="text-muted text-truncate font-size-13 mb-0">
                                        https://bggradient.com/</p>
                                </div>

                                <div class="flex-shrink-0 ms-3">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle font-size-18 text-muted px-1" href="#"
                                           role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Open <i class="bx bx-folder-open ms-2 text-muted"></i></a>
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Edit <i class="bx bx-pencil ms-2 text-muted"></i></a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Delete <i class="bx bx-trash ms-2 text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 avatar-xs ms-1 me-3">
                                    <div class="avatar-title bg-soft-primary text-primary rounded-circle">
                                        <i class="bx bx-image"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <h5 class="font-size-14 mb-1"><a href="#"
                                                                     class="text-truncate p-0">Image-012.jpg</a>
                                    </h5>
                                    <p class="text-muted text-truncate font-size-13 mb-0">3.1 MB</p>
                                </div>

                                <div class="flex-shrink-0 ms-3">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle font-size-16 text-muted px-1" href="#"
                                           role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Open <i class="bx bx-folder-open ms-2 text-muted"></i></a>
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Edit <i class="bx bx-pencil ms-2 text-muted"></i></a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Delete <i class="bx bx-trash ms-2 text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 avatar-xs ms-1 me-3">
                                    <div class="avatar-title bg-soft-primary text-primary rounded-circle">
                                        <i class="bx bx-file"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-truncate p-0">analytics
                                            dashboard.zip</a></h5>
                                    <p class="text-muted text-truncate font-size-13 mb-0">6.7 MB</p>
                                </div>

                                <div class="flex-shrink-0 ms-3">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle font-size-16 text-muted px-1" href="#"
                                           role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Open <i class="bx bx-folder-open ms-2 text-muted"></i></a>
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Edit <i class="bx bx-pencil ms-2 text-muted"></i></a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Delete <i class="bx bx-trash ms-2 text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 avatar-xs ms-1 me-3">
                                    <div class="avatar-title bg-soft-primary text-primary rounded-circle">
                                        <i class="bx bx-image"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <h5 class="font-size-14 mb-1"><a href="#"
                                                                     class="text-truncate p-0">Image-031.jpg</a>
                                    </h5>
                                    <p class="text-muted text-truncate font-size-13 mb-0">4.2 MB</p>
                                </div>

                                <div class="flex-shrink-0 ms-3">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle font-size-16 text-muted px-1" href="#"
                                           role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Open <i class="bx bx-folder-open ms-2 text-muted"></i></a>
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Edit <i class="bx bx-pencil ms-2 text-muted"></i></a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Delete <i class="bx bx-trash ms-2 text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 avatar-xs ms-1 me-3">
                                    <div class="avatar-title bg-soft-primary text-primary rounded-circle">
                                        <i class="bx bx-file"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <h5 class="font-size-14 mb-1"><a href="#"
                                                                     class="text-truncate p-0">Changelog.txt</a>
                                    </h5>
                                    <p class="text-muted text-truncate font-size-13 mb-0">6.7 MB</p>
                                </div>

                                <div class="flex-shrink-0 ms-3">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle font-size-16 text-muted px-1" href="#"
                                           role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Open <i class="bx bx-folder-open ms-2 text-muted"></i></a>
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Edit <i class="bx bx-pencil ms-2 text-muted"></i></a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Delete <i class="bx bx-trash ms-2 text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 avatar-xs ms-1 me-3">
                                    <div class="avatar-title bg-soft-primary text-primary rounded-circle">
                                        <i class="bx bx-file"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <h5 class="font-size-14 mb-1"><a href="#"
                                                                     class="text-truncate p-0">Widgets.zip</a></h5>
                                    <p class="text-muted text-truncate font-size-13 mb-0">6.7 MB</p>
                                </div>

                                <div class="flex-shrink-0 ms-3">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle font-size-16 text-muted px-1" href="#"
                                           role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Open <i class="bx bx-folder-open ms-2 text-muted"></i></a>
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Edit <i class="bx bx-pencil ms-2 text-muted"></i></a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Delete <i class="bx bx-trash ms-2 text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 avatar-xs ms-1 me-3">
                                    <div class="avatar-title bg-soft-primary text-primary rounded-circle">
                                        <i class="bx bx-image"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <h5 class="font-size-14 mb-1"><a href="#"
                                                                     class="text-truncate p-0">logo-light.png</a>
                                    </h5>
                                    <p class="text-muted text-truncate font-size-13 mb-0">4.2 MB</p>
                                </div>

                                <div class="flex-shrink-0 ms-3">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle font-size-16 text-muted px-1" href="#"
                                           role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Open <i class="bx bx-folder-open ms-2 text-muted"></i></a>
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Edit <i class="bx bx-pencil ms-2 text-muted"></i></a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Delete <i class="bx bx-trash ms-2 text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 avatar-xs ms-1 me-3">
                                    <div class="avatar-title bg-soft-primary text-primary rounded-circle">
                                        <i class="bx bx-image"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <h5 class="font-size-14 mb-1"><a href="#"
                                                                     class="text-truncate p-0">Image-2.jpg</a></h5>
                                    <p class="text-muted text-truncate font-size-13 mb-0">3.1 MB</p>
                                </div>

                                <div class="flex-shrink-0 ms-3">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle font-size-16 text-muted px-1" href="#"
                                           role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Open <i class="bx bx-folder-open ms-2 text-muted"></i></a>
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Edit <i class="bx bx-pencil ms-2 text-muted"></i></a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Delete <i class="bx bx-trash ms-2 text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 avatar-xs ms-1 me-3">
                                    <div class="avatar-title bg-soft-primary text-primary rounded-circle">
                                        <i class="bx bx-file"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <h5 class="font-size-14 mb-1"><a href="#"
                                                                     class="text-truncate p-0">Landing-A.zip</a>
                                    </h5>
                                    <p class="text-muted text-truncate font-size-13 mb-0">6.7 MB</p>
                                </div>

                                <div class="flex-shrink-0 ms-3">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle font-size-16 text-muted px-1" href="#"
                                           role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Open <i class="bx bx-folder-open ms-2 text-muted"></i></a>
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Edit <i class="bx bx-pencil ms-2 text-muted"></i></a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                               href="#">Delete <i class="bx bx-trash ms-2 text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
                <!-- end contact lists -->
            </div>
            <!-- Start Contact content -->
        </div>
        <!-- End bookmark tab-pane -->

        <!-- Start settings tab-pane -->
        <div class="tab-pane" id="pills-setting" role="tabpanel" aria-labelledby="pills-setting-tab">
            <!-- Start Settings content -->
            <div>
                <div class="user-profile-img">
                    <img src="assets/images/small/img-4.jpg" class="profile-img profile-foreground-img"
                         style="height: 160px;" alt="">
                    <div class="overlay-content">
                        <div>
                            <div class="user-chat-nav p-3">

                                <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="text-white mb-0">Settings</h5>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs p-0 rounded-circle profile-photo-edit"
                                             data-bs-toggle="tooltip" data-bs-trigger="hover"
                                             data-bs-placement="bottom" title="Change Background">
                                            <input id="profile-foreground-img-file-input" type="file"
                                                   class="profile-foreground-img-file-input">
                                            <label for="profile-foreground-img-file-input"
                                                   class="profile-photo-edit avatar-xs">
                                                            <span
                                                                class="avatar-title rounded-circle bg-light text-body">
                                                                <i class="bx bxs-pencil"></i>
                                                            </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center p-3 p-lg-4 border-bottom pt-2 pt-lg-2 mt-n5 position-relative">
                    <div class="mb-3 profile-user">
                        <img src="assets/images/users/avatar-1.jpg"
                             class="rounded-circle avatar-lg img-thumbnail user-profile-image"
                             alt="user-profile-image">
                        <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                            <input id="profile-img-file-input" type="file" class="profile-img-file-input">
                            <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                            <span class="avatar-title rounded-circle bg-light text-body">
                                                <i class="bx bxs-camera"></i>
                                            </span>
                            </label>
                        </div>
                    </div>

                    <h5 class="font-size-16 mb-1 text-truncate"></h5>

                    <div class="dropdown d-inline-block">
                        <a class="text-muted dropdown-toggle d-block" href="#" role="button"
                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bxs-circle text-success font-size-10 align-middle"></i> Active <i
                                class="mdi mdi-chevron-down"></i>
                        </a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><i
                                    class="bx bxs-circle text-success font-size-10 me-1 align-middle"></i>
                                Active</a>
                            <a class="dropdown-item" href="#"><i
                                    class="bx bxs-circle text-warning font-size-10 me-1 align-middle"></i> Away</a>
                            <a class="dropdown-item" href="#"><i
                                    class="bx bxs-circle text-danger font-size-10 me-1 align-middle"></i> Do not
                                disturb</a>
                        </div>
                    </div>


                </div>
                <!-- End profile user -->

                <!-- Start User profile description -->
                <div class="user-setting" data-simplebar>
                    <div id="settingprofile" class="accordion accordion-flush">
                        <div class="accordion-item">
                            <div class="accordion-header" id="headerpersonalinfo">
                                <button class="accordion-button font-size-14 fw-medium" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#personalinfo"
                                        aria-expanded="true" aria-controls="personalinfo">
                                    <i class="bx bxs-user text-muted me-3"></i> Personal Info
                                </button>
                            </div>
                            <div id="personalinfo" class="accordion-collapse collapse show"
                                 aria-labelledby="headerpersonalinfo" data-bs-parent="#settingprofile">
                                <div class="accordion-body">
                                    <div class="float-end">
                                        <button type="button" class="btn btn-soft-primary btn-sm"><i
                                                class="bx bxs-pencil align-middle"></i></button>
                                    </div>

                                    <div>
                                        <p class="text-muted mb-1">Name</p>
                                        <h5 class="font-size-14">Adam Zampa</h5>
                                    </div>

                                    <div class="mt-4">
                                        <p class="text-muted mb-1">Email</p>
                                        <h5 class="font-size-14">adc@123.com</h5>
                                    </div>

                                    <div class="mt-4">
                                        <p class="text-muted mb-1">Location</p>
                                        <h5 class="font-size-14 mb-0">California, USA</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end personal info card -->

                        <div class="accordion-item">
                            <div class="accordion-header" id="headerthemes">
                                <button class="accordion-button font-size-14 fw-medium collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapsethemes"
                                        aria-expanded="false" aria-controls="collapsethemes">
                                    <i class="bx bxs-adjust-alt text-muted me-3"></i> Themes
                                </button>
                            </div>
                            <div id="collapsethemes" class="accordion-collapse collapse"
                                 aria-labelledby="headerthemes" data-bs-parent="#settingprofile">
                                <div class="accordion-body">
                                    <div>
                                        <h5 class="mb-3 font-size-11 text-muted text-uppercase">Choose Theme Color
                                            :</h5>
                                        <div
                                            class="d-flex align-items-center flex-wrap gap-2 theme-btn-list theme-color-list">
                                            <div class="form-check">
                                                <input class="form-check-input theme-color" type="radio" value="0"
                                                       name="bgcolor-radio" id="bgcolor-radio1">
                                                <label class="form-check-label avatar-xs" for="bgcolor-radio1">
                                                        <span
                                                            class="avatar-title bg-primary-custom rounded-circle theme-btn bgcolor-radio1"></span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input theme-color" type="radio" value="1"
                                                       name="bgcolor-radio" id="bgcolor-radio2">
                                                <label class="form-check-label avatar-xs" for="bgcolor-radio2">
                                                        <span
                                                            class="avatar-title bg-info rounded-circle theme-btn bgcolor-radio2"></span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input theme-color" type="radio" value="2"
                                                       name="bgcolor-radio" id="bgcolor-radio4">
                                                <label class="form-check-label avatar-xs" for="bgcolor-radio4">
                                                        <span
                                                            class="avatar-title bg-purple rounded-circle theme-btn bgcolor-radio4"></span>
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input theme-color" type="radio" value="3"
                                                       name="bgcolor-radio" id="bgcolor-radio5">
                                                <label class="form-check-label avatar-xs" for="bgcolor-radio5">
                                                        <span
                                                            class="avatar-title bg-pink rounded-circle theme-btn bgcolor-radio5"></span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input theme-color" type="radio" value="4"
                                                       name="bgcolor-radio" id="bgcolor-radio6">
                                                <label class="form-check-label avatar-xs" for="bgcolor-radio6">
                                                        <span
                                                            class="avatar-title bg-danger rounded-circle theme-btn bgcolor-radio6"></span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input theme-color" type="radio" value="5"
                                                       name="bgcolor-radio" id="bgcolor-radio7">
                                                <label class="form-check-label avatar-xs" for="bgcolor-radio7">
                                                        <span
                                                            class="avatar-title bg-secondary rounded-circle theme-btn bgcolor-radio7"></span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input theme-color" type="radio" value="6"
                                                       name="bgcolor-radio" id="bgcolor-radio8" checked>
                                                <label class="form-check-label avatar-xs light-background"
                                                       for="bgcolor-radio8">
                                                        <span
                                                            class="avatar-title bg-light rounded-circle theme-btn bgcolor-radio8"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4 pt-2">
                                        <h5 class="mb-3 font-size-11 text-muted text-uppercase">Choose Theme Image
                                            :</h5>
                                        <div
                                            class="d-flex align-items-center flex-wrap gap-2 theme-btn-list theme-btn-list-img">
                                            <div class="form-check">
                                                <input class="form-check-input theme-img" type="radio"
                                                       name="bgimg-radio" id="bgimg-radio1">
                                                <label class="form-check-label avatar-xs" for="bgimg-radio1">
                                                        <span
                                                            class="avatar-title bg-pattern-1 rounded-circle theme-btn bgimg-radio1"></span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input theme-img" type="radio"
                                                       name="bgimg-radio" id="bgimg-radio2">
                                                <label class="form-check-label avatar-xs" for="bgimg-radio2">
                                                        <span
                                                            class="avatar-title bg-pattern-2 rounded-circle theme-btn bgimg-radio2"></span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input theme-img" type="radio"
                                                       name="bgimg-radio" id="bgimg-radio3">
                                                <label class="form-check-label avatar-xs" for="bgimg-radio3">
                                                        <span
                                                            class="avatar-title bg-pattern-3 rounded-circle theme-btn bgimg-radio3"></span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input theme-img" type="radio"
                                                       name="bgimg-radio" id="bgimg-radio4">
                                                <label class="form-check-label avatar-xs" for="bgimg-radio4">
                                                        <span
                                                            class="avatar-title bg-pattern-4 rounded-circle theme-btn bgimg-radio4"></span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input theme-img" type="radio"
                                                       name="bgimg-radio" id="bgimg-radio5" checked>
                                                <label class="form-check-label avatar-xs" for="bgimg-radio5">
                                                        <span
                                                            class="avatar-title bg-pattern-5 rounded-circle theme-btn bgimg-radio5"></span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input theme-img" type="radio"
                                                       name="bgimg-radio" id="bgimg-radio6">
                                                <label class="form-check-label avatar-xs" for="bgimg-radio6">
                                                        <span
                                                            class="avatar-title bg-pattern-6 rounded-circle theme-btn bgimg-radio6"></span>
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input theme-img" type="radio"
                                                       name="bgimg-radio" id="bgimg-radio7">
                                                <label class="form-check-label avatar-xs" for="bgimg-radio7">
                                                        <span
                                                            class="avatar-title bg-pattern-7 rounded-circle theme-btn bgimg-radio7"></span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input theme-img" type="radio"
                                                       name="bgimg-radio" id="bgimg-radio8">
                                                <label class="form-check-label avatar-xs" for="bgimg-radio8">
                                                        <span
                                                            class="avatar-title bg-pattern-8 rounded-circle theme-btn bgimg-radio8"></span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input theme-img" type="radio"
                                                       name="bgimg-radio" id="bgimg-radio9">
                                                <label class="form-check-label avatar-xs" for="bgimg-radio9">
                                                        <span
                                                            class="avatar-title bg-pattern-9 rounded-circle theme-btn bgimg-radio9"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <div class="accordion-header" id="privacy1">
                                <button class="accordion-button font-size-14 fw-medium collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#privacy" aria-expanded="false"
                                        aria-controls="privacy">
                                    <i class="bx bxs-lock text-muted me-3"></i>Privacy
                                </button>
                            </div>
                            <div id="privacy" class="accordion-collapse collapse" aria-labelledby="privacy1"
                                 data-bs-parent="#settingprofile">
                                <div class="accordion-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item py-3 px-0 pt-0">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="font-size-13 mb-0 text-truncate">Profile photo</h5>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <select class="form-select form-select-sm">
                                                        <option value="Everyone" selected>Everyone</option>
                                                        <option value="Selected">Selected</option>
                                                        <option value="Nobody">Nobody</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item py-3 px-0">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="font-size-13 mb-0 text-truncate">Last seen</h5>

                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="form-check form-switch">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="privacy-lastseenSwitch" checked>
                                                        <label class="form-check-label"
                                                               for="privacy-lastseenSwitch"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item py-3 px-0">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="font-size-13 mb-0 text-truncate">Status</h5>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <select class="form-select form-select-sm">
                                                        <option value="Everyone" selected>Everyone</option>
                                                        <option value="Selected">Selected</option>
                                                        <option value="Nobody">Nobody</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item py-3 px-0">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="font-size-13 mb-0 text-truncate">Read receipts</h5>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="form-check form-switch">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="privacy-readreceiptSwitch" checked>
                                                        <label class="form-check-label"
                                                               for="privacy-readreceiptSwitch"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item py-3 px-0 pb-0">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="font-size-13 mb-0 text-truncate">Groups</h5>

                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <select class="form-select form-select-sm">
                                                        <option value="Everyone" selected>Everyone</option>
                                                        <option value="Selected">Selected</option>
                                                        <option value="Nobody">Nobody</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end privacy card -->

                        <div class="accordion-item">
                            <div class="accordion-header" id="headersecurity">
                                <button class="accordion-button font-size-14 fw-medium collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapsesecurity"
                                        aria-expanded="false" aria-controls="collapsesecurity">
                                    <i class="bx bxs-check-shield text-muted me-3"></i> Security
                                </button>
                            </div>
                            <div id="collapsesecurity" class="accordion-collapse collapse"
                                 aria-labelledby="headersecurity" data-bs-parent="#settingprofile">
                                <div class="accordion-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="font-size-13 mb-0 text-truncate">Show security
                                                        notification</h5>

                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="form-check form-switch">
                                                        <input type="checkbox" class="form-check-input"
                                                               id="security-notificationswitch">
                                                        <label class="form-check-label"
                                                               for="security-notificationswitch"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end security card -->


                        <div class="accordion-item">
                            <div class="accordion-header" id="headerhelp">
                                <button class="accordion-button font-size-14 fw-medium collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapsehelp"
                                        aria-expanded="false" aria-controls="collapsehelp">
                                    <i class="bx bxs-help-circle text-muted me-3"></i> Help
                                </button>
                            </div>
                            <div id="collapsehelp" class="accordion-collapse collapse" aria-labelledby="headerhelp"
                                 data-bs-parent="#settingprofile">
                                <div class="accordion-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item py-3 px-0 pt-0">
                                            <h5 class="font-size-13 mb-0"><a href="#"
                                                                             class="text-body d-block">FAQs</a></h5>
                                        </li>
                                        <li class="list-group-item py-3 px-0">
                                            <h5 class="font-size-13 mb-0"><a href="#"
                                                                             class="text-body d-block">Contact</a>
                                            </h5>
                                        </li>
                                        <li class="list-group-item py-3 px-0 pb-0">
                                            <h5 class="font-size-13 mb-0"><a href="#" class="text-body d-block">Terms
                                                    & Privacy policy</a></h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end profile-setting-accordion -->
                </div>
                <!-- End User profile description -->
            </div>
            <!-- Start Settings content -->
        </div>
        <!-- End settings tab-pane -->
    </div>
    <!-- end tab content -->
</div>
<!-- end chat-leftsidebar -->
