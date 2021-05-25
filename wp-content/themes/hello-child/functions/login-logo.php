<?php

function my_login_logo() { ?>
<style type="text/css">
.login {
    background: url('https://latvianature.daba.gov.lv/wp-content/uploads/2021/03/Mezs_sunu-koki-scaled.jpg');
    background-size: cover;
    position: relative;
}

#login {
    z-index: 9999;
    position: relative;
}

.login::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: #000;
    opacity: 0.5;
}

.login #backtoblog a,
.login #nav a {
    text-decoration: none;
    color: #fff !important;
}

.login h1 {
    background: #fff;
    margin-bottom: 0;
    padding-top: 10px;
    po
}

#login h1 a,
.login h1 a {
    background-image: url("https://latvianature.daba.gov.lv/wp-content/uploads/2021/02/LatViaNature_LOGO_KRASAINS.png");
    height: 65px;
    width: 320px;
    background-size: auto 100%;
    background-repeat: no-repeat;
    padding-bottom: 30px;
    margin: 0;
}

.login form {
    border: 0 !important;
    margin-top: 0 !important;
}
</style>
<?php }
    add_action( 'login_enqueue_scripts', 'my_login_logo' );