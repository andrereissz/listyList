<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaskValidationRequest;
use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
    }

    public function create()
    {
        //
    }

    public function store(CreateTaskValidationRequest $request)
    {
        $data = $request->validated();

        $task = Task::create(
            [
                'user_id' => Auth::user()->id,
                'name' => $data['name'],
                'deadline' => $data['deadline'],
            ]
        );

        if ($task instanceof Task) {
            toastr()
                ->positionClass('toast-top-center')
                ->success('Task created with success!');
        } else {
            toastr()
                ->positionClass('toast-top-center')
                ->error('Invalid data provided.');
        }

        return redirect(route('dashboard'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
