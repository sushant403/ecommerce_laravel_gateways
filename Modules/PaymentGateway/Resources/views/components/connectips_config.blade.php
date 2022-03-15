<form action="{{ route('payment_gateway.configuration') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-2 mt-20 mb-30">
            <input type="hidden" name="types[]" value="CONNECTIPS_MODE">
            <div class="input-effect">
                <div class="input-effect">
                    <div class="text-left float-left">
                        <input type="radio" name="CONNECTIPS_MODE" @if (env("CONNECTIPS_MODE")=="sandbox" ) checked @endif
                            id="mode_check_connectips" value="sandbox" class="common-radio relationButton read-only-input">
                        <label for="mode_check_connectips">{{ __('payment_gatways.sandbox') }}</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 mt-20 mb-30">
            <div class="input-effect">
                <div class="input-effect">
                    <div class="text-left float-left">
                        <input type="radio" name="CONNECTIPS_MODE" id="live_mode_check_connectips" @if (env("CONNECTIPS_MODE")=="live" ) checked @endif value="live" class="common-radio relationButton read-only-input">
                        <label for="live_mode_check_connectips">{{ __('payment_gatways.live') }}</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="primary_input mb-25">
                <input type="hidden" name="types[]" value="CONNECTIPS_MERCHANT_ID">
                <label class="primary_input_label" for="">{{ __('payment_gatways.connectips_merchant_id') }}</label>
                <input name="CONNECTIPS_MERCHANT_ID" class="primary_input_field" value="{{ env('CONNECTIPS_MERCHANT_ID') }}"
                    placeholder="{{ __('payment_gatways.connectips_merchant_id') }}" type="text">
                <span class="text-danger" id="edit_name_error"></span>
            </div>
        </div>
        <input type="hidden" name="name" value="ConnectIPS Configuration">
        <div class="col-xl-12">
            <div class="primary_input mb-25">
                <input type="hidden" name="types[]" value="CONNECTIPS_APP_ID">
                <label class="primary_input_label" for="">{{ __('payment_gatways.connectips_app_id') }}</label>
                <input name="CONNECTIPS_APP_ID" class="primary_input_field" value="{{ env('CONNECTIPS_APP_ID') }}"
                    placeholder="{{ __('payment_gatways.connectips_app_id') }}" type="text">
                <span class="text-danger" id="edit_name_error"></span>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="primary_input mb-25">
                <input type="hidden" name="types[]" value="CONNECTIPS_APP_NAME">
                <label class="primary_input_label" for="">{{ __('payment_gatways.connectips_app_name') }}</label>
                <input name="CONNECTIPS_APP_NAME" class="primary_input_field" value="{{ env('CONNECTIPS_APP_NAME') }}"
                    placeholder="{{ __('payment_gatways.connectips_app_name') }}" type="text">
                <span class="text-danger" id="edit_name_error"></span>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="primary_input mb-25">
                <input type="hidden" name="types[]" value="CONNECTIPS_APP_PASSWORD">
                <label class="primary_input_label" for="">{{ __('payment_gatways.connectips_app_password') }}</label>
                <input name="CONNECTIPS_APP_PASSWORD" class="primary_input_field" value="{{ env('CONNECTIPS_APP_PASSWORD') }}"
                    placeholder="{{ __('payment_gatways.connectips_app_password') }}" type="text">
                <span class="text-danger" id="edit_name_error"></span>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="primary_input mb-25">
                <input type="hidden" name="types[]" value="CONNECTIPS_GATEWAY_URL">
                <label class="primary_input_label" for="">{{ __('payment_gatways.connectips_gateway_url') }}</label>
                <input name="CONNECTIPS_GATEWAY_URL" class="primary_input_field" value="{{ env('CONNECTIPS_GATEWAY_URL') }}"
                    placeholder="{{ __('payment_gatways.connectips_gateway_url') }}" type="text">
                <span class="text-danger" id="edit_name_error"></span>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="primary_input mb-25">
                <input type="hidden" name="types[]" value="CONNECTIPS_VALIDATION_URL">
                <label class="primary_input_label" for="">{{ __('payment_gatways.connectips_validation_url') }}</label>
                <input name="CONNECTIPS_VALIDATION_URL" class="primary_input_field" value="{{ env('CONNECTIPS_VALIDATION_URL') }}"
                    placeholder="{{ __('payment_gatways.connectips_validation_url') }}" type="text">
                <span class="text-danger" id="edit_name_error"></span>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="primary_input mb-25">
                <input type="hidden" name="types[]" value="CONNECTIPS_TRANSACTION_DETAIL_URL">
                <label class="primary_input_label" for="">{{ __('payment_gatways.connectips_transaction_detail_url') }}</label>
                <input name="CONNECTIPS_TRANSACTION_DETAIL_URL" class="primary_input_field" value="{{ env('CONNECTIPS_TRANSACTION_DETAIL_URL') }}"
                    placeholder="{{ __('payment_gatways.connectips_transaction_detail_url') }}" type="text">
                <span class="text-danger" id="edit_name_error"></span>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="primary_input mb-25">
                <label class="primary_input_label" for="">{{ __('payment_gatways.gateway_logo') }} (400x166)PX</label>
                <div class="primary_file_uploader">
                    <input class="primary-input" type="text" id="thumbnail_image_file"
                        placeholder="{{ __('payment_gatways.gateway_logo') }}" readonly="" />
                    <button class="" type="button">
                        <label class="primary-btn small fix-gr-bg" for="connectips_logo">{{ __('product.Browse') }} </label>
                        <input type="file" class="d-none" name="logo" id="connectips_logo" />
                    </button>
                </div>

            </div>
        </div>
        <div class="col-xl-4">
            <input type="hidden" name="id" value="{{ $gateway_activations->where('method', 'ConnectIPS')->first()->id }}">
            <div class="logo_div">
                @if ($gateway_activations->where('method', 'ConnectIPS')->first()->logo)
                <img id="logoConnectIPSDiv" class=""
                    src="{{ showImage($gateway_activations->where('method', 'ConnectIPS')->first()->logo) }}" alt="">
                @else
                <img id="logoConnectIPSDiv" class="" src="{{ showImage('backend/img/default.png') }}" alt="">
                @endif
            </div>
        </div>
        <div class="col-lg-12 text-center">
            <button class="primary_btn_2 mt-2"><i class="ti-check"></i>{{__("common.update")}} </button>
        </div>
    </div>
</form>
