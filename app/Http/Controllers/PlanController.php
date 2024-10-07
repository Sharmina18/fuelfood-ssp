<?php

namespace App\Http\Controllers;
use App\Http\Requests\StorePlanRequest;
use App\Http\Requests\UpdatePlanRequest;
use App\Models\Plan;

class PlanController extends Controller
{
    public function index()
    {
       return view ('plans.index', [
           'plans' => Plan::all(),
       ]);
    }

    public function create()
    {
        return view('plans.create');
    }

    public function store(StorePlanRequest $request)
    {
        $validated = $request->validated();

        //create slug
        $validated['slug'] = \Str::slug($validated['name']);

        Plan::create($validated);

        return redirect()->route('plans.index');
    }

    public function show(Plan $plan)
    {
        return view('plans.show');
    }

    public function update(UpdatePlanRequest $request, Plan $plan)
    {
        $validated = $request->validated();

        //create slug
        $validated['slug'] = \Str::slug($validated['name']);

        $plan->update($validated);

        return redirect()->route('plans.index');
    }

    public function edit(Plan $plan)
    {
        return view('plans.edit', compact('plan'));
    }

    public function destroy(string $id)
    {
        $plan = Plan::findOrFail($id);
        $plan->delete();

        return redirect()->route('plans.index')->with('success', 'Plan deleted successfully.');
    }
}
