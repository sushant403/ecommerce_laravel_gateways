<img src="{{ asset('payment_gateway/connectips.png') }}" alt="{{ __('defaultTheme.process_to_payment') }}" class="pr-2" width="120">
<form action="{{route('frontend.order_payment')}}" method="post" class="connectips_form_payment d-none" id="connectips_form" class="connectips_form d-none">
    @csrf

    <input type="hidden" name="method" value="ConnectIPS">

    <input type="hidden" name="email" value="{{$address->email}}"> {{-- required --}}
    <input type="hidden" name="orderID" value="{{md5(uniqid(rand(), true))}}">
    <input type="hidden" name="amount" value="{{ $total_amount*100}}">
    <input type="hidden" name="quantity" value="1">
    <input type="hidden" name="currency" value="npr">

    <button type="submit" class="btn_1 order_submit_btn connectips_btn" id="connectips_btn">{{ __('defaultTheme.process_to_payment') }}</button>
</form>