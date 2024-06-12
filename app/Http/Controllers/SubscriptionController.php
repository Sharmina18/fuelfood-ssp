<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubscriptionRequest;
use App\Http\Requests\UpdateSubscriptionRequest;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('subscriptions.index', [
            'subscriptions' => Subscription::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subscriptions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubscriptionRequest $request)
    {
        $validated = $request->validated();

        //create slug
        $validated['slug'] = \Str::slug($validated['name']);

        Subscription::create($validated);

        return redirect()->route('subscriptions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subscription $subscription)
    {
        return view('subscriptions.show', [
            'subscription' => $subscription,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subscription $subscription)
    {
        return view('subscriptions.edit', [
            'subscription' => $subscription,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubscriptionRequest $request, Subscription $subscription)
    {
        $validated = $request->validated();

        //create slug
        $validated['slug'] = \Str::slug($validated['name']);

        $subscription->update($validated);

        return redirect()->route('subscriptions.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscription $subscription)
    {
        $model = $subscription;
        $model->delete();

        return redirect()->route('subscriptions.index');
    }
}
