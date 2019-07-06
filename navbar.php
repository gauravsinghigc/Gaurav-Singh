<?php 
if (isset($_GET['msg_value'])) {
    ?>
     <script type="text/javascript">
         alert("Email-id Already Existing! Please subscribe with new mail id");
     </script>
    <?php
}  else {
    echo "";
}?>


 <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PJQ64QB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
 <section class="menu cid-rn7xJ9MbeD" once="menu" id="menu2-2d">
    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span style="background-color: white;"></span>
                <span style="background-color: white;"></span>
                <span style="background-color: white;"></span>
                <span style="background-color: white;"></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="<?php echo $href_index; ?>">
                        <img src="img/favicon/gauravsinghigc-favicon-icon.png" alt='#<?php echo $title."".$alt; ?>' title="<?php echo $alt." - ".$title; ?>"  style="height: 5.0rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap">
                    <a class="navbar-caption text-white display-2 a_red" href="<?php echo $href_index; ?>">
                       Gaurav Singh
                    </a>
                </span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link text_3d text-white display-6" href="<?php echo $href_index; ?>">
                        Home
                    </a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link link text_3d text-white display-6" href="gauravsinghigc-timeline.php">
                        Timeline
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text_3d text-white display-6" href="gauravsinghigc-projects.php">
                        Projects
                    </a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link link text_3d text-white display-6" href="gauravsinghigc-store.php">
                        GSI-Store
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text_3d text-white display-6" href="gauravsinghigc-gallery.php">
                        Gallery
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text_3d text-white display-6" href="gauravsinghigc-contact.php">
                        Contact Me
                    </a>
                </li>
            </ul>
            <div class="navbar-buttons mbr-section-btn">
                <a class="btn btn-sm btn-secondary display-7" href="<?php echo $download_req; ?>" target="_blank">
                    <span class="mbrib-save mbr-iconfont mbr-iconfont-btn" style="font-size: 15px;"></span>
                    Download Resume
                </a>
            </div>
        </div>
    </nav>
</section>