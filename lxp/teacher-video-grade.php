<?php
global $treks_src;
$post   = get_post(get_post_meta($_GET['assignment'], 'course_id', true));
// Start the loop.
$args = array(
    'posts_per_page'   => -1,
    'post_type'        => 'tl_lesson',
    'meta_query' => array(
        array(
            'key'   => 'tl_course_id',
            'value' =>  $post->ID
        )
    )
);
$lessons = get_posts($args);
?>

<table class='table table-bordered table-stripped'>
    <thead>
        <tr>
            <th> User Email</th>
            <?php
            foreach ($lessons as $key => $lesson) {
                echo '<th> '.$lesson->post_title.'</th>';
                $lessonIds[] = $lesson->ID;
            }
            ?>
        </tr>
    </thead>
    <tbody>
    <?php
    $students = get_course_participants($lessonIds);
    foreach ($students as $student) {
    ?>
        <tr>
            <td><?php echo $student->user_email ?> </td>
            <?php
            foreach ($lessons as $key => $lesson) {
                echo '<td><b>' . get_result($student->ID, $lesson->ID, $treks_src) . '</b> </td>';
            }
            ?>
        </tr>
    <?php } ?>
    </tbody>
    <?php
    if(empty($students)){
        $tableLength = count($lessonIds) + 2;
        echo "<tr><td style='text-align:center' colspan=". $tableLength .">No record found</td></tr>";
    }
    ?>
</table>

<?php
function get_course_participants($lessonIds)
{
    global $wpdb;
    $lessonIds = join(",",$lessonIds);   
    $usersTable= $wpdb->prefix . "users";
    $gradesTable=  $wpdb->prefix . "tiny_lms_grades";
    return $wpdb->get_results("SELECT * FROM ".$usersTable." inner join ".$gradesTable." on ".$usersTable.".ID=".$gradesTable.".user_id where ".$gradesTable.".lesson_id In (".$lessonIds.") group by ".$usersTable.".ID");
}


function get_result($student_id, $lesson_id, $treks_src)
{
    global $wpdb;
    $respones = $wpdb->get_results("SELECT score FROM " . $wpdb->prefix . "tiny_lms_grades WHERE user_id = " . $student_id . "
   AND lesson_id= " . $lesson_id);
    if ($respones) {
        return (($respones[0]->score / 1) * 100) . '%' . ' <a href="'. site_url().'/grade-assignment/?assignment='.$_GET['assignment'].'&student='.$_GET['student'].'&lesson_id='.$lesson_id.'&student_id='.$student_id.'" title="" rel="permalink"><img src="'.$treks_src.'/assets/img/header_search.svg" alt="svg" /></a>';
    }
}
?>
