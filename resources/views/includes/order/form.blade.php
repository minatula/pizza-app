<form
    class="well form-horizontal"
    style="max-width: 500px;"
    action="{{ route('order.finish') }}"
    method="POST"
>
    @csrf
    <fieldset>

        <legend><h2><b>Fill the form</b></h2></legend>
        <div class="form-group">
            <label class="col-12 control-label">Name</label>
            <div class="col-12 inputGroupContainer">
                <div class="input-group pb-4">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input
                        name="customer_name"
                        placeholder="Name"
                        class="form-control"
                        type="text"
                    />
                    @error('customer_name')
                        <div class="position-absolute fixed-bottom text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-12 control-label">Phone number</label>
            <div class="col-12 inputGroupContainer">
                <div class="input-group pb-4">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                    <input
                        name="customer_phone"
                        placeholder="Phone number"
                        class="form-control"
                        type="text"
                    />
                    @error('customer_phone')
                        <div class="position-absolute fixed-bottom text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-12 control-label">Address</label>
            <div class="col-12 inputGroupContainer">
                <div class="input-group pb-4">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                    <input
                        name="customer_address"
                        placeholder="Address"
                        class="form-control"
                        type="text"
                    />
                    @error('customer_address')
                        <div class="position-absolute fixed-bottom text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-12"><br />
                <button class="btn btn-warning">SUBMIT</button>
            </div>
        </div>

    </fieldset>
</form>
