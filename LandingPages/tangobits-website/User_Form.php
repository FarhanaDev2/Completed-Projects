<?php
include "header.php";
?>
<body>

<div class="whole-form">

<!--title -->

<div class="container-fluid">

    <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-info_form">

            <a href="Tangobits_Landing2.php"><img class="logo-display" src="./assets/images/Tangobits-logo.jpg"></a>

        </div>

    </div>
</div>

<!--title -->
<!--main-content -->

<div class="container-fluid main-content-all">


    <div class="container-fluid Desktop">

        <div class="row">
            <div class="container-fluid">
                <div
                    class="sec_msg-top col-lg-8 col-lg-push-1 col-md-8 col-md-push-1 col-sm-8 col-sm-push-1  col-xs-8 col-xs-push-1 Desktop">


                    <h1 class="top-start-msg"> Hello! We will be ready very soon</h1>

                    <div class="top-content-space"></div>
                    <p align="justify">We are working very hard to launch Tangobits. things are going well and the app
                        should be ready very soon. If you would like to get notified when we launch our product, please
                        put your eamil below and we wil make sure to stay in touch.</p>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="container-fluid">


                <div
                    class="col-lg-11 col-lg-push-1 col-md-12 col-md-push-1 col-sm-12 col-sm-push-1 col-xs-12 col-xs-push-1 Desktop"
                    style="padding-left:-5px">

                    <form id="user-form_landing" role="form">

                        <div class="row">
                            <div class="top-button-space"></div>
                        </div>


                        <div class="row">
                            <div class="col-lg-5  col-md-5 col-sm-6 col-xs-6">


                                <div class="top-button-space"></div>
                                <input type="hidden" class="form-control" name="customer-name" value="">

                                <div class="form-group form-group-user">
                                    <div class="row no-gutter">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 field_icon_user">
                                            <div class="type-icon-wrapper  type-image-svg"
                                                 style="background-image: url(./assets/images/icons/user.svg); background-color:#777;"></div>


                                        </div>

                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                            <input type="text"
                                                   class="form-control col-lg-5 col-md-5 col-sm-5 col-xs-5 name-large"
                                                   id="user-name" placeholder="Type your name" required="true">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>

                        </div>

                        <div class="row">
                            <div class="top-button-space"></div>
                        </div>


                        <div class="row">

                            <div class="fixed-div">
                                <div class="form-group email-button">

                                    <div class="row no-gutter">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 field_icon_email">
                                            <div class="type-icon-wrapper  type-image-svg"
                                                 style="background-image: url(./assets/images/icons/email.svg); background-color:#777;"></div>


                                        </div>
                                        <div class="email-place col-lg-5 col-md-5 col-sm-5 col-xs-5">

                                            <input type="email"
                                                   class="form-control col-lg-4 col-md-4 col-sm-4 col-xs-4 email-large"
                                                   id="user-email" placeholder="Type your email address"
                                                   required="true">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-lg col-md-5 remind Desktop">
                                            Remind Me
                                        </button>
                                    </div>

                                </div>
                            </div>


                        </div>

                    </form>

                </div>


            </div>


        </div>


        <div class="row">
            <div class="bottom-button-space_form"></div>
        </div>
    </div>
    <!--Desktop End-->

    <!--Mobile Start--->
    <div class="col-xs-12 Mobile">
        <div class="row">
            <div class="sec_msg_mobile col-xs-12 Mobile">
                <h3>Hello! We will be ready very soon</h3>
            </div>
        </div>
        <div class="row">
             <div class="top-content-space"></div>
        </div>
        <div class="row mid-msg-mobile">
            <p class="col-xs-12" align="justify">We are working very hard to launch Tangobits. things are going well and
                the app should be ready very soon. If you would like to get notified when we launch our product, please
                put your eamil below and we wil make sure to stay in touch.</p>
        </div>
        <div class="row">
            <form id="user-form_landing-mobile" role="form">

                <div class="row">
                    <div class="top-button-space"></div>
                </div>


                <div class="row">
                    <input type="hidden" class="form-control" name="customer-name" value="">

                    <div class="col-xs-12">
                        <div class="form-group form-info-mobile">
                            <div class="row no-gutter">

                                <div class="col-xs-1 field_icon_user-small">
                                    <div class="type-icon-wrapper  type-image-svg type-mobile"
                                         style="background-image: url(./assets/images/icons/user.svg); background-color:#777;"></div>

                                </div>


                                <div class="col-xs-10">
                                    <input type="text" class="form-control col-xs-4 name-small" id="user-name-mobile"
                                           placeholder="Type your name" required="true">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">

                        <div class="form-group form-info-mobile">
                            <div class="row no-gutter">
                                <div class="col-xs-1 field_icon_email-small">
                                    <div class="type-icon-wrapper  type-image-svg type-mobile"
                                         style="background-image: url(./assets/images/icons/email.svg); background-color:#777;"></div>


                                </div>

                                <div class="col-xs-10">
                                    <input type="text" class="form-control col-xs-4 email-small" id="user-email-mobile"
                                           placeholder="Type your email address" required="true">
                                </div>
                            </div>

                            <div class="row button-row" style="margin-top: 15px">
                                <button type="submit"
                                        class="btn btn-primary btn-sm col-sm-5 remind-small-mobile Mobile">Remind Me
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--<div class="row">


                    <div class="form-group col-xs-12">
                        <button type="submit" class="btn btn-primary btn-sm col-sm-5 remind-small-mobile Mobile">Remind Me</button>
                    </div>
                </div> -->

            </form>
        </div>
    </div>
    <!--Mobile End--->


</div>

<!--footer-->
<?php
$form_page=1;
include "footer.php";

?>


<!--footer-->




</div>
<!--Whole-->
</body>
</html>