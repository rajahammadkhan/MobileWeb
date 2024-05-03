<div>
    <form wire:submit.prevent="storeBody">
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
                                <h2>Mobile Body</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile Dim Width </strong></label>
                            <div class="form-line">
                                <input wire:model="dim_width" type="number" id="erp_question_text"
                                       class="form-control @error('dim_width') is-invalid @enderror" name="dim_width" placeholder="Mobile Dim Width">
                                @error('dim_width') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile Dim Height </strong></label>
                            <div class="form-line">
                                <input wire:model="dim_height" type="number" id="erp_question_text"
                                       class="form-control @error('dim_height') is-invalid @enderror" name="dim_height" placeholder="Mobile Dim Height">
                                @error('dim_height') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile Dim Wide </strong></label>
                            <div class="form-line">
                                <input wire:model="dim_wide" type="number" id="erp_question_text"
                                       class="form-control @error('dim_wide') is-invalid @enderror" name="dim_wide" placeholder="Mobile Dim Wide">
                                @error('dim_wide') <span class="text-danger">{{ $message }}</span> @enderror

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile weight </strong></label>
                            <div class="form-line">
                                <input wire:model="weight" type="number" id="erp_question_text"
                                       class="form-control @error('weight') is-invalid @enderror" name="weight" placeholder="Mobile Weight">
                                @error('weight') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile Colors </strong></label>
                            <div class="form-line">
                                <input wire:model="colors" type="text" id="erp_question_text"
                                       class="form-control @error('colors') is-invalid @enderror" name="colors" placeholder="Mobile Colors">
                                @error('colors') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile No Of Sim </strong></label>
                            <div class="form-line">
                                <input wire:model="no_of_sim" type="number" id="erp_question_text"
                                       class="form-control @error('no_of_sim') is-invalid @enderror" name="no_of_sim" placeholder="Mobile No Of Sim">
                                @error('no_of_sim') <span class="text-danger">{{ $message }}</span> @enderror
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

