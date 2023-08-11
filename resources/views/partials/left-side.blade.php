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

        @include('partials.left-side-settings')
    </div>
    <!-- end tab content -->
</div>
<!-- end chat-leftsidebar -->
