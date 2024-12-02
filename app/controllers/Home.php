<?php 

class Home extends Controller
{
    public function index($a = '')
    {
        $model = new Model;
        
        $arr['user_id'] = 3;
        $arr['user_name'] = "john";
        $arr2['user_name'] = "batman";



        $result = $model->where($arr);

        show($result);

        $this->view('home');
    }
}
