<footer class="footer">
    <div class="row">
        <div class="col-sm-6 text-center text-sm-right order-sm-1">
            <ul class="text-gray">
                <li><a href="#">Terms of use</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
        </div>
        <div class="col-sm-6 text-center text-sm-left mt-3 mt-sm-0">
            <small class="text-muted d-block">Copyright © 2019 <a href="http://www.uxcandy.co"
                    target="_blank">UXCANDY</a>. All rights reserved</small>
            <small class="text-gray mt-2">Handcrafted With <i class="mdi mdi-heart text-danger"></i></small>
        </div>
    </div>
</footer>
<style>
    footer {
        position: absolute;
        bottom: 0px;
        left: 0;
        right: 0;
        padding: 2rem $body-margin-x;
        max-width: $body-container-width;
        margin-left: auto;
        margin-right: auto;

        @include media-breakpoint-down(md) {
            padding: 20px 0px 30px 0;
        }

        ul {
            margin-left: 0;
            padding-left: 0;

            li {
                display: inline-block;
                padding: 0 10px 0 0;
                line-height: 1;

                &:not(:last-child) {
                    margin-right: 10px;
                    border-right: $border-width $border-style $border-color;
                }

                a {
                    @include ms-respond(font-size, -2);
                    font-weight: 600;
                    letter-spacing: $letter-spacing;
                    color: $text-gray;
                }
            }
        }
    }

</style>
