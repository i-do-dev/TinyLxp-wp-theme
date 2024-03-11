<?php
global $treks_src;
$teachers = $args["teachers"];
?>
<div id="teacher-tab-content" class="tab-pane fade" role="tabpanel">
    <div class="add-teacher-box" style="width: 43%">
        <!-- <div class="search-filter-box">
            <input type="text" name="text" placeholder="Search..." />
            <div class="filter-box">
                <img src="<?php echo $treks_src; ?>/assets/img/filter-alt.svg" alt="filter logo" />
                <p class="filter-heading">Filter</p>
            </div>
        </div> -->
        <button class="add-heading" type="button" type="button" data-bs-toggle="modal"
            data-bs-target="#teacherModal" class="primary-btn">
            Add New Teacher
        </button>
        <label for="import-teacher" class="primary-btn add-heading">
            Import Teachers (CSV)
        </label >
        <input type="file" id="import-teacher" hidden />
    </div>
    <div class="students-table">
        <table class="table">
            <thead>
                <tr>
                    <th class="">
                        <div class="th1">
                            Teacher
                            <img src="<?php echo $treks_src; ?>/assets/img/showing.svg" alt="logo" />
                        </div>
                    </th>
                    <th>
                        <div class="th1 th2">
                            Email
                            <img src="<?php echo $treks_src; ?>/assets/img/showing.svg" alt="logo" />
                        </div>
                    </th>
                    <th>
                        <div class="th1 th3">
                            District
                            <img src="<?php echo $treks_src; ?>/assets/img/showing.svg" alt="logo" />
                        </div>
                    </th>
                    <th>
                        <div class="th1 th3">
                            School
                            <img src="<?php echo $treks_src; ?>/assets/img/showing.svg" alt="logo" />
                        </div>
                    </th>
                    <th>
                        <div class="th1 th3">
                            Students
                            <img src="<?php echo $treks_src; ?>/assets/img/showing.svg" alt="logo" />
                        </div>
                    </th>
                    <th>
                        <div class="th1 th5">
                            ID
                            <img src="<?php echo $treks_src; ?>/assets/img/showing.svg" alt="logo" />
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($teachers as $teacher) {
                        $teacher_admin = get_userdata(get_post_meta($teacher->ID, 'lxp_teacher_admin_id', true));
                        $lxp_teacher_school = null;
                        $lxp_teacher_district = null;
                        $lxp_teacher_school_id = get_post_meta($teacher->ID, 'lxp_teacher_school_id', true);
                        if ($lxp_teacher_school_id) {
                            $lxp_teacher_school = get_post($lxp_teacher_school_id);
                            $lxp_teacher_district_id = get_post_meta($lxp_teacher_school->ID, 'lxp_school_district_id', true);
                            if ($lxp_teacher_district_id) {
                                $lxp_teacher_district = get_post($lxp_teacher_district_id);
                            }
                        }
                        $lxp_teacher_students = array();
                        if ($lxp_teacher_district && $lxp_teacher_school) {
                            $lxp_teacher_students = lxp_get_school_teacher_students($lxp_teacher_school->ID,  $teacher->ID);
                        }
                ?>
                    <tr>
                        <td class="user-box">
                            <div class="table-user">
                                <img src="<?php echo $treks_src; ?>/assets/img/profile-icon.png" alt="teacher" />
                                <div class="user-about">
                                    <h5><?php echo $teacher->post_title; ?></h5>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="table-status"><?php echo $teacher_admin->user_email?></div>
                        </td>
                        <td><?php echo $lxp_teacher_district ? $lxp_teacher_district->post_title : '---'; ?></td>
                        <td><?php echo $lxp_teacher_school ? $lxp_teacher_school->post_title : '---' ?></td>
                        <td><?php echo $lxp_teacher_students ? count($lxp_teacher_students) : 0 ?></td>
                        <!-- 
                        <td class="grade">
                            <?php 
                                /* $teacher_grades = json_decode(get_post_meta($teacher->ID, 'grades', true));
                                $teacher_grades = $teacher_grades ? $teacher_grades : array();
                                foreach ($teacher_grades as $grade) { */
                            ?>
                                <span><?php //echo $grade; ?></span>
                            <?php        
                                // }
                            ?>
                        </td>
                         -->
                        <td><?php echo $teacher->ID ?></td>
                        <td>
                            <div class="dropdown">
                                <button class="dropdown_btn" type="button" id="dropdownMenu2"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="<?php echo $treks_src; ?>/assets/img/dots.svg" alt="logo" />
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button" onclick="onTeacherEdit(<?php echo $teacher->ID; ?>)">
                                        <img src="<?php echo $treks_src; ?>/assets/img/edit.svg" alt="logo" />
                                        Edit</button>
                                    <!-- <button class="dropdown-item" type="button">
                                        <img src="<?php // echo $treks_src; ?>/assets/img/delete.svg" alt="logo" />
                                        Delete</button> -->
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>