<div>
    <form wire:submit.prevent="storememory">
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
                                <h2>Mobile Memory Info</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile Card Supported </strong></label>
                            <div class="form-line">
                                <input wire:model="card_supported" type="number" id="erp_question_text"
                                       class="form-control @error('card_supported') is-invalid @enderror" name="card_supported" placeholder="Mobile Card Supported">
                                @error('card_supported') <span class="text-danger">{{ $message }}</span> @enderror       
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Supported Card Size </strong></label>
                            <div class="form-line">
                                <input wire:model="supported_card_size" type="number" id="erp_question_text"
                                       class="form-control @error('supported_card_size') is-invalid @enderror" name="supported_card_size" placeholder="Supported Card Size">
                                @error('supported_card_size') <span class="text-danger">{{ $message }}</span> @enderror       
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile Ram 1 </strong></label>
                            <div class="form-line">
                                <input wire:model="ram_1" type="number" id="erp_question_text"
                                       class="form-control @error('ram_1') is-invalid @enderror" name="ram_1" placeholder="Mobile Ram 1">
                                @error('ram_1') <span class="text-danger">{{ $message }}</span> @enderror       
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile Ram 2 </strong></label>
                            <div class="form-line">
                                <input wire:model="ram_2" type="number" id="text"
                                       class="form-control @error('ram_2') is-invalid @enderror" name="ram_2" placeholder="Mobile Ram 2">
                                @error('ram_2') <span class="text-danger">{{ $message }}</span> @enderror       
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile Built In Memory 1 </strong></label>
                            <div class="form-line">
                                <input wire:model="built_in_memory_1" type="number" id="erp_question_text"
                                       class="form-control @error('built_in_memory_1') is-invalid @enderror" name="built_in_memory_1" placeholder="Mobile Built In Memory 1">
                                @error('built_in_memory_1') <span class="text-danger">{{ $message }}</span> @enderror       
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile Built In Memory 2 </strong></label>
                            <div class="form-line">
                                <input wire:model="built_in_memory_2" type="number" id="erp_question_text"
                                       class="form-control @error('built_in_memory_2') is-invalid @enderror" name="built_in_memory_2" placeholder="Mobile Built In Memory 2">
                                @error('built_in_memory_2') <span class="text-danger">{{ $message }}</span> @enderror       
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile No Of Process </strong></label>
                            <div class="form-line">
                                <input wire:model="no_of_process" type="number" id="erp_question_text"
                                       class="form-control @error('no_of_process') is-invalid @enderror" name="no_of_process" placeholder="Mobile No Of Process">
                                @error('no_of_process') <span class="text-danger">{{ $message }}</span> @enderror       
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class=" col-12">
                            <div class="form-group">
                                <label for="process_size_id">Process Size:</label>
                                <select wire:model="process_size_id" class="form-control" id="process_size_id" required>
                                    <option value="">Select Process Size</option>
                                    @foreach($sizes as $size)
                                        <option value="{{ is_array($size) ? $size['id'] : $size->id }}">{{ is_array($size) ? $size['name'] : $size->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class=" col-12">
                                <div class="form-group">
                                    <label for="processor_type_id">Processor Type:</label>
                                    <select wire:model="processor_type_id" class="form-control" id="processor_type_id" required>
                                        <option value="">Select Processor Type</option>
                                        @foreach($types as $type)
                                        <option value="{{ is_array($type) ? $type['id'] : $type->id }}">{{ is_array($type) ? $type['name'] : $type->name }}</option>
                                        @endforeach                                    
                                    </select>
                               </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Process Text </strong></label>
                            <div class="form-line">
                                <input wire:model="process_text" type="text" id="erp_question_text"
                                       class="form-control @error('process_text') is-invalid @enderror" name="process_text" placeholder="Mobile Text">
                                @error('process_text') <span class="text-danger">{{ $message }}</span> @enderror       
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile Chipset </strong></label>
                            <div class="form-line">
                                <input wire:model="chipset" type="text" id="erp_question_text"
                                       class="form-control @error('chipset') is-invalid @enderror" name="chipset" placeholder="Mobile Chipset">
                                @error('chipset') <span class="text-danger">{{ $message }}</span> @enderror       
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile Gpu </strong></label>
                            <div class="form-line">
                                <input wire:model="gpu" type="text" id="erp_question_text"
                                       class="form-control @error('gpu') is-invalid @enderror" name="gpu" placeholder="Mobile Gpu">
                                @error('gpu') <span class="text-danger">{{ $message }}</span> @enderror       
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
