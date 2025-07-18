<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Http\Requests\StoreAgentRequest;
use App\Http\Requests\UpdateAgentRequest;

class AgentController extends Controller
{
    public function index()
    {
        foreach (Agent::all() as $agent) {
            echo $agent->title;
        }
        $agents = Agent::where('id', 1)
            ->orderBy('title')
            ->limit(10)
            ->get();
    }
}
