<?php

namespace App\Http\Controllers\Customers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Customer;
use App\Models\CustomerPipelineStage;
use App\Models\LeadSource;
use App\Models\PipelineStage;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Spatie\Permission\Models\Role;

class CustomerConttroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::latest()->paginate(100);

        // dd($customers);
        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $employees = User::pluck('name', 'id');
        $leadSources = LeadSource::pluck('name', 'id');
        $pipelineStages = PipelineStage::pluck('name', 'id');

        return view('customers.create', compact('employees', 'leadSources', 'pipelineStages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerRequest $request): RedirectResponse
    {

        $code = date('Ym') . str_pad(Customer::whereYear('created_at', now())->count() + 1, 5, '0', STR_PAD_LEFT);

        Customer::create($request->validated() + ['code' => $code]);

        return redirect()->route('customers.index')
            ->with('message', __('Customer created successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        $employees = User::pluck('name', 'id');
        $leadSources = LeadSource::pluck('name', 'id');
        $pipelineStages = PipelineStage::pluck('name', 'id');

        return view('customers.edit', compact('customer', 'employees', 'leadSources', 'pipelineStages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $customer->update($request->validated());

        return redirect()->route('customers.show', $customer)
            ->with('message', __('Customer created successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}