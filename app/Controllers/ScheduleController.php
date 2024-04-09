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
        // Load necessary libraries and models
        // $this->load->model('Schedule_model');
        $userModel = new \App\Models\Schedule();
    
        // Fetch data from the database
        $result = $this->Schedule_model->get_schedule_by_id(session()->get('user_id'));
    
        if ($result) {
            // Assuming you have a method 'getOrders()' in your Schedule model to retrieve associated orders
            $orders = $result->getOrders();
    
            // You may need to format the data according to your needs
            $formattedOrders = [];
            foreach ($orders as $order) {
                $formattedOrders[] = [
                    'pickup_address' => $order->pickup_address,
                    'scrap_type' => $order->scrap_type,
                    'created_at' => $order->created_at
                ];
            }
    
            // Return data as JSON
            echo json_encode($formattedOrders);
        } else {
            // Return empty array if user's schedule is not found
            echo json_encode([]);
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
            return redirect()->to(base_url('my-order'));
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Registration failed. Please try again later.');
        }
        

    }
}
