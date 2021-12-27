<?php
$courseAndMember = readline();
$courses = [];

while ($courseAndMember !== 'end') {
    $courseAndMember = explode(' : ', $courseAndMember);
    $course = $courseAndMember[0];
    $member = $courseAndMember[1];
    if (!key_exists($course, $courses)) {
        $courses[$course] = [];
    }
    $courses[$course][] = $member;
    $courseAndMember = readline();
}

uksort($courses, function ($key1, $key2) use ($courses) {
    $firstCourseCountMembers = count($courses[$key1]);
    $secondCourseCountMembers = count($courses[$key2]);
    return $secondCourseCountMembers <=> $firstCourseCountMembers;
});

foreach ($courses as $course => $members) {
    sort($members);
    $membersCount = count($members);
    echo "$course: $membersCount" . PHP_EOL;
    foreach ($members as $member) {
        echo "-- $member" . PHP_EOL;
    }
}