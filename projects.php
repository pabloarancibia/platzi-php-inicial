<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 27/06/2019
 * Time: 20:50
 */

use App\Models\Project;


$projects = Project::all();

//    $project1 = new Project('Project 1', 'Description 1');
//    $projects = [$project1];

function printElementProj($proj) {
    // if($job->visible == false) {
    //   return;
    // }

    echo '<div class="project">';
    echo '<h5>' . $proj->title . '</h5>';
    echo '<div class="row">';
    echo '<div class="col-3">';
    echo '<img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">';
    echo '</div>';
    echo '<div class="col">';
    echo '<p>' . $proj->description . '</p>';
    echo '<strong>Technologies used:</strong>';
    echo '<span class="badge badge-secondary">' . $proj->tec_1 . '</span>';
    echo '<span class="badge badge-secondary">' . $proj->tec_2 . '</span>';
    echo '<span class="badge badge-secondary">' . $proj->tec_3 . '</span>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
?>