<div>
    <form wire:submit.prevent="storeBattery">
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
                                    <h2>Mobile Battery Info </h2>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <label for="is_remove"> <strong> Mobile Is Remove </strong></label>
                                <div class="form-line">
                                    <input wire:model="is_remove" type="number" id="is_remove"
                                           class="form-control @error('is_remove') is-invalid @enderror" name="is_remove" placeholder="Mobile Is Remove">
                                    @error('is_remove') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="capacity"> <strong> Mobile Capacity </strong></label>
                                <div class="form-line">
                                    <input wire:model="capacity" type="text" id="capacity"
                                           class="form-control @error('capacity') is-invalid @enderror" name="capacity" placeholder="Mobile Capacity">
                                    @error('capacity') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="fast_charging"> <strong> Mobile Fast Charging </strong></label>
                                <div class="form-line">
                                <input wire:model="fast_charging" type="text" id="fast_charging"
                                        class="form-control @error('fast_charging') is-invalid @enderror"
                                        name="fast_charging" placeholder="Mobile Fast Charging">
                                @error('fast_charging') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary my-2 float-right">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

