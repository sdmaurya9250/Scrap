<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // return view('components/header') . view('welcome_message');
        return view('welcome_message');
    }
    public function location(): string
    {
        return view('location');
    }
    public function profile(): string
    {
        return view('profile');
    }
    public function orders(): string
    {
        return view('orders');
    }
    public function about(): string
    {
        return "HEllo About Page";
    }
    public function login(): string
    {
        // return "HEllo About Page";
        return view('login');
    }

    public function dashboard(): string
    {
        // echo session()->get('user_id');

        // return  view('/');


        // return "Dashboard Page";
        // return view('components/header') . view('welcome_message');
        return view('dashboard');
    }
    public function ResetPassword(): string
    {

        return view('forgotpassword');
        // return view('dashboard');
    }

    public function register()
    {
        try {
            $contact = trim($this->request->getPost('contact'));
            $email = trim($this->request->getPost('email'));
            $name = trim($this->request->getPost('name'));
            $password = trim($this->request->getPost('password'));
            $otp = trim($this->request->getPost('otp'));

            $userData = [
                'contact' => $contact,
                'email' => $email,
                'name' => $name,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'otp' => $otp,
                'created_at' => date('Y-m-d H:i:s') // Add current timestamp as created_at
            ];

            // Save user data to the database using Model (you need to create a model)
            $userModel = new \App\Models\User(); // Adjust according to your actual model name
            $userModel->insert($userData);

            // If the insertion is successful, redirect to the login page
            return redirect()->to(base_url('login'))->with('success', 'Registration successful. Please log in.');
        } catch (\Exception $e) {
            // If an exception occurs during data insertion, handle it here
            // You can log the error, redirect back to the registration page with an error message, etc.
            return redirect()->back()->withInput()->with('error', 'Registration failed. Please try again later.');
        }
    }



    public function loginform()
    {

        // Test@1234
        // test@gmail.com
        $email = trim($this->request->getPost('email'));
        $password = trim($this->request->getPost('password'));

        $userModel = new \App\Models\User(); // Adjust according to your actual model name
        $user = $userModel->where('email', $email)->first();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                // If login is successful, store user data in session
                $userData = [
                    'user_id' => $user['id'],
                    'name' => $user['name'],
                    'email' => $user['email']
                    // Add more user data if needed
                ];

                session()->set($userData);
                session()->set('user_id', $user['id']);
                // session()->set_userdata('logged_in', TRUE);
                // Redirect to dashboard page
                return redirect()->to('dashboard');
            } else {

                // return 'Invalid email or password';
                // Password does not match
                return redirect()->back()->withInput()->with('error', 'Invalid email or password');
            }
        } else {
            // User not found

            // return 'Failed';
            return redirect()->back()->withInput()->with('error', 'Invalid email or password');
        }
    }

    // public function dashboard()
    // {
    //     // Load dashboard view or redirect if not logged in
    //     if (!session()->has('user_id')) {
    //         return redirect()->to('login')->with('error', 'Please login to access the dashboard');
    //     }

    //     return view('dashboard');
    // }

}
