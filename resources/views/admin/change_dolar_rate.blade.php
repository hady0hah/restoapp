<x-admin.index :user="$user" :isAdmin="$isAdmin">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Dolar Rate</h4>
                        <p class="card-description">Edit your website DOLAR RATE here</p>
                        <form action="{{ route('rate.update') }}" method="post" >
                            @csrf
                            <div class="form-group">
                                <label for="rate">Rate</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="rate"
                                    name="rate"
                                    pattern="[0-9]+([\.,][0-9]+)?"
                                    value="{{ $data }}"
                                    required
                                />
                            </div>

                            @if ($isAdmin === true)
                                <button type="submit" class="btn btn-primary mr-2">Proceed</button>
                            @else
                                <button onclick="alert('Only admin can change dolar rate')" type="button" class="btn btn-primary mr-2">Proceed</button>
                            @endif
                            <a href="{{ route("rate.index") }}" class="btn btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin.index>
