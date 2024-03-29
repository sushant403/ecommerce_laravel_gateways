<div class="col-lg-12">
    <span></span>
    <img src="{{ asset('payment_gateway/stripe.png') }}" alt="{{ __('defaultTheme.process_to_payment') }}" class="pl-3" width="120">
</div>
<form action="{{route('frontend.order_payment')}}" method="post" id="stripe_form" class="stripe_form d-none">
    <input type="hidden" name="method" value="Stripe">
    <input type="hidden" name="amount" value="{{$total_amount}}">
    <button type="submit" id="stribe_submit_btn" class="btn_1 order_submit_btn">{{ __('defaultTheme.process_to_payment') }}</button>
    @csrf
    <script
        src="https://checkout.stripe.com/checkout.js"
        class="stripe-button"
        data-key="{{ env('STRIPE_KEY') }}"
        data-name="Stripe Payment"
        data-image="{{asset(asset_path(app('general_setting')->favicon))}}"
        data-locale="auto"
        data-currency="npr">
    </script>
</form>