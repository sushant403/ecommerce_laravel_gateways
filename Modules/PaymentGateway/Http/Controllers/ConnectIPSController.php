<?php

namespace Modules\PaymentGateway\Http\Controllers;

use App\Traits\Accounts;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;

class ConnectIPSController extends Controller
{
    use Accounts;
    public $connectipsGateway;

    public function __construct()
    {
        $this->middleware('maintenance_mode');

        // $this->connectipsGateway = Omnipay::create('PayPal_Rest');
        $this->connectipsGateway->setClientId(env('CONNECTIPS_CLIENT_ID'));
        $this->connectipsGateway->setSecret(env('CONNECTIPS_CLIENT_SECRET'));
        if(env('CONNECTIPS_MODE') == 'sandbox'){
            $this->connectipsGateway->setTestMode('false');
        }elseif(env('CONNECTIPS_MODE') == 'live'){
            $this->connectipsGateway->setTestMode('true');
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
