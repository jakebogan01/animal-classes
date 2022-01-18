<?php

namespace App\Http\Controllers;

use App\Models\Fox;
use App\Models\Sloth;
use App\Models\Monkey;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class AnimalController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        return view('welcome');
    }

    /**
     * @return Application|Factory|View
     */
    public function monkey(): View|Factory|Application
    {
        $monkey = new Monkey();

        return view('monkey', [
            'monkey' => $monkey,
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function fox(): View|Factory|Application
    {
        $fox = new Fox();

        return view('fox', [
            'fox' => $fox,
        ]);
    }

    /**
     * @return Factory|View|Application
     */
    public function sloth(): Factory|View|Application
    {
        $sloth = new Sloth();

        return view('sloth', [
            'sloth' => $sloth,
        ]);
    }
}
