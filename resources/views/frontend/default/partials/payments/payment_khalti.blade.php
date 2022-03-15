<img src="{{ asset('payment_gateway/khalti.png') }}" alt="{{ __('defaultTheme.process_to_payment') }}" class="pr-2" width="150">
<form action="{{route('frontend.order_payment')}}" method="post" id="khalti_form" class="khalti_form d-none">
    @csrf

    <input type="hidden" name="method" value="Khalti">

    <input type="hidden" name="email" value="{{$address->email}}"> {{-- required --}}
    <input type="hidden" name="orderID" value="{{md5(uniqid(rand(), true))}}">
    <input type="hidden" name="amount" value="{{ $total_amount*100}}">
    <input type="hidden" name="quantity" value="1">
    <input type="hidden" name="currency" value="npr">

    <button type="submit" class="btn_1 order_submit_btn khalti_btn" id="khalti_btn">{{ __('defaultTheme.process_to_payment') }}</button>
</form>