<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-07-27 19:46:32 --> Email could not been sent. Mailer Error (Line 166): Invalid address:  (From): it@proderi
ERROR - 2022-07-27 19:46:32 --> #0 C:\Bitnami\wampstack-7.4.26-0\apache2\htdocs\easycitas\application\libraries\Notifications.php(94): EA\Engine\Notifications\Email->send_appointment_details()
#1 C:\Bitnami\wampstack-7.4.26-0\apache2\htdocs\easycitas\application\controllers\Appointments.php(590): Notifications->notify_appointment_saved()
#2 C:\Bitnami\wampstack-7.4.26-0\apache2\htdocs\easycitas\system\core\CodeIgniter.php(481): Appointments->ajax_register_appointment()
#3 C:\Bitnami\wampstack-7.4.26-0\apache2\htdocs\easycitas\index.php(341): require_once('C:\\Bitnami\\wamp...')
#4 {main}
