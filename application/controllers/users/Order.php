<?php
class Order extends CI_Controller
{
    public function payment_status()
    {
        $this->load->view('users/order/payment_status.php');
    }
}
?>
