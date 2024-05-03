<div>
    <form wire:submit.prevent="storegeneral">
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
                                <h2>Mobile General Info</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile Res Width </strong></label>
                            <div class="form-line">
                                <input wire:model="res_width" type="number" id="erp_question_text"
                                       class="form-control @error('res_width') is-invalid @enderror" name="res_width" placeholder="Mobile Res Width">
                                @error('res_width') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile Res Height </strong></label>
                            <div class="form-line">
                                <input wire:model="res_height" type="number" id="erp_question_text"
                                       class="form-control @error('res_height') is-invalid @enderror" name="res_height" placeholder="Mobile Res Height">
                                @error('res_height') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile Res Ppi </strong></label>
                            <div class="form-line">
                                <input wire:model="res_ppi" type="number" id="erp_question_text"
                                       class="form-control @error('res_ppi') is-invalid @enderror" name="res_ppi" placeholder="Mobile Res Ppi">
                                @error('res_ppi') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile Size </strong></label>
                            <div class="form-line">
                                <input wire:model="size" type="text" id="text"
                                       class="form-control @error('size') is-invalid @enderror" name="size" placeholder="Mobile Size">
                                @error('size') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile Release Date </strong></label>
                            <div class="form-line">
                                <input wire:model="release_date" type="date" id="erp_question_text"
                                       class="form-control @error('release_date') is-invalid @enderror" name="release_date" placeholder="Mobile Release Date">
                                @error('release_date') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile Os </strong></label>
                            <div class="form-line">
                                <input wire:model="os" type="text" id="erp_question_text"
                                       class="form-control @error('os') is-invalid @enderror" name="os" placeholder="Mobile Os">
                                @error('os') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile Ui </strong></label>
                            <div class="form-line">
                                <input wire:model="ui" type="text" id="erp_question_text"
                                       class="form-control @error('ui') is-invalid @enderror" name="ui" placeholder="Mobile Ui">
                                @error('ui') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile Audio </strong></label>
                            <div class="form-line">
                                <input wire:model="audio" type="text" id="erp_question_text"
                                       class="form-control @error('audio') is-invalid @enderror" name="audio" placeholder="Mobile Audio">
                                @error('audio') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile Torch </strong></label>
                            <div class="form-line">
                                <input wire:model="torch" type="text" id="erp_question_text"
                                       class="form-control @error('torch') is-invalid @enderror" name="torch" placeholder="Mobile Torch">
                                @error('torch') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile Browser </strong></label>
                            <div class="form-line">
                                <input wire:model="browser" type="text" id="erp_question_text"
                                       class="form-control @error('browser') is-invalid @enderror" name="browser" placeholder="Mobile Browser">
                                @error('browser') <span class="text-danger">{{ $message }}</span> @enderror
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
