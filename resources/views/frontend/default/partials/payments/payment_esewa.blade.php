<img src="{{ asset('payment_gateway/esewa.png') }}" alt="{{ __('defaultTheme.process_to_payment') }}" class="pr-2" width="150">
<form action="{{route('frontend.order_payment')}}" method="post" id="esewa_form" class="esewa_form d-none">
    @csrf

    <input type="hidden" name="method" value="eSewa">

    <input type="hidden" name="email" value="{{$address->email}}"> {{-- required --}}
    <input type="hidden" name="orderID" value="{{md5(uniqid(rand(), true))}}">
    <input type="hidden" name="amount" value="{{ $total_amount*100}}">
    <input type="hidden" name="quantity" value="1">
    <input type="hidden" name="currency" value="npr">

    <button type="submit" class="btn_1 order_submit_btn esewa_btn" id="esewa_btn">{{ __('defaultTheme.process_to_payment') }}</button>
</form>