<?php

namespace App\Controllers;
// defined('BASEPATH') OR exit('No direct script access allowed');

use Twilio\Rest\Client;
use App\Models\User;
use App\Models\Support;

class Home extends BaseController
{
    public function index(): string
    {

        return view('welcome_message');
    }
    public function location(): string
    {
        return view('location');
    }

    public function profile()
    {
        $userModel = new User(); // Load the User model
        // Get user by email
        $user = $userModel->where('email', session()->get('email'))->first();

        if ($user) {
            // Check if the user exists
            $contact = $user->contact ?? ''; // Get the contact field if available, otherwise set it to an empty string
            // Pass the user data to the view
            return view('profile', ['user' => $user, 'contact' => $contact]);
        } else {
            // Handle the case where the user is not found
            return "User not found";
        }
    }

    public function orders(): string
    {
        return view('orders');
    }

    public function about(): string
    {
        return "HEllo About Page";
    }
    // public function login(): string
    // {
    //     // return "HEllo About Page";
    //     return view('login');
    // }

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
        if ($this->request->getMethod() == "post") {
            try {

                $rules = [
                    'contact'   => 'required|max_length[10]',
                    'name'      => 'required|max_length[20]',
                    'email'     => 'required|valid_email',
                    'password'  => 'required|min_length[6]|max_length[20]'
                ];


                if (!$this->validate($rules)) {
                    return view('register', [
                        'validation' => $this->validator
                    ]);
                }


                $contact = trim($this->request->getPost('contact'));
                $email = trim($this->request->getPost('email'));
                $name = trim($this->request->getPost('name'));
                $password = trim($this->request->getPost('password'));

                // Generate OTP
                $otp = mt_rand(100000, 999999);
                session()->set('otp', $otp);
                session()->set('email', $email);
                session()->set('set_otp', TRUE);

                $userData = [
                    'name' => $name,
                    'contact' => $contact,
                    'email' => $email,
                    'password' => password_hash($password, PASSWORD_DEFAULT),
                    'otp' => $otp,
                    'created_at' => date('Y-m-d H:i:s')
                ];


                $userModel = new \App\Models\User();
                $inserted = $userModel->insert($userData);
                return redirect()->to(base_url('verify-otp'));
            } catch (\Exception $e) {
                return redirect()->back()->withInput()->with('error', 'Registration failed. Please try again later.');
            }
        }
        return view('register');
    }



    // public function verify_otp() {
    //     // Your OTP verification view
    //     return view('verify_otp_form');
    // }


    public function schedule_pickup()
    {

        $rules = [
            'scrap'     => 'required',
            'address'  => 'required'
        ];


        if (!$this->validate($rules)) {
            return view('register', [
                'validation' => $this->validator
            ]);
        }
    }

    public function process_otp_verification()
    {

        $rules = [
            'otp'   => 'required|max_length[6]'
        ];

        if (!$this->validate($rules)) {
            return view('verify_otp_form', [
                'validation' => $this->validator
            ]);
        }


        // Get OTP from form
        $otp_entered = trim($this->request->getPost('otp'));
        $email = session()->get('email');

        // Load user model


        $userModel = new \App\Models\User();
        // Get user by email
        $user = $userModel->where('email', $email)->first();

        if ($user && $otp_entered) {
            // Get OTP from session
            $otp_session = session()->get('otp');

            if ($otp_entered == $otp_session) {
                // OTP verification successful
                // Clear OTP session
                session()->remove('otp');
                session()->remove('email');
                session()->remove('set_otp');
                // You can now register the user or proceed with any other action
                // For example, redirect to a success page
                return redirect()->to('login')->with('success', 'OTP verification successfull. User registered.');
            } else {
                // OTP verification failed
                return redirect()->back()->withInput()->with('error', 'OTP verification failed. Please try again.');
            }
        } else {
            // User not found or OTP not entered
            return redirect()->back()->withInput()->with('error', 'Invalid request.');
        }
    }


    public function supports(){

        // echo "Hello";
        // exit;

        // Validation rules
        $rules = [
            'email'    => 'required|valid_email',
            'name' => 'required|min_length[6]',
            'contact' => 'required',
            'message' => 'required'
        ];
    
        try {
            // Validation
            if (!$this->validate($rules)) {
                return view('support', [
                    'validation' => $this->validator
                ]);
            }
    
            // Insert data into database
            $model = new Support;
    
            $data = [
                'email' => $this->request->getPost('email'),
                'name' => $this->request->getPost('name'),
                'contact' => $this->request->getPost('contact'),
                'message' => $this->request->getPost('message'),
                'created_at' => date('Y-m-d H:i:s')
            ];
    
            $model->insert($data);
    
            // Optionally, you can redirect the user to another page after successful insertion
            return redirect()->to('dashboard');
        } catch (\Exception $e) {
            // Handle any exceptions
            // You can log the error, display an error message, or redirect the user to an error page
            return "An error occurred: " . $e->getMessage();
        }
    }
    


    public function login()
    {
        if ($this->request->getMethod() == "post") {
            $rules = [
                'email'    => 'required|valid_email',
                'password' => 'required|min_length[6]'
            ];

            if (!$this->validate($rules)) {
                return view('login', [
                    'validation' => $this->validator
                ]);
            }

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
                    // Password does not match
                    return redirect()->back()->withInput()->with('error', 'Invalid email or password');
                }
            } else {
                // User not found
                return redirect()->back()->withInput()->with('error', 'Invalid email or password');
            }
        }

        return view('login');
    }



    public function destroy_session()
    {
        // Get session service
        $session = session();

        // Destroy session
        $session->destroy();

        // Redirect to home page or any other page
        return redirect()->to('/login');
    }

    public function update()
    {
        // Retrieve the email address and other information from the request
        $email = $this->request->getPost('email');
        $name = $this->request->getPost('name');
        $contact = $this->request->getPost('contact');

        // Load the User model
        $userModel = new User();

        // Get the user record by email
        $user = $userModel->where('email', $email)->first();

        // Check if the user exists
        if ($user) {
            // Check if there is a new profile picture uploaded
            $profilePic = $this->request->getFile('profilePic');

            if ($profilePic->isValid() && !$profilePic->hasMoved()) {
                // Generate a unique name for the profile picture based on date and time
                $newName = date('ymdHis') . '_' . $name . '.png';

                // Check if the user already has a profile picture
                if (!empty($user['image'])) {
                    // If the user has an existing profile picture, delete it
                    $oldImagePath = ROOTPATH . 'public/uploads/profile_pics/' . $user['image'];
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }

                // Convert uploaded image to PNG format and save it
                $image = imagecreatefromstring(file_get_contents($profilePic->getTempName()));
                imagepng($image, ROOTPATH . 'public/uploads/profile_pics/' . $newName);
                imagedestroy($image);

                // Update user's information
                $user['name'] = $name;
                $user['contact'] = $contact;
                $user['image'] = $newName;
            } else {
                // Update user's information without changing the profile picture
                $user['name'] = $name;
                $user['contact'] = $contact;
            }

            // Save the changes
            if ($userModel->save($user)) {
                // Update successful
                return redirect()->to('/profile');
            } else {
                return redirect()->back()->withInput()->with('error', 'Failed to update user information');
            }
        } else {
            // User not found
            return redirect()->back()->withInput()->with('error', 'User not found');
        }
    }

    public function paper(): string
    {
        return view('paper');
    }
    public function plastic(): string
    {
        return view('plastic');
    }
    public function metal(): string
    {
        return view('metal');
    }
    public function ewaste(): string
    {
        return view('ewaste');
    }
    public function clothe(): string
    {
        return view('clothe');
    }
}
