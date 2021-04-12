<?php
class Course extends CI_Controller
{
    public function all_course()
    {
        $this->load->view('users/course/all_course.php');
    }
    public function course_details()
    {
        $this->load->view('users/course/course_details.php');
    }
}
?>
