<?php defined('BASEPATH') OR exit('No direct script access allowed.');

class Reset_password_controller extends Base_Controller {

    public function __construct() {

        parent::__construct();

        $this->template->set_layout('reset_password');
    }

    public function index() {

        $this->load->library('form_validation');

        $login_rules = array(
            array(
                'field' => 'username',
                'label' => $this->lang->line('ui_username').' / '.'E-mail',
                'rules' => 'nohtml|trim|max_length[256]|required'
            ),
        );

        $this->form_validation->set_rules($login_rules);

        if ($this->form_validation->run()) {

            $username = $this->input->post('username');

            // Implement your own login system.
            if ($this->_login($username, $password)) {

                if ($this->input->get('continue')) {
                    redirect($this->input->get('continue'));
                }

                $this->session->set_flashdata('confirmation_message', '<nobr>Hello, <strong>'.$username.'</strong>.</nobr>');
                redirect(site_url());

            } else {

                $error_message = 'No username or email account with that name is found.';
                // Code for the real authentication system.
                //switch ($this->_last_login_error()) {
                //
                //    case LOGIN_USER_UNVERIFIED:
                //        $error_message = 'The user account has not been verified by e-mail.';
                //        break;
                //
                //    case LOGIN_USER_SUSPENDED:
                //        $error_message = 'The user has been suspended';
                //        break;
                //
                //    default:
                //        $error_message = $error_message = 'Wrong username or password.';
                //        break;
                //}

                $this->template->set('error_message', $error_message);
            }

        } elseif (validation_errors()) {

            $this->template->set('error_message', '<ul>'.validation_errors('<li>', '</li>').'</ul>');
            $this->template->set('validation_errors', validation_errors_array());
        }


        $this->template
            ->prepend_title('Forgot Password?')
            ->set_partial('scripts', 'reset_password_scripts')
            ->build('reset_password');
    }


}