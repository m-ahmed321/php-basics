<?php


class LoginForm
{
    protected $errors = [];
    public function validate($email, $password)
    {
        if (!Validater::email($email)) {
            $this->errors['email'] = 'Please provide a valid email address';
        }
        if (!Validater::string($password)) {
            $this->errors['password'] = 'Please provide a valid password';
        }

        return empty($this->errors);
    }
}