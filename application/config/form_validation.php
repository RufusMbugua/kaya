<?php
$config = array('login/process_credentials' => array( array('field' => 'username', 'label' => 'Username', 'rules' => 'trim|required'), array('field' => 'password', 'label' => 'Password', 'rules' => 'trim|required|min_length[8]')));
