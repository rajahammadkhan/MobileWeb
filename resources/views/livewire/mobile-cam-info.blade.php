<div>
    <form wire:submit.prevent="storecam">
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
                                    <h2>Mobile Cam Info</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class=" col-12">
                                <label for="email_address1"> <strong> Mobile Type Id </strong></label>
                                <div class="form-line">
                                    <input wire:model="type_id" type="number" id="erp_question_text"
                                            class="form-control @error('type_id') is-invalid @enderror" name="type_id" placeholder="Mobile Type Id">
                                    @error('type_id') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col-12">
                                <label for="email_address1"> <strong> Mobile No Of Cams </strong></label>
                                <div class="form-line">
                                    <input wire:model="no_of_cams" type="number" id="erp_question_text"
                                            class="form-control @error('no_of_cams') is-invalid @enderror" name="no_of_cams" placeholder="Mobile No Of Cams">
                                    @error('no_of_cams') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col-12">
                                <label for="email_address1"> <strong> Mobile Cam Size </strong></label>
                                <div class="form-line">
                                    <input wire:model="cam_size" type="number" id="erp_question_text"
                                            class="form-control @error('cam_size') is-invalid @enderror" name="cam_size" placeholder="Mobile Cam Size">
                                    @error('cam_size') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col-12">
                                <label for="email_address1"> <strong> Mobile Cam Text </strong></label>
                                <div class="form-line">
                                    <input wire:model="cam_text" type="text" id="erp_question_text"
                                            class="form-control @error('cam_text') is-invalid @enderror" name="cam_text" placeholder="Mobile Cam Text">
                                    @error('cam_text') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col-12">
                                <label for="email_address1"> <strong> Mobile Led </strong></label>
                                <div class="form-line">
                                    <input wire:model="led" type="number" id="erp_question_text"
                                            class="form-control @error('led') is-invalid @enderror" name="led" placeholder="Mobile Led">
                                    @error('led') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col-12">
                                <label for="email_address1"> <strong> Mobile Face Detection </strong></label>
                                <div class="form-line">
                                    <input wire:model="face_detection" type="number" id="erp_question_text"
                                            class="form-control @error('face_detection') is-invalid @enderror" name="face_detection" placeholder="Mobile Face Detection">
                                    @error('face_detection') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col-12">
                                <label for="email_address1"> <strong> Mobile Geo </strong></label>
                                <div class="form-line">
                                    <input wire:model="geo" type="number" id="erp_question_text"
                                            class="form-control @error('geo') is-invalid @enderror" name="geo" placeholder="Mobile Geo">
                                    @error('geo') <span class="text-danger">{{ $message }}</span> @enderror
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
