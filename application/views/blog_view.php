<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <!-- Set the viewport width to device width for mobile -->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width"/>

        <title>Lemon Art</title>

        <!-- Included CSS Files (Compressed) -->
        <link rel="stylesheet" href="<?= base_url() ?>stylesheets/social_foundicons.css">
        <link rel="stylesheet" href="<?= base_url() ?>stylesheets/social_foundicons_ie7.css">
        <link rel="stylesheet" href="<?= base_url() ?>stylesheets/foundation.css">
        <link rel="stylesheet" href="<?= base_url() ?>stylesheets/app.css">
        <script src="javascripts/modernizr.foundation.js"></script>
        <style>
            .entrada{
                margin: 8px;
                float: left;
                width: 550px;
                text-align: center;
                box-shadow: 0 1px 3px rgba(34, 25, 25, 0.9);
                padding: 15px;
            }

            .contenedor{
                margin: 0 auto;
            }
        </style>
    </head>
    <body>
        <?php
        $this->load->view("header");
        ?>
        <div class="row contenedor">
            <div class="twelve columns">
                <div class="row">

                    <div class="entrada">
                        <div>
                            <h3><a href="<?= base_url() ?>blog/entrada">Titulo</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquam semper congue. Praesent sapien ante, faucibus eu pretium vel, interdum ut massa. Ut dignissim pulvinar elit. Integer at libero sit amet libero porta tincidunt. Proin semper, urna ullamcorper vestibulum placerat, ligula risus elementum velit, sed laoreet purus dui quis velit. Donec vel velit eget lectus rutrum pellentesque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam gravida ullamcorper augue vel rutrum. Maecenas cursus eros eu sapien ornare ut aliquet tellus aliquet. Aliquam sit amet mauris at nibh placerat tempus. Sed in libero tellus, in sagittis tellus. Proin non interdum odio. Phasellus sit amet viverra ipsum.

                                Morbi mauris lectus, interdum nec ullamcorper vitae, eleifend vel lorem. Curabitur eget nunc enim, vel pulvinar est. Aenean viverra, nulla nec eleifend cursus, nisi sem malesuada eros, et posuere justo magna vitae leo. Nulla a sollicitudin ligula. Suspendisse ac dolor diam. Aenean interdum justo sed lacus convallis quis venenatis turpis porttitor. In felis neque, bibendum ut venenatis sed, pulvinar quis massa. Donec luctus mi a justo condimentum consectetur. Morbi eget nunc ut diam dapibus porta.

                                Nunc lectus nibh, faucibus ac rutrum non, volutpat in lacus. Ut varius semper lorem sit amet porta. Etiam eget metus lacus. Nulla facilisi. Cras nec nisi leo, in porttitor turpis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam dictum tortor vel elit laoreet ultrices. Donec placerat interdum sapien et placerat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam dignissim tempor quam, ac aliquam lacus imperdiet at. Etiam ullamcorper diam et ante elementum eget sodales orci aliquet. Vivamus aliquet nibh eleifend turpis malesuada vehicula. Sed libero elit, aliquet nec varius vel, egestas vitae justo. Vivamus consectetur tincidunt placerat. Pellentesque eu sem at ante fermentum porta. Vivamus dignissim ipsum eget erat eleifend scelerisque ac ut lacus.</p>
                        </div>
                    </div>

                    <div class="entrada">
                        <div>
                            <h3><a href="#">Titulo</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquam semper congue. Praesent sapien ante, faucibus eu pretium vel, interdum ut massa. Ut dignissim pulvinar elit. Integer at libero sit amet libero porta tincidunt. Proin semper, urna ullamcorper vestibulum placerat, ligula risus elementum velit, sed laoreet purus dui quis velit. Donec vel velit eget lectus rutrum pellentesque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam gravida ullamcorper augue vel rutrum. Maecenas cursus eros eu sapien ornare ut aliquet tellus aliquet. Aliquam sit amet mauris at nibh placerat tempus. Sed in libero tellus, in sagittis tellus. Proin non interdum odio. Phasellus sit amet viverra ipsum.

                                Morbi mauris lectus, interdum nec ullamcorper vitae, eleifend vel lorem. Curabitur eget nunc enim, vel pulvinar est. Aenean viverra, nulla nec eleifend cursus, nisi sem malesuada eros, et posuere justo magna vitae leo. Nulla a sollicitudin ligula. Suspendisse ac dolor diam. Aenean interdum justo sed lacus convallis quis venenatis turpis porttitor. In felis neque, bibendum ut venenatis sed, pulvinar quis massa. Donec luctus mi a justo condimentum consectetur. Morbi eget nunc ut diam dapibus porta.</p>
                        </div>
                    </div>

                    <div class="entrada">
                        <div>
                            <h3><a href="#">Titulo</a></h3>
                            <p>Aliquam non tellus et felis blandit viverra. Vestibulum aliquet dapibus dolor, ut iaculis ipsum suscipit at. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras vel massa turpis. Nunc lacus elit, congue ut feugiat ac, posuere nec diam. Sed consectetur augue vitae massa gravida eget fringilla tortor condimentum. Pellentesque et libero quis lorem pretium convallis non sit amet enim. Praesent blandit, nulla quis pellentesque blandit, est erat molestie libero, sit amet auctor justo nibh vel tortor. Proin ultrices rhoncus nisl et hendrerit. Nullam lectus lorem, mollis ut placerat elementum, fringilla non neque. Vivamus ac arcu a dolor cursus sollicitudin. Ut auctor accumsan tellus, id euismod augue fermentum nec. Cras ornare fermentum mattis.</p>
                        </div>
                    </div>

                    <div class="entrada">
                        <div>
                            <h3><a href="#">Titulo</a></h3>
                            <p>Nunc lectus nibh, faucibus ac rutrum non, volutpat in lacus. Ut varius semper lorem sit amet porta. Etiam eget metus lacus. Nulla facilisi. Cras nec nisi leo, in porttitor turpis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam dictum tortor vel elit laoreet ultrices. Donec placerat interdum sapien et placerat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam dignissim tempor quam, ac aliquam lacus imperdiet at. Etiam ullamcorper diam et ante elementum eget sodales orci aliquet. Vivamus aliquet nibh eleifend turpis malesuada vehicula. Sed libero elit, aliquet nec varius vel, egestas vitae justo. Vivamus consectetur tincidunt placerat. Pellentesque eu sem at ante fermentum porta. Vivamus dignissim ipsum eget erat eleifend scelerisque ac ut lacus.

                                Aliquam non tellus et felis blandit viverra. Vestibulum aliquet dapibus dolor, ut iaculis ipsum suscipit at. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras vel massa turpis. Nunc lacus elit, congue ut feugiat ac, posuere nec diam. Sed consectetur augue vitae massa gravida eget fringilla tortor condimentum. Pellentesque et libero quis lorem pretium convallis non sit amet enim. Praesent blandit, nulla quis pellentesque blandit, est erat molestie libero, sit amet auctor justo nibh vel tortor. Proin ultrices rhoncus nisl et hendrerit. Nullam lectus lorem, mollis ut placerat elementum, fringilla non neque. Vivamus ac arcu a dolor cursus sollicitudin. Ut auctor accumsan tellus, id euismod augue fermentum nec. Cras ornare fermentum mattis.

                            </p>
                        </div>
                    </div>

                    <div class="entrada">
                        <div>
                            <h3><a href="#">Titulo</a></h3>
                            <p>Morbi mauris lectus, interdum nec ullamcorper vitae, eleifend vel lorem. Curabitur eget nunc enim, vel pulvinar est. Aenean viverra, nulla nec eleifend cursus, nisi sem malesuada eros, et posuere justo magna vitae leo. Nulla a sollicitudin ligula. Suspendisse ac dolor diam. Aenean interdum justo sed lacus convallis quis venenatis turpis porttitor. In felis neque, bibendum ut venenatis sed, pulvinar quis massa. Donec luctus mi a justo condimentum consectetur. Morbi eget nunc ut diam dapibus porta.

                                Nunc lectus nibh, faucibus ac rutrum non, volutpat in lacus. Ut varius semper lorem sit amet porta. Etiam eget metus lacus. Nulla facilisi. Cras nec nisi leo, in porttitor turpis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam dictum tortor vel elit laoreet ultrices. Donec placerat interdum sapien et placerat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam dignissim tempor quam, ac aliquam lacus imperdiet at. Etiam ullamcorper diam et ante elementum eget sodales orci aliquet. Vivamus aliquet nibh eleifend turpis malesuada vehicula. Sed libero elit, aliquet nec varius vel, egestas vitae justo. Vivamus consectetur tincidunt placerat. Pellentesque eu sem at ante fermentum</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <?php
        $this->load->view("footer");
        ?>

        <!-- Included JS Files (Compressed) -->
        <script src="javascripts/jquery.js"></script>
        <script src="javascripts/foundation.min.js"></script>
        <script src="javascripts/masonry.js"></script>
        <!-- Initialize JS Plugins -->
        <script src="javascripts/app.js"></script>
        <script src="javascripts/main.js"></script> 
        <script>
            $(document).ready(function(){
                
                $('.contenedor').masonry({
                    itemSelector: '.entrada',
                    isFitWidth: true,
                    animationOptions: {
                        duration: 400
                    }
                });
            })
        </script>
    </body>
</html>
