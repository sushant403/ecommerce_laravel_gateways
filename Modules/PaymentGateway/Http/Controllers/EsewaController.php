<?php

namespace Modules\PaymentGateway\Http\Controllers;

use Omnipay\Omnipay;
use App\Processor\Esewa;
use App\Traits\Accounts;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Support\Renderable;

class EsewaController extends Controller
{
    use Accounts;
    public $esewaGateway;

    public function __construct()
    {
        $this->middleware('maintenance_mode');
    }

    public function payment(Request $request)
    {
        $gateway = with(new Esewa);

        try {
            $response = $gateway->purchase([
                'deliveryCharge' => 0,
                'serviceCharge' => 0,
                'taxAmount' => 0,
                'amount' => 10000,
                'totalAmount' => 10000,
                'productCode' => 4567789,
                'failedUrl' => $gateway->getFailedUrl(),
                'returnUrl' => $gateway->getReturnUrl(),
            ]);
        } catch (\Exception $e) {

            return redirect()
                ->back()
                ->with('message', sprintf("Your payment failed with error: %s", $e->getMessage()));
        }

        if ($response->isRedirect()) {
            $response->redirect();
        }
        Toastr::error(__('common.operation_failed'));
        return redirect()->back();
    }

    public function success(Request $request)
    {
        $gateway = with(new Esewa);

        $response = $gateway->verifyPayment([
            'amount' => 10000,
            'referenceNumber' => $request->get('refId'),
            'productCode' => $request->get('oid'),
        ]);

        $oid = $request->get('oid');

        if ($response->isSuccessful()) {

            dd($oid);

            return redirect()->route('front.checkout.success');
        } else {
            Toastr::error(__('common.operation_failed'));
            return redirect()->route('front.checkout.cancle')->with([
                'message' => 'The payment has been declined. Order is now Pending and is Unpaid.',
            ]);
        }
        Toastr::error(__('common.operation_failed'));
        return redirect()->route('front.esewa.notify')->with([
            'message' => 'Thank you for your shopping, However, the payment has been declined.',
        ]);
    }

    public function failed(Request $request)
    {
        dd($request);
        Toastr::error(__('common.operation_failed'));
        return redirect()->back();
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
