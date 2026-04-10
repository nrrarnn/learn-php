
<?php

// switch
$role = "admin";

switch($role) {
    case "admin":
        echo "Full Access";
        break;
    case "editor":
        echo "Can Edit";
        break;
    default:
        echo "Guest";
        break;
}

// match
$access_level = match ($role) {
    'admin'   => 'Full System Access',
    'editor'  => 'Can manage content',
    'student' => 'View-only access',
    default   => 'Guest access',
};

echo $access_level;

?>