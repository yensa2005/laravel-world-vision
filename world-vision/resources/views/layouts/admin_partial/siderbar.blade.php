<div class="sidebar">
    <div class="user-profile">
        <div class="display-avatar animated-avatar">
            <img class="profile-img img-lg rounded-circle" src="assets/images/profile/male/image_1.png"
                alt="profile image">
        </div>
        <div class="info-wrapper">
            <p class="user-name">Allen Clerk</p>
            <h6 class="display-income">$3,400,00</h6>
        </div>
    </div>
    <ul class="navigation-menu">
        <li class="nav-category-divider">MAIN</li>
        <li>
            <a href="index.html">
                <span class="link-title">Dashboard</span>
                <i class="mdi mdi-gauge link-icon"></i>
            </a>
        </li>
        <li>
            <a href="#sample-pages" data-toggle="collapse" aria-expanded="false">
                <span class="link-title">Sample Pages</span>
                <i class="mdi mdi-flask link-icon"></i>
            </a>
            <ul class="collapse navigation-submenu" id="sample-pages">
                <li>
                    <a href="pages/sample-pages/login_1.html" target="_blank">Login</a>
                </li>
                <li>
                    <a href="pages/sample-pages/error_2.html" target="_blank">Error</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#ui-elements" data-toggle="collapse" aria-expanded="false">
                <span class="link-title">UI Elements</span>
                <i class="mdi mdi-bullseye link-icon"></i>
            </a>
            <ul class="collapse navigation-submenu" id="ui-elements">
                <li>
                    <a href="pages/ui-components/buttons.html">Buttons</a>
                </li>
                <li>
                    <a href="pages/ui-components/tables.html">Tables</a>
                </li>
                <li>
                    <a href="pages/ui-components/typography.html">Typography</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="pages/forms/form-elements.html">
                <span class="link-title">Forms</span>
                <i class="mdi mdi-clipboard-outline link-icon"></i>
            </a>
        </li>
        <li>
            <a href="pages/charts/chartjs.html">
                <span class="link-title">Charts</span>
                <i class="mdi mdi-chart-donut link-icon"></i>
            </a>
        </li>
        <li>
            <a href="pages/icons/material-icons.html">
                <span class="link-title">Icons</span>
                <i class="mdi mdi-flower-tulip-outline link-icon"></i>
            </a>
        </li>
        <li class="nav-category-divider">DOCS</li>
        <li>
            <a href="docs/docs.html">
                <span class="link-title">Documentation</span>
                <i class="mdi mdi-asterisk link-icon"></i>
            </a>
        </li>
    </ul>
    <div class="sidebar-upgrade-banner">
        <p class="text-gray">Upgrade to <b class="text-primary">PRO</b> for more exciting features</p>
        <a class="btn upgrade-btn" target="_blank"
            href="http://www.uxcandy.co/product/label-pro-admin-template/">Upgrade to PRO</a>
    </div>
</div>
<style>
    .sidebar {
        position: relative;
        display: block;
        height: 100%;
        min-height: 100vh;
        width: $sidebar-width;
        min-width: $sidebar-width;
        max-width: $sidebar-width;
        background: $sidebar-bg;

        .sidebar-header {
            border-bottom: 1px solid #2c3744;
        }

        .user-profile {
            padding: 50px 0 0 0;
            display: flex;
            flex-direction: column;
            text-align: center;

            .user-name {
                font-weight: 600;
                @include ms-respond(font-size, 1);
                margin-top: 25px;
            }

            .display-income {
                margin-top: 5px;
                color: rgba($body-text-color, 0.4);
            }
        }

        .navigation-menu {
            padding-left: 0;
            padding-bottom: 80px;
            margin-bottom: 0;
            margin-top: 18px;

            li {
                display: block;
                margin: 0;
                transition-duration: 0.25s;
                transition-timing-function: cubic-bezier(0.26, 0.66, 0.45, 0.78);
                transition-property: "background";

                &.nav-category-divider {
                    position: sticky;
                    top: 64px;
                    display: block;
                    background: $sidebar-bg;
                    margin: 15px 0px 0px 0px;
                    padding: 20px $sidebar-link-padding-right 10px $sidebar-link-padding-left;
                    font-size: 10px;
                    color: rgba($body-text-color, 0.4);
                    z-index: 1;
                    font-weight: 500;

                    &:first-child {
                        margin-top: 0;
                    }
                }

                a {
                    display: flex;
                    align-items: center;
                    flex-direction: row-reverse;
                    justify-content: flex-end;
                    padding: $sidebar-link-padding-top $sidebar-link-padding-right $sidebar-link-padding-bottom $sidebar-link-padding-left;
                    font-size: $sidebar-link-font-size;
                    line-height: $sidebar-link-line-height;
                    color: $sidebar-link-color;
                    letter-spacing: $letter-spacing;
                    font-weight: 500;
                    @include ellipsis;

                    .link-icon {
                        margin-right: 15px;
                        line-height: $sidebar-link-line-height;
                        color: $sidebar-link-color;
                        @include font-size(19);
                        transition-duration: 0.3s;
                        transition-property: "margin-right";
                    }
                }

                &:last-child {
                    a {
                        border-bottom: none;
                    }
                }

                .navigation-submenu {
                    background: $sidebar-link-submenu-bg;
                    padding: 0px 0 10px 30px;

                    &.collapsing {
                        transition: 0.2s ease-in;
                    }

                    li {
                        display: inherit;

                        a {
                            display: block;
                            padding: calc(#{$sidebar-link-padding-top - 3px}) $sidebar-link-padding-right calc(#{$sidebar-link-padding-bottom - 3px}) calc(#{$sidebar-link-padding-left} + 2px);
                            opacity: 0.5;
                            @include ms-respond(font-size, -2);
                            letter-spacing: $letter-spacing;
                            font-weight: 500;
                            font-size: calc(#{$sidebar-link-font-size} - 1px);
                            transition: 0.3s ease-in-out;
                            transition-property: color;

                            &[data-toggle="collapse"] {
                                position: relative;

                                &:after {
                                    content: "";
                                    height: 7px;
                                    width: 7px;
                                    border-radius: 25px;
                                    position: absolute;
                                    right: calc(#{$sidebar-link-padding-right} + 4px);
                                    top: 14px;
                                }
                            }

                            &.active {
                                opacity: 0.7;
                                color: $body-text-color;
                            }

                            &:hover {
                                opacity: 0.7;
                                color: $body-text-color;
                            }
                        }

                        &:first-child {
                            a {
                                padding-top: 10px;

                                &:after {
                                    top: 15px;
                                }
                            }
                        }

                        &:nth-child(5n + 1) {
                            a {
                                &:after {
                                    background: theme-color(success);
                                }
                            }
                        }

                        &:nth-child(5n + 2) {
                            a {
                                &:after {
                                    background: theme-color(primary);
                                }
                            }
                        }

                        &:nth-child(5n + 3) {
                            a {
                                &:after {
                                    background: theme-color(danger);
                                }
                            }
                        }

                        &:nth-child(5n + 4) {
                            a {
                                &:after {
                                    background: theme-color(warning);
                                }
                            }
                        }

                        &:nth-child(5n + 5) {
                            a {
                                &:after {
                                    background: theme-color(info);
                                }
                            }
                        }

                        .navigation-submenu {
                            padding-left: 0px;

                            li {
                                a {
                                    opacity: 0.5;
                                }
                            }
                        }
                    }
                }

                &.active {
                    a {
                        .link-title {
                            color: $sidebar-active-link-color;
                        }

                        .link-icon {
                            color: $sidebar-active-link-color;
                        }
                    }
                }
            }

            >li:not(.nav-category-divider) {

                &:hover {

                    a {
                        &:not([aria-expanded="true"]) {
                            .link-icon {
                                margin-right: 20px;
                                color: $sidebar-active-link-color;
                            }
                        }
                    }
                }

                >a[data-toggle="collapse"] {
                    position: relative;

                    &:after {
                        content: "\f142";
                        font-family: "Material Design Icons";
                        font-size: 15px;
                        text-rendering: auto;
                        line-height: inherit;
                        font-weight: bolder;
                        position: absolute;
                        top: 13px;
                        right: $sidebar-link-padding-right;
                        display: block;
                        transition: 0.3s;
                        transition-property: transform;
                        color: lighten($sidebar-link-color, 20%);
                    }

                    &[aria-expanded="true"] {
                        background: $sidebar-link-submenu-bg;

                        &:after {
                            transform: rotate(90deg);
                        }
                    }
                }
            }
        }
    }

</style>
