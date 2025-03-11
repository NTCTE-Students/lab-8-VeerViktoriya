<?php 
trait Validatable {
    public function validatable($name, $email) {
        if (empty($name)) {
            print('Имя обязательно');
        } elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            print("В имене допускается использовать только символы латинского алфавита и пробел");
        }
        
        if (empty($email)) {
            print("Электронная почта обязательна");
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            print("У электронной почты некорректный формат");
        }
    }
}
class RegistrationForm {
    use Validatable;
        public function validatable1($name, $email) {
            $this ->validatable($name, $email);
        }
}
class LoginForm {
    use Validatable;
        public function validatable1($name, $email) {
            $this ->validatable($name, $email);
        }
}
$reg = new RegistrationForm();
$reg -> validatable1('gdgd', 'dad@mail.ru');
?>
