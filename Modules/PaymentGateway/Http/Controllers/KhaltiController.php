<?php

namespace Modules\PaymentGateway\Http\Controllers;

use App\Traits\Accounts;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;

class KhaltiController extends Controller
{
    use Accounts;
    public $khaltiGateway;

    public function __construct()
    {
        $this->middleware('maintenance_mode');

        // $this->khaltiGateway = Omnipay::create('PayPal_Rest');
        $this->khaltiGateway->setClientId(env('KHALTI_CLIENT_ID'));
        $this->khaltiGateway->setSecret(env('KHALTI_CLIENT_SECRET'));
        if(env('KHALTI_MODE') == 'sandbox'){
            $this->khaltiGateway->setTestMode('false');
        }elseif(env('KHALTI_MODE') == 'live'){
            $this->khaltiGateway->setTestMode('true');
        }
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('paymentgateway::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('paymentgateway::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('paymentgateway::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('paymentgateway::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
