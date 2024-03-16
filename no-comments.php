<?php 

function restrict_buddyboss_comments_by_role($can_comment, $activity) {
    // Specify the roles that are not allowed to comment
    $restricted_roles = array('basic');

    // Check if the current user has one of the restricted roles
    foreach ($restricted_roles as $role) {
        if (current_user_can($role)) {
            // Disable commenting for users with the restricted role
            return false;
        }
    }

    // Allow comments for users with other roles
    return $can_comment;
}
add_filter('bp_activity_can_comment', 'restrict_buddyboss_comments_by_role', 10, 2);
