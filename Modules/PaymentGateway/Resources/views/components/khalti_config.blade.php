<form action="{{ route('payment_gateway.configuration') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-2 mt-20 mb-30">
            <input type="hidden" name="types[]" value="KHALTI_MODE">
            <div class="input-effect">
                <div class="input-effect">
                    <div class="text-left float-left">
                        <input type="radio" name="KHALTI_MODE" @if (env("KHALTI_MODE")=="sandbox" ) checked @endif
                            id="mode_khalti" value="sandbox" class="common-radio relationButton read-only-input">
                        <label for="mode_khalti">{{ __('payment_gatways.sandbox') }}</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 mt-20 mb-30">
            <div class="input-effect">
                <div class="input-effect">
                    <div class="text-left float-left">
                        <input type="radio" name="KHALTI_MODE" id="live_mode_khalti" @if (env("KHALTI_MODE")=="live" ) checked @endif value="live" class="common-radio relationButton read-only-input">
                        <label for="live_mode_khalti">{{ __('payment_gatways.live') }}</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="primary_input mb-25">
                <input type="hidden" name="types[]" value="KHALTI_CLIENT_ID">
                <label class="primary_input_label" for="">{{ __('payment_gatways.khalti_client_id') }}</label>
                <input name="KHALTI_CLIENT_ID" class="primary_input_field" value="{{ env('KHALTI_CLIENT_ID') }}"
                    placeholder="{{ __('payment_gatways.khalti_client_id') }}" type="text">
                <span class="text-danger" id="edit_name_error"></span>
            </div>
        </div>
        <input type="hidden" name="name" value="Khalti Configuration">
        <div class="col-xl-12">
            <div class="primary_input mb-25">
                <input type="hidden" name="types[]" value="KHALTI_CLIENT_SECRET">
                <label class="primary_input_label" for="">{{ __('payment_gatways.khalti_client_secret') }}</label>
                <input name="KHALTI_CLIENT_SECRET" class="primary_input_field" value="{{ env('KHALTI_CLIENT_SECRET') }}"
                    placeholder="{{ __('payment_gatways.khalti_client_secret') }}" type="text">
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
                        <label class="primary-btn small fix-gr-bg" for="khalti_logo">{{ __('product.Browse') }} </label>
                        <input type="file" class="d-none" name="logo" id="khalti_logo" />
                    </button>
                </div>

            </div>
        </div>
        <div class="col-xl-4">
            <input type="hidden" name="id" value="{{ $gateway_activations->where('method', 'Khalti')->first()->id }}">
            <div class="logo_div">
                @if ($gateway_activations->where('method', 'Khalti')->first()->logo)
                <img id="logoKhaltiDiv" class=""
                    src="{{ showImage($gateway_activations->where('method', 'Khalti')->first()->logo) }}" alt="">
                @else
                <img id="logoKhaltiDiv" class="" src="{{ showImage('backend/img/default.png') }}" alt="">
                @endif
            </div>
        </div>
        <div class="col-lg-12 text-center">
            <button class="primary_btn_2 mt-2"><i class="ti-check"></i>{{__("common.update")}} </button>
        </div>
    </div>
</form>
