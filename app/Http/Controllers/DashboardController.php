<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Project;
use App\Task;

class DashboardController extends Controller
{
    //
    public function index()
    {
        // 사용자, 프로젝트, 태스트 수 가져오기
        $uc = User::count();   
        $pc = Project::count();
        $tc = Task::count();
     
        $total = ['user' => $uc, 'project' => $pc, 'task' => $tc];
     
        // 뷰에 전달
        return view('main')->with('total', $total);
    }
}
