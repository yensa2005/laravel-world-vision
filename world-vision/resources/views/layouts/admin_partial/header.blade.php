<nav class="t-header">
    <div class="t-header-brand-wrapper">
        <a href="index.html">
            <img class="logo" src="assets/images/logo.svg" alt="">
            <img class="logo-mini" src="assets/images/logo_mini.svg" alt="">
        </a>
    </div>
    <div class="t-header-content-wrapper">
        <div class="t-header-content">
            <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
                <i class="mdi mdi-menu"></i>
            </button>
            <form action="#" class="t-header-search-box">
                <div class="input-group">
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search"
                        autocomplete="off">
                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-arrow-right-thick"></i></button>
                </div>
            </form>
            <ul class="nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="notificationDropdown" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-bell-outline mdi-1x"></i>
                    </a>
                    <div class="dropdown-menu navbar-dropdown dropdown-menu-right"
                        aria-labelledby="notificationDropdown">
                        <div class="dropdown-header">
                            <h6 class="dropdown-title">Notifications</h6>
                            <p class="dropdown-title-text">You have 4 unread notification</p>
                        </div>
                        <div class="dropdown-body">
                            <div class="dropdown-list">
                                <div class="icon-wrapper rounded-circle bg-inverse-primary text-primary">
                                    <i class="mdi mdi-alert"></i>
                                </div>
                                <div class="content-wrapper">
                                    <small class="name">Storage Full</small>
                                    <small class="content-text">Server storage almost full</small>
                                </div>
                            </div>
                            <div class="dropdown-list">
                                <div class="icon-wrapper rounded-circle bg-inverse-success text-success">
                                    <i class="mdi mdi-cloud-upload"></i>
                                </div>
                                <div class="content-wrapper">
                                    <small class="name">Upload Completed</small>
                                    <small class="content-text">3 Files uploded successfully</small>
                                </div>
                            </div>
                            <div class="dropdown-list">
                                <div class="icon-wrapper rounded-circle bg-inverse-warning text-warning">
                                    <i class="mdi mdi-security"></i>
                                </div>
                                <div class="content-wrapper">
                                    <small class="name">Authentication Required</small>
                                    <small class="content-text">Please verify your password to continue using cloud
                                        services</small>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-footer">
                            <a href="#">View All</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="messageDropdown" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-message-outline mdi-1x"></i>
                        <span
                            class="notification-indicator notification-indicator-primary notification-indicator-ripple"></span>
                    </a>
                    <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="messageDropdown">
                        <div class="dropdown-header">
                            <h6 class="dropdown-title">Messages</h6>
                            <p class="dropdown-title-text">You have 4 unread messages</p>
                        </div>
                        <div class="dropdown-body">
                            <div class="dropdown-list">
                                <div class="image-wrapper">
                                    <img class="profile-img" src="assets/images/profile/male/image_1.png"
                                        alt="profile image">
                                    <div class="status-indicator rounded-indicator bg-success"></div>
                                </div>
                                <div class="content-wrapper">
                                    <small class="name">Clifford Gordon</small>
                                    <small class="content-text">Lorem ipsum dolor sit amet.</small>
                                </div>
                            </div>
                            <div class="dropdown-list">
                                <div class="image-wrapper">
                                    <img class="profile-img" src="assets/images/profile/female/image_2.png"
                                        alt="profile image">
                                    <div class="status-indicator rounded-indicator bg-success"></div>
                                </div>
                                <div class="content-wrapper">
                                    <small class="name">Rachel Doyle</small>
                                    <small class="content-text">Lorem ipsum dolor sit amet.</small>
                                </div>
                            </div>
                            <div class="dropdown-list">
                                <div class="image-wrapper">
                                    <img class="profile-img" src="assets/images/profile/male/image_3.png"
                                        alt="profile image">
                                    <div class="status-indicator rounded-indicator bg-warning"></div>
                                </div>
                                <div class="content-wrapper">
                                    <small class="name">Lewis Guzman</small>
                                    <small class="content-text">Lorem ipsum dolor sit amet.</small>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-footer">
                            <a href="#">View All</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="appsDropdown" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-apps mdi-1x"></i>
                    </a>
                    <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="appsDropdown">
                        <div class="dropdown-header">
                            <h6 class="dropdown-title">Apps</h6>
                            <p class="dropdown-title-text mt-2">Authentication required for 3 apps</p>
                        </div>
                        <div class="dropdown-body border-top pt-0">
                            <a class="dropdown-grid">
                                <i class="grid-icon mdi mdi-jira mdi-2x"></i>
                                <span class="grid-tittle">Jira</span>
                            </a>
                            <a class="dropdown-grid">
                                <i class="grid-icon mdi mdi-trello mdi-2x"></i>
                                <span class="grid-tittle">Trello</span>
                            </a>
                            <a class="dropdown-grid">
                                <i class="grid-icon mdi mdi-artstation mdi-2x"></i>
                                <span class="grid-tittle">Artstation</span>
                            </a>
                            <a class="dropdown-grid">
                                <i class="grid-icon mdi mdi-bitbucket mdi-2x"></i>
                                <span class="grid-tittle">Bitbucket</span>
                            </a>
                        </div>
                        <div class="dropdown-footer">
                            <a href="#">View All</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<style>
    .t-header {
        display: flex;
        height: $header-height;
        background: $header-bg;
        z-index: $header-zindex;

        @include media-breakpoint-down(md) {
            padding-left: 5px;
            padding-right: 5px;
        }

        .t-header-brand-wrapper {
            display: flex;
            align-items: center;
            height: $header-height;
            width: $sidebar-width;
            min-width: $sidebar-width;
            max-width: $sidebar-width;
            background: $brand-header-bg;
            z-index: $header-zindex;
            padding-left: 18px;

            a {
                display: flex;
                align-items: center;
                color: theme-color(light);
                font-weight: 500;
                @include font-size(20);

                .logo {
                    max-width: 100%;
                    width: $logo-width;
                }

                .logo-mini {
                    display: none;
                    max-width: 100%;
                    width: $logo-mini-width;
                }

                p {
                    color: inherit;
                    font-size: inherit;
                    font-weight: inherit;
                    margin-bottom: 0;
                }
            }

            @include media-breakpoint-down(md) {
                padding-left: 0;
                justify-content: center;

                a {
                    .logo-mini {
                        width: 25px;
                    }
                }
            }
        }

        .t-header-content-wrapper {
            display: flex;
            align-items: center;
            flex-direction: row;
            width: 100%;
            max-width: 100%;
            padding: 0 $body-margin-x;

            @include media-breakpoint-down(md) {
                padding: 0 1rem;
            }

            .t-header-search-box {
                display: flex;
                width: 20%;
                height: 40px;
                background: $card-bg;
                border-radius: 50px;
                padding: 5px;
                transition: 0.3s ease-in-out;
                transition-property: "width";
                overflow: hidden;

                @media (max-width: 580px) {
                    display: none;
                }

                .form-control {
                    height: inherit;
                    border: none;
                    background: transparent;
                    @include font-size(16);
                    font-weight: 500;
                    padding-left: 0;
                    padding: 5px 20px;

                    @include input-placeholder {
                        font-size: inherit;
                        font-family: inherit;
                        font-weight: inherit;
                    }
                }

                button[type="submit"] {
                    height: 100%;
                    border-radius: 50px;
                    padding: 0 7px;
                    box-shadow: 0px 0px 5px -1px theme-color(primary);
                    transition-duration: 0.3s;
                    transition-property: "box-shadow";

                    i {
                        font-size: 15px;
                    }

                    &:hover {
                        box-shadow: 0px 0px 8px -1px theme-color(primary);
                    }
                }
            }

            .t-header-content {
                display: flex;
                align-items: center;
                width: 100%;
                max-width: 100%;

                .nav {
                    .nav-item {
                        .nav-link {
                            position: relative;

                            i {
                                color: $sidebar-link-color;
                            }

                            .notification-indicator {
                                position: absolute;
                                top: 12px;
                                right: 12px;
                            }
                        }

                        &:last-child {
                            .nav-link {
                                padding-right: 0;
                            }
                        }
                    }
                }
            }
        }

        .t-header-toggler {
            background: transparent;
            border: none;
            margin-left: auto;

            i {
                @include font-size(22);
            }

            &.t-header-mobile-toggler {
                margin-left: 0;
                margin-right: 15px;
            }
        }

        &.fixed-top {
            position: fixed;
        }
    }

    .header-fixed {
        .t-header {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            width: 100%;
            z-index: $header-zindex;
        }

        .sidebar {
            padding-top: $header-height;

            .t-header-brand-wrapper {
                position: fixed;
                left: 0;
                top: 0;
                z-index: $header-zindex;
                width: $sidebar-width;
                box-shadow: 0px 2px 8px 0px rgba(0, 0, 0, 0.05);
            }

            .navigation-menu {
                z-index: 1;
            }
        }
    }

</style>
