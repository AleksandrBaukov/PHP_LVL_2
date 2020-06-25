<?php
	include_once 'm/User.php';

	class C_User extends C_Base {
		private $user;
        public function __construct () {
            $this->user = new User();
        }

		public function action_info() {

			$user_info = $this->user->get($_SESSION['user_id']);
			$this->title .= '' . $user_info['name'];
			$this->content = $this->Template('v/u_info.php', array('username' => $user_info['name'], 'userlogin' => $user_info['login']));
		}
		
		public function action_reg() {
			
			$this->title .= 'Регистрация';
			$this->content = $this->Template('v/u_reg.php', array());

			if($this->isPost()) {
				$result = $this->user->newR($_POST['name'], $_POST['login'], $_POST['password']);
				if ($result) {
					$this->content = $this->Template('v/u_reg.php', array('text' => $_POST['name']." вы успешно зарегестрированы!"));
				} else {
					$this->content = $this->Template('v/u_reg.php', array('text' => "Такой пользователь уже зарегестрирован !"));
				}
			}
		}

		public function action_login() {
			$this->title .= 'Вход';
			$this->content = $this->Template('v/u_login.php', array());

			if($this->isPost()) {
				$result = $this->user->login($_POST['login'], $_POST['password']);
				$this->content = $this->Template('v/u_login.php', array('text' => $result));
				
			}
		}

		public function action_logout() {
			$this->user->logout();
		}
	}
?>