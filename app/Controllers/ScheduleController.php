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

    public function fetch_my_order()
    {

        $type = trim($this->request->getGet('type'));
        $userModel = new \App\Models\Schedule(); // Adjust according to your actual model name
    
        if($type == 'N'){
            $result = $userModel->where('user_id', session()->get('user_id'))
            ->where('status', $type) // Add the new condition here
            ->findAll();
        }else{
            $result = $userModel->where('user_id', session()->get('user_id'))
            ->where('status', $type) // Add the new condition here
            ->findAll();
        }

        if ($result) {

            // Return data as JSON
            return $this->response->setJSON($result);
        } else {
            // Return empty array if user's schedule is not found
            return $this->response->setJSON([]);
        }
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
            return redirect()->to(base_url('schedule-pickup'))->with('success', 'Schedule Booked successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Registration failed. Please try again later.');
        }
        

    }
}
