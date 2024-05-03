<div>
    <form wire:submit.prevent="storenetwork">
    <div class="row">
        <div class="col-md-8">
        @if (session()->has('message'))
        <div class="alert alert-success mt-3">
            {{ session('message') }}
        </div>
        @endif
            <div class="card py-4">
                <div class="header">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2>Mobile Network Info</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile Wlan </strong></label>
                            <div class="form-line">
                                <input wire:model="wlan" type="text" id="erp_question_text"
                                       class="form-control @error('wlan') is-invalid @enderror" name="wlan" placeholder="Mobile Wlan">
                                @error('wlan') <span class="text-danger">{{ $message }}</span> @enderror       
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile Bluetooth </strong></label>
                            <div class="form-line">
                                <input wire:model="bluetooth" type="text" id="erp_question_text"
                                       class="form-control @error('bluetooth') is-invalid @enderror" name="bluetooth" placeholder="Mobile Bluetooth">
                                @error('bluetooth') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile Radio </strong></label>
                            <div class="form-line">
                                <input wire:model="radio" type="text" id="erp_question_text"
                                       class="form-control @error('radio') is-invalid @enderror" name="radio" placeholder="Mobile Radio">
                                @error('radio') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile Usb </strong></label>
                            <div class="form-line">
                                <input wire:model="usb" type="text" id="erp_question_text"
                                       class="form-control @error('usb') is-invalid @enderror" name="usb" placeholder="Mobile Usb">
                                @error('usb') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile Data </strong></label>
                            <div class="form-line">
                                <input wire:model="data" type="text" id="erp_question_text"
                                       class="form-control @error('data') is-invalid @enderror" name="data" placeholder="Mobile Data">
                                @error('data') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile 2G </strong></label>
                            <div class="form-line">
                                <input wire:model="g2" type="text" id="erp_question_text"
                                       class="form-control @error('g2') is-invalid @enderror" name="g2" placeholder="Mobile 2G">
                                @error('g2') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile 3G</strong></label>
                            <div class="form-line">
                                <input wire:model="g3" type="text" id="erp_question_text"
                                       class="form-control @error('g3') is-invalid @enderror" name="g3" placeholder="Mobile 3G">
                                @error('g3') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile 4G </strong></label>
                            <div class="form-line">
                                <input wire:model="g4" type="text" id="erp_question_text"
                                       class="form-control @error('g4') is-invalid @enderror" name="g4" placeholder="Mobile 4G">
                                @error('g4') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile 5G </strong></label>
                            <div class="form-line">
                                <input wire:model="g5" type="text" id="erp_question_text"
                                       class="form-control @error('g5') is-invalid @enderror" name="g5" placeholder="Mobile 5G">
                                @error('g5') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-primary  my-2 float-right">Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
