<?php
class Login_test extends TestCase
{
    public function test_proses()
    {
        // Set request data
        $_POST['username'] = 'john';
        $_POST['password'] = 'doe';
        
        // Load login controller
        $this->request('POST', 'login/proses');
        
        // Check if session is set
        $this->assertTrue($this->session->logged_in);
        
        // Check internal implementation
        $this->assertEquals('john', $this->session->username);
        $this->assertEquals(1, $this->session->id_user_level);
    }
}

