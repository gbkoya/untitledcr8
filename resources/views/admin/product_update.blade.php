@extends('layouts.app')

@section('description', 'Update a product')
@section('title', 'Foremost - Update product')
@section('article:section', 'Admin')
@section('url', 'www.foremosteyeclinic.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop

@section('content')

    <div class="container">

        <section class="panel panel-default mt-5">
            <div class="panel-heading">
                <h3 class="panel-title">Update products</h3>
            </div>
            <div class="panel-body">
                @include('errors.error_message')
                <form action="{{ route('updateProduct', $product->id) }}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    @csrf
                    <div class="form-group">
                        <label for="qty" class="col-sm-4 control-label">Product name</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Product name" value="{{ $product->name }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-4">
                            <label for="about" class="col-sm-4 control-label">Product features</label>
                            <div class="col-sm-12">
                                <textarea class="form-control" type="text" rows="5" name="features">{{ $product_features }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-4">
                            <label class="control-label small" for="date_start">Product price </label>
                            <input type="number" class="form-control" name="product_price" id="product_price"
                                placeholder="product price" value="{{ $product_price }}">
                        </div>
                        <div class="col-sm-4">
                            <label class="control-label small" for="date_finish">Quantity in stock</label>
                            <input type="number" class="form-control" min="1" name="quantityinstock"
                                id="quantityinstock" placeholder="quantity in stock"
                                value="{{ $product->quantityinstock }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 mt-3">


                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h5 class="card-title">Gender category</h5>
                                                <h6 class="card-subtitle mb-2 text-muted">
                                                    <input type="text" class="form-control" name="cat_select[0]"
                                                        id="cat_select[0]" placeholder="gender category"
                                                        value="gendercategory" readonly hidden>
                                                </h6>
                                                <select name="cat_name_gender" id="cat_name_gender"
                                                    class="form-select form-select-sm mb-1" required>
                                                    <option value="">Select content category *</option>
                                                    @if (isset($gender_categories))
                                                        @foreach ($gender_categories as $gender_category)
                                                            <option value="{{ $gender_category->id }}"
                                                                @if ($gender_category->id == $product->gender_categories_id) selected @endif>
                                                                {{ $gender_category->gender }}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </td>
                                            <td>
                                                <h5 class="card-title">Size category</h5>
                                                <h6 class="card-subtitle mb-2 text-muted">
                                                    <input type="text" class="form-control" name="cat_select[1]"
                                                        id="cat_select[1]" placeholder="size category" value="sizecategory"
                                                        readonly hidden>
                                                </h6>
                                                <select name="cat_name_size" id="cat_name_size"
                                                    class="form-select form-select-sm mb-1" required>
                                                    <option value="">Select content category *</option>
                                                    @if (isset($size_categories))
                                                        @foreach ($size_categories as $size_category)
                                                            <option value="{{ $size_category->id }}"
                                                                @if ($size_category->id == $product->size_categories_id) selected @endif>
                                                                {{ $size_category->size }}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h5 class="card-title">Shape category</h5>
                                                <h6 class="card-subtitle mb-2 text-muted">
                                                    <input type="text" class="form-control" name="cat_select[2]"
                                                        id="cat_select[2]" placeholder="shape category"
                                                        value="shapecategory" readonly hidden>
                                                </h6>
                                                <select name="cat_name_shape" id="cat_name_shape"
                                                    class="form-select form-select-sm mb-1">
                                                    <option value="">Select content category *</option>
                                                    @if (isset($shape_categories))
                                                        @foreach ($shape_categories as $shape_category)
                                                            <option value="{{ $shape_category->id }}"
                                                                @if ($shape_category->id == $product->shape_categories_id) selected @endif>
                                                                {{ $shape_category->shape }}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </td>
                                            <td>
                                                <h5 class="card-title">Color category</h5>
                                                <h6 class="card-subtitle mb-2 text-muted">
                                                    <input type="text" class="form-control" name="cat_select[3]"
                                                        id="cat_select[3]" placeholder="color category"
                                                        value="colorcategory" readonly hidden>
                                                </h6>
                                                <select name="cat_name_color" id="cat_name_color"
                                                    class="form-select form-select-sm mb-1">
                                                    <option value="">Select content category *</option>
                                                    @if (isset($color_categories))
                                                        @foreach ($color_categories as $color_category)
                                                            <option value="{{ $color_category->id }}"
                                                                @if ($color_category->id == $product->color_categories_id) selected @endif>
                                                                {{ $color_category->color }}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h5 class="card-title">Glass category</h5>
                                                <h6 class="card-subtitle mb-2 text-muted">
                                                    <input type="text" class="form-control" name="cat_select[4]"
                                                        id="cat_select[4]" placeholder="glass category"
                                                        value="glasscategory" readonly hidden>
                                                </h6>
                                                <select name="cat_name_glass" id="cat_name_glass"
                                                    class="form-select form-select-sm mb-1">
                                                    <option value="">Select content category *</option>
                                                    @if (isset($glass_categories))
                                                        @foreach ($glass_categories as $glass_category)
                                                            <option value="{{ $glass_category->id }}"
                                                                @if ($glass_category->id == $product->glass_categories_id) selected @endif>
                                                                {{ $glass_category->glass }}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-4 control-label">Product Images</label>
                        <div class="col-sm-3">
                            <label class="control-label small" for="imagedirectory[0]">Image directory (jpg/png):</label>
                            <input type="file" name="imagedirectory[0]">
                            <input type="file" name="imagedirectory[1]">
                            <input type="file" name="imagedirectory[2]">
                        </div>
                    </div>

                    <hr>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </section>


    </div>
    <script></script>

@endsection
