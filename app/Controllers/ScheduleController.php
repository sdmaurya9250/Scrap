<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Schedule;
class ScheduleController extends BaseController
{
    public function index()
    {
        //
    }

    public function fetch_my_order() {

        $this->load->model('your_model');
        
        // Fetch data from your_model
        $data = $this->your_model->fetch_data();

        // Return data as JSON
        echo json_encode($data);


    }
    public function schedule_pickup() {
        try {

            $rules = [
                'type'     => 'required',
                'pickup_address'  => 'required'
            ];
            
    
            if (!$this->validate($rules)) {
                return view('schedule_pickup', [
                    'validation' => $this->validator
                ]);
            }


            $type = trim($this->request->getPost('type'));
            $address = trim($this->request->getPost('pickup_address'));
            
            
            $userData = [
                'type' => $type,
                'pickup_address' => $address,
                'user_id' => session()->get('user_id'),
                'created_at' => date('Y-m-d H:i:s'),
                'status' => 'N'
            ];


            $scheduleModel = new Schedule();
            $inserted = $scheduleModel->insert($userData);
            return redirect()->to(base_url('my-order'));
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Registration failed. Please try again later.');
        }
        

    }
}
