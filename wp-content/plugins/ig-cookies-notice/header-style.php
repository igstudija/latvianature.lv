<?php 

define('WP_USE_THEMES', false);
require_once('../../../wp-load.php');

$i_accept_cookies = $_COOKIE["i_accept_cookies"] ?? '';

if ($i_accept_cookies=='') { 


$styletime = date("YmdHi", filemtime(plugin_dir_path( __FILE__ ) . "style.css")); ?>

<link rel='stylesheet' id='ig-cookies-css' rel="preload"
    href='<?php echo plugins_url('ig-cookies-notice/style.css', dirname(__FILE__)); ?>?ver=<?php echo $styletime; ?>'
    type='text/css' media='all' />

<style>
<?php if (get_option('message-background')) {
    ?>.ig-modal-dialog .ig-modal-content {
        background:
            <?php echo get_option('message-background');
        ?> !important;
    }

    <?php
}

?><?php if (get_option('title-background')) {
    ?>.ig-modal-dialog .ig-modal-content .ig-modal-header {
        background:
            <?php echo get_option('title-background');
        ?> !important;
    }

    <?php
}

?><?php if (get_option('title-text')) {
    ?>.ig-modal-dialog .ig-modal-content .ig-modal-header .ig-modal-title {
        color:
            <?php echo get_option('title-text');
        ?> !important;
    }

    <?php
}

?><?php if (get_option('message-text')) {
    ?>.ig-modal-body p {
        color:
            <?php echo get_option('message-text');
        ?> !important;
    }

    <?php
}

?><?php if (get_option('button-border-radius')) {
    ?>.ig-btn {
        border-radius:
            <?php echo get_option('button-border-radius');
        ?>px
    }

    <?php
}

?><?php if (get_option('privacy-policy-button')) {
    ?>.cookies-privacy {
        background:
            <?php echo get_option('privacy-policy-button');
        ?> !important;
        border:
            <?php echo get_option('privacy-policy-button-border');
        ?>px solid <?php echo get_option('privacy-policy-button-border-color');
        ?>
    }

    .cookies-privacy:hover {
        opacity:
            0.7;
        border:
            <?php echo get_option('privacy-policy-button-border');
        ?>px solid <?php echo get_option('privacy-policy-button-border-color');
        ?>
    }

    <?php
}

?><?php if (get_option('privacy-policy-button-text')) {

    ?>.cookies-privacy,
    .cookies-privacy:hover {
        color: <?php echo get_option('privacy-policy-button-text');
        ?> !important;
    }

    <?php
}

?><?php if (get_option('accept-button')) {
    ?>.cookies-accept {
        background:
            <?php echo get_option('accept-button');
        ?> !important;
        border:
            <?php echo get_option('accept-button-border');
        ?>px solid <?php echo get_option('accept-button-border-color');
        ?>
    }

    .cookies-accept:hover {
        opacity:
            0.7;
        border:
            <?php echo get_option('accept-button-border');
        ?>px solid <?php echo get_option('accept-button-border-color');
        ?>
    }

    <?php
}

?><?php if (get_option('accept-button-text')) {

    ?>.cookies-accept,
    .cookies-accept:hover {
        color:
            <?php echo get_option('accept-button-text');
        ?> !important;
    }

    .cookies-accept:hover {
        opacity:
            0.7;
    }

    <?php
}

?><?php if (get_option('choose-button')) {
    ?>.cookies-choose {
        background:
            <?php echo get_option('choose-button');
        ?> !important;
        border:
            <?php echo get_option('choose-button-border');
        ?>px solid <?php echo get_option('choose-button-border-color');
        ?>
    }

    .cookies-choose:hover {
        opacity:
            0.7;
        border:
            <?php echo get_option('choose-button-border');
        ?>px solid <?php echo get_option('choose-button-border-color');
        ?>
    }

    <?php
}

?><?php if (get_option('choose-button-text')) {

    ?>.cookies-choose,
    .cookies-choose:hover {
        color:
            <?php echo get_option('choose-button-text');
        ?> !important;
    }

    <?php
}

?>
</style>

<?php } 