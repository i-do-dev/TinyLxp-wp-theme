<?php
if (!isset($_GET['filter'])) {
    $filterDefaultParams = array('filter' => 'all', 'sort' => 'asc');
    wp_redirect( get_permalink($post->ID) . '?' . build_query($filterDefaultParams) );
    die();
}

global $post;
global $treks_src;
$teacher_post = lxp_get_teacher_post( get_userdata(get_current_user_id())->ID );
$restricted_courses = get_post_meta($teacher_post->ID, 'restricted_courses');
$restricted_courses = is_array($restricted_courses) && count($restricted_courses) > 0 ? $restricted_courses : array(0);

$treks_filtered = array();
$courses_saved = get_post_meta($teacher_post->ID, 'courses_saved');

// filter $courses_saved to only include treks that are not in $restricted_courses
$courses_saved = array_filter($courses_saved, function ($trek) use ($restricted_courses) { return !in_array($trek, $restricted_courses); });

if ($_GET['filter'] == 'saved') {
    $treks_filtered = lxp_get_teacher_saved_courses($teacher_post->ID, $courses_saved, '', urldecode($_GET['sort']), '');
} else if ($_GET['filter'] == 'recent'){
    $lxp_visited_treks = get_post_meta($teacher_post->ID, 'lxp_visited_courses');
    $lxp_visited_treks = array_diff($lxp_visited_treks, $restricted_courses);
    $lxp_visited_treks = array_diff($lxp_visited_treks, $courses_saved);
    
    $lxp_visited_treks_to_show = is_array($lxp_visited_treks) && count($lxp_visited_treks) > 0 ? array_reverse($lxp_visited_treks) : array();
    $lxp_visited_treks_to_show = array_filter($lxp_visited_treks_to_show, function ($trek) use ($restricted_courses) { return !in_array($trek, $restricted_courses); });

    $recent_query_args = array( 'post_type' => TL_TREK_CPT , 
                                'posts_per_page'   => -1,
                                'post_status' => array( 'publish' ),
                                'post__in' => $lxp_visited_treks_to_show, 
                                'orderby' => 'post__in' );
    
    $recent_query = new WP_Query( $recent_query_args );    
    $treks_filtered = count($lxp_visited_treks_to_show) > 0 ? $recent_query->get_posts() : array();
}

$args = array(
    'posts_per_page'   => -1,
    'post_type'        => TL_TREK_CPT,
    'orderby'        => 'meta_value_num',
    'order' => 'asc'
);


$sortVal = urldecode($_GET['sort']);
if(!($sortVal === '' || $sortVal === 'none')) {
    $args['order'] = $sortVal;
}

if ( get_userdata(get_current_user_id())->user_email === "guest@rpatreks.com" ) {
    $args = array(
        'include' => '15',
        'post_type'        => 'tl_course',
        'order' => 'post__in'
    );
}

if (count($restricted_courses) > 0) {
    $args['post__not_in'] = $restricted_courses;
}
$courses = get_posts($args);
// Start the loop.
while (have_posts()) : the_post();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="<?php echo $treks_src; ?>/style/main.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo $treks_src; ?>/style/header-section.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link href="<?php echo $treks_src; ?>/style/treksstyle.css" rel="stylesheet" />
    <style type="text/css">
        .treks-card {
            width: 300px !important;
            position: relative !important;
        }
        .treks-card-link {
            text-decoration: none !important;
        }
        /* .treks-card-saved with icon element in it in top right absolute position */
      .treks-card-saved {
        position: absolute;
        top: 0;
        right: 0;
        width: 35px;
        height: 38px;
        z-index: 2;
        margin-top: 10px;
        margin-right: 8px;
      }
      .treks-card-saved-back {
        position: absolute;
        top: 0;
        right: 0;
        width: 20px;
        height: 20px;
        z-index: 1;
        margin-top: 15px;
        margin-right: 15px;
        background-color: #ffffff;
      }

      .btn-check:checked + .btn, .btn.active, .btn.show, .btn:first-child:active, :not(.btn-check) + .btn:active {
        background-color: #0b5d7a !important;
      }

      .btn {
        border: var(--bs-btn-border-width) solid #0b5d7a !important;
      }
      .btn-outline-primary {
        --bs-btn-color: #0b5d7a !important;
      }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <?php get_template_part('trek/header-logo'); ?>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav me-auto mb-2 mb-lg-0">
                    <div class="header-logo-search">

                        <!-- searching input -->
                        <div class="header-search">
                            <img src="<?php echo $treks_src; ?>/assets/img/header_search.svg" alt="svg" />
                            <input placeholder="Search" />
                        </div>
                    </div>
                </div>
                <div class="d-flex" role="search">
                    <div class="header-notification-user">
                        <?php get_template_part('trek/user-profile-block') ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Basic Container -->
    <section class="main-container treks_main_container">
        <!-- Nav Section -->
        <div class="main-container nav_container">
            <nav class="nav-section nav_section_treks">
                <?php get_template_part('trek/navigation') ?>
            </nav>
        </div>
        <!-- Recent Filters & TREKs flex -->
        <div class="filter_treks_flx">
            <!-- Recent TREKs -->
            <section class="recent-treks-section filter_treks_section filter_my_treks_sec" style="width: 80%; margin: 0 auto;">
                <div class="recent-treks-section-div">
                    <!--  TREKs header-->
                    <div class="section-div-header">
                        <div class="container">
                            <div class="row">
                                <div class="col col-md-2">
                                    <h2 style="margin-top: 8px;">My Courses</h2>
                                </div>  
                                <div class="col col-md-10"></div>
                            </div>
                            <hr />
                        </div>
                    </div>
                    <nav class="nav-section treks_nav" style="padding-top: 10px;">
                        <!-- make bootstrap row with 5 columns -->
                        <div class="row">
                            <div class="col col-md-6">
                                <label for="filterBtns" class="form-label">Filter</label>
                                <div id="filterBtns" class="form-control" style="padding: 0px; border: 0px;">
                                    <div class="btn-group" role="group" aria-label="Filter by">
                                        <input type="radio" class="btn-check" name="trekFilter" id="trekFilterAll" autocomplete="off" onclick="apply_filter('all');" <?php echo isset($_GET['filter']) && $_GET['filter'] === 'all' ? 'checked' : '' ?>>
                                        <label class="btn btn-outline-primary" for="trekFilterAll">All</label>

                                        <input type="radio" class="btn-check" name="trekFilter" id="trekFilterRecent" autocomplete="off" onclick="apply_filter('recent');" <?php echo isset($_GET['filter']) && $_GET['filter'] === 'recent' ? 'checked' : '' ?>>
                                        <label class="btn btn-outline-primary" for="trekFilterRecent">Recent</label>

                                        <input type="radio" class="btn-check" name="trekFilter" id="trekFilterSaved" autocomplete="off" onclick="apply_filter('saved');" <?php echo isset($_GET['filter']) && $_GET['filter'] === 'saved' ? 'checked' : '' ?>>
                                        <label class="btn btn-outline-primary" for="trekFilterSaved">Saved</label>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col col-md-5">
                                <label for="sortBtn" class="form-label">Sort</label>
                                <div class="treks_inner_flx">
                                    <!-- <img src="<?php // echo $treks_src; ?>/assets/img/filter-right-logo.svg" /> -->
                                    <a href="#" id="sortLink" style="text-decoration: none;">
                                        <div class="sort_flex_bx">
                                            <img src="<?php echo $treks_src;?>/assets/img/filter-sort-logo.svg" />
                                            <p>Sort by <?php echo isset($_GET['sort']) && ($_GET['sort'] === 'asc' || $_GET['sort'] === 'none') ? 'A-Z' : 'Z-A'; ?></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col col-md-1">
                                <p style="text-align: right;">
                                    <a href="<?php echo get_permalink($post->ID); ?>">Clear</a>
                                </p>
                            </div>
                        </div>  

                        <!-- <ul class="treks_ul" id="myTab" role="tablist">
                            <li>
                                <button class="nav-link active" id="all-tab" data-bs-toggle="tab"
                                    data-bs-target="#all-tab-pane" type="button" role="tab" aria-controls="all-tab-pane"
                                    aria-selected="true">All</button>
                            </li>
                        </ul> -->
                    </nav>
                    <!-- TREKs cards -->
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active recent-treks-cards-list treks_card_list" id="all-tab-pane"
                            role="tabpanel" aria-labelledby="all-tab" tabindex="0">
                            <!-- each cards  -->
                            <?php
                            if ($_GET['filter'] == 'saved' || $_GET['filter'] == 'recent') {
                                foreach($treks_filtered as $trek) {
                            ?>
                                <a href="<?php echo get_post_permalink($trek->ID); ?>" class="treks-card-link">
                                    <div class="recent-treks-card-body treks-card">
                                        <?php if (in_array($trek->ID, $courses_saved)) { ?>
                                            <div class="treks-card-saved"><img width="35" height="35" src="<?php echo $treks_src; ?>/assets/img/trek-save-filled-icon.svg" alt="svg" /></div>
                                            <div class="treks-card-saved-back"></div>
                                        <?php } ?>
                                        <div>
                                                <?php
                                                    if(get_the_post_thumbnail($trek->ID, "medium", array( 'class' => 'rounded' ))){
                                                        echo get_the_post_thumbnail($trek->ID, "medium", array( 'class' => 'rounded' ));
                                                    } else {
                                                        ?>
                                                        <img width="300" height="180" src="<?php echo $treks_src; ?>/assets/img/tr_main.jpg" class="rounded wp-post-image" />
                                                        <?php
                                                    }
                                                    // if else case for image of course
                                                ?>
                                        </div>
                                        <div>
                                        <h3><?php echo get_the_title($trek->ID); ?></h3>
                                        <!-- <span>Due date: May 17, 2023</span> -->
                                        </div>
                                    </div>
                                </a>
                            <?php
                                }
                            } else {
                            ?>
                            <?php
                                foreach($courses as $trek) {
                            ?>
                                <a href="<?php echo get_post_permalink($trek->ID); ?>" class="treks-card-link">
                                    <div class="recent-treks-card-body treks-card">
                                        <?php if (in_array($trek->ID, $courses_saved)) { ?>
                                            <div class="treks-card-saved"><img width="35" height="35" src="<?php echo $treks_src; ?>/assets/img/trek-save-filled-icon.svg" alt="svg" /></div>
                                            <div class="treks-card-saved-back"></div>
                                        <?php } ?>
                                            <div>
                                                <?php
                                                    if(get_the_post_thumbnail($trek->ID, "medium", array( 'class' => 'rounded' ))){
                                                        echo get_the_post_thumbnail($trek->ID, "medium", array( 'class' => 'rounded' ));
                                                    } else {
                                                        ?>
                                                        <img width="300" height="180" src="<?php echo $treks_src; ?>/assets/img/tr_main.jpg" class="rounded wp-post-image" />
                                                        <?php
                                                    }
                                                    // if else case for image of course
                                                ?>
                                            </div>
                                        <div>
                                        <h3><?php echo get_the_title($trek->ID); ?></h3>
                                        <!-- <span>Due date: May 17, 2023</span> -->
                                        </div>
                                    </div>
                                </a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script
        src="<?php echo $treks_src; ?>/js/Animated-Circular-Progress-Bar-with-jQuery-Canvas-Circle-Progress/dist/circle-progress.js"></script>
    <script src="<?php echo $treks_src; ?>/js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

    <script type="text/javascript">
        var urlQueryParams = {filter: "<?php echo $_GET['filter']; ?>", sort: "<?php echo $_GET['sort']; ?>"};
        function apply_filter(filter) {
            urlQueryParams = {...urlQueryParams, filter};
            window.location = window.filterUrl + "?" + jQuery.param(urlQueryParams);
        }

        jQuery(document).ready(function() {
            window.filterUrl = '<?php echo get_permalink($post->ID); ?>';


            jQuery("#sortLink").on('click', function(event) {
                event.preventDefault();
                let sortVal = 'none';
                if (urlQueryParams.sort === 'none' || urlQueryParams.sort === 'desc') {
                    sortVal = 'asc';
                } else if (urlQueryParams.sort === 'asc') {
                    sortVal = 'desc';
                }

                urlQueryParams = {...urlQueryParams, sort: sortVal};
                window.location = window.filterUrl + "?" + jQuery.param(urlQueryParams);
            });
        })
    </script>
</body>

</html>
<?php endwhile; ?>