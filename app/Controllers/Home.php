<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function __construct(){
        helper(['url']);
        $this->user = new UserModel();
    }

    public function index()
    {
    // Fetch users with pagination
    $data['users'] = $this->user->orderby('id', 'DESC')->paginate(10, 'group1');
    $data['pager'] = $this->user->pager;

    // Load views
    echo view('/includes/header');
    echo view('home', $data);
    echo view('/includes/footer');
    }

    public function saveUser(){
        $username = $this->request->getVar('username');
        $email = $this->request->getVar('email');

        $this->user->save(["username" => $username, "email" => $email]);

        session()->setFlashdata("success", "Data inserted successfully");
        return redirect()->to(base_url());
    }

    public function getSingleUser($id){
        $data = $this->user->where('id', $id)->first();
        echo json_encode($data);
    }

    public function updateUser(){
        $id = $this->request->getVar('updateId');
        $username = $this->request->getVar('username');
        $email = $this->request->getVar('email');

        $data = [
            'username' => $username,
            'email' => $email
        ];

        $this->user->update($id, $data);

        session()->setFlashdata("success", "User updated successfully");
        return redirect()->to(base_url());
    }

    public function deleteUser() {
        // Get the user ID from the form submission
        $id = $this->request->getVar('id');
    
        // Attempt to delete the user
        if ($this->user->delete($id)) {
            // Set success flash message
            session()->setFlashdata('success', 'User deleted successfully.');
        } else {
            // Set error flash message if deletion failed
            session()->setFlashdata('error', 'Failed to delete user.');
        }
    
        // Redirect back to the home page
        return redirect()->to(base_url());
    }
}
