        <!-- Header
        ============================================= -->
        <header id="header" class="transparent-header page-section dark">

            <div id="header-wrap">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="Canvas Logo"></a>
                        <a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a>
                    </div><!-- #logo end -->

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav id="primary-menu">

                        <ul class="one-page-menu"><?php 
$pageids = array();
foreach($pagesall as $filter_result){
    if ( in_array($filter_result->page_id, $pageids) ) {
        continue;
    }
    $pageids[] = $filter_result->page_id;
    ?>
                            <li class="current"><a href="?pageid=<?php echo $filter_result->page_id?>" ><div><?php echo Userpages::get(Auth::user()->id, $filter_result->page_id, 'pagename', true); ?></div></a></li> <?php } ?>
                        </ul>

                    </nav><!-- #primary-menu end -->

                </div>

            </div>

        </header><!-- #header end -->