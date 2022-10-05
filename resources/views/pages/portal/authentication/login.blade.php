<form wire:submit.prevent="save" class="bg-white w-full flex flex-col scrollbar">


    <div class="flex relative flex-grow flex-col lg:flex-row">
        <div class="flex flex-col justify-center items-center overflow-hidden lg:w-2/5 text-white bg p-5 pb-20 lg:pb-5">
            <img class="h-8 lg:h-20 w-auto filter invert brightness-0" src="{{ asset('images/logo.png') }}"
                alt="Workflow">
            <div class="hidden lg:flex">
                Welcome
            </div>
            <div class="h-40 w-40 mt-8 hidden lg:flex">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px"
                    y="0px" fill="currentColor" viewBox="0 0 30 30" xml:space="preserve">
                    <g>
                        <path
                            d="M15.0073242,7.5188994c-1.7421875,0-3.1601563,1.4111323-3.1601563,3.1455073v1.8779907   c-0.9591064,0.1031494-1.7109375,0.9083862-1.7109375,1.8944702v4.7148447c0,1.0556641,0.8583984,1.9150391,1.9140625,1.9150391   h5.8994141c1.0556641,0,1.9140625-0.859375,1.9140625-1.9150391v-4.7148447c0-0.986084-0.7518311-1.7913208-1.7109375-1.8944702   v-1.8779907C18.152832,8.9300318,16.7416992,7.5188994,15.0073242,7.5188994z M15.0073242,8.518899   c1.1826172,0,2.1455078,0.9628906,2.1455078,2.1455078v1.8574219H12.847168v-1.8574219   C12.847168,9.4817896,13.815918,8.518899,15.0073242,8.518899z M18.8637695,14.4368677v4.7148447   c0,0.5048828-0.4101563,0.9150391-0.9140625,0.9150391H12.050293c-0.5039063,0-0.9140625-0.4101563-0.9140625-0.9150391v-4.7148447   c0-0.5048828,0.4101563-0.9150391,0.9140625-0.9150391c1.1658764-0.0000172,6.0021-0.0000887,5.8994141,0   C18.4536133,13.5218287,18.8637695,13.9319849,18.8637695,14.4368677z" />
                        <path
                            d="M3.3852539,15.0569849c0,2.0703135,0.5556641,4.1113291,1.6064453,5.9023447   c0.1408386,0.2391319,0.4459295,0.3171806,0.6845703,0.1787109c0.2382813-0.140625,0.3183594-0.4462891,0.1787109-0.6845703   c-0.9619141-1.6376953-1.4697266-3.5039063-1.4697266-5.3964853c0-5.8583984,4.7617188-10.6240234,10.6152344-10.6240234   c1.4911499,0,2.9508057,0.3226929,4.291626,0.9216919l-1.0396729,0.2980347   c-0.265625,0.0761719-0.4189453,0.3525391-0.3427734,0.6181641c0.0772858,0.2717075,0.3626347,0.4188886,0.6181641,0.3427734   l2.5078125-0.71875c0.2646484-0.0751953,0.4179688-0.3505859,0.34375-0.6152344l-0.6738281-2.4140625   c-0.0742188-0.265625-0.3496094-0.4228516-0.6162109-0.3466797c-0.265625,0.0742188-0.4208984,0.3496094-0.3466797,0.6162109   l0.4318848,1.5479736C18.5779419,3.8788848,16.8125,3.4329619,15.0004883,3.4329619   C8.5961914,3.4329619,3.3852539,8.6478052,3.3852539,15.0569849z" />
                        <path
                            d="M15.0004883,25.6712437c-1.5252686,0-3.0237427-0.3463745-4.4032593-0.9800415l1.2597046-0.4974976   c0.2568359-0.1015625,0.3828125-0.3916016,0.28125-0.6484375c-0.1005859-0.2568359-0.390625-0.3847656-0.6484375-0.28125   c-0.1010895,0.0389748-2.3277807,0.8846607-2.4279175,0.9592896l-0.00177,0.0006714   c-0.263525,0.1037502-0.3822651,0.4003639-0.2802734,0.6523438l0.9355469,2.3115234   c0.1026316,0.2521439,0.3901339,0.3800316,0.6513672,0.2763672c0.2558594-0.1035156,0.3798828-0.3955078,0.2763672-0.6513672   l-0.4995117-1.2334595c1.5205078,0.7055664,3.1738892,1.0918579,4.8569336,1.0918579   c6.4042969,0,11.6142578-5.2099609,11.6142578-11.6142588c0-2.0878906-0.5556641-4.1298828-1.6083984-5.9042969   c-0.140625-0.2382813-0.4482422-0.3164063-0.6845703-0.1748047c-0.2373047,0.140625-0.3164063,0.4472656-0.1748047,0.6845703   c0.9599609,1.6201172,1.4677734,3.4853516,1.4677734,5.3945313C25.6147461,20.9095249,20.8530273,25.6712437,15.0004883,25.6712437   z" />
                        <path
                            d="M15.0053711,14.4700708c-0.8984375,0-1.6289063,0.7304688-1.6289063,1.6289072   c0,0.7182007,0.4761353,1.3217163,1.1289063,1.532959v0.9865723c0,0.2763672,0.2236328,0.5,0.5,0.5s0.5-0.2236328,0.5-0.5   v-0.9876099c0.6468506-0.2122192,1.1181641-0.8149414,1.1181641-1.5319214   C16.6235352,15.2005396,15.8979492,14.4700708,15.0053711,14.4700708z M15.0053711,16.7181187   c-0.3466873,0-0.6289063-0.2773438-0.6289063-0.6191406c0-0.3408213,0.2880859-0.6289072,0.6289063-0.6289072   s0.6181641,0.2822266,0.6181641,0.6289072C15.6235352,16.4407749,15.3461914,16.7181187,15.0053711,16.7181187z" />
                    </g>
                </svg>
            </div>
        </div>
        <div class="relative flex-grow justify-center flex lg:items-center bg-gray-100 p-5">
            <div class="w-full lg:w-1/2 flex lg:items-center justify-center -mt-20 lg:mt-0">
                <div class="bg-white shadow-lg flex-grow max-w-lg rounded-lg py-10 px-10 lg:px-20">
                    <div class="font-bold text-lg text-gray-700 mb-4">Login</div>
                    <div class="relative">
                        <div class="-mx-3 flex flex-col">
                            <x-ui.form.field type="text" name="email" label="email" model="email" />
                            <x-ui.form.field type="password" name="password" label="Password" model="password" />
                        </div>
                         <div class="flex justify-between items-center mt-6">
                            <a href="/portal/forgot" class="text-gray-500 hover:blue-500 hover:underline">Forgot password?</a>
                            <span>
                                <x-ui.button.primary bold type="submit" id="Login">Login</x-ui.button.primary>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
