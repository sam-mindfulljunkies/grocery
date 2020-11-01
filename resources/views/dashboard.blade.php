@extends('layouts.app')

@section('content')

    @if(env('MAIL_USERNAME') == null && env('MAIL_PASSWORD') == null)
        <div class="row">
            <div class="col-sm-12">
                <div class="bg-danger pad-all text-center mar-btm">
                    <h4 class="text-light mar-btm">{{__('Please Configure SMTP Setting to work all email sending funtionality')}}.</h4>
                    <a class="btn btn-info btn-rounded" href="{{ route('smtp_settings.index') }}">Configure Now</a>
                </div>
            </div>
        </div>
    @endif
    @if(Auth::user()->user_type == 'admin' || in_array('1', json_decode(Auth::user()->staff->role->permissions)))
    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-body text-center dash-widget dash-widget-left">
                    <div class="dash-widget-vertical">
                        <div class="rorate">{{__('PRODUCTS')}}</div>
                    </div>
                    <div class="pad-ver mar-top text-main">
                        <i class="demo-pli-data-settings icon-4x"></i>
                    </div>
                    <br>
                    <p class="text-lg text-main">{{__('Total published products')}}: <span class="text-bold">{{ \App\Product::where('published', 1)->get()->count() }}</span></p>
                    @if (\App\BusinessSetting::where('type', 'vendor_system_activation')->first()->value == 1)
                        <p class="text-lg text-main">{{__('Total sellers products')}}: <span class="text-bold">{{ \App\Product::where('published', 1)->where('added_by', 'seller')->get()->count() }}</span></p>
                    @endif
                    <p class="text-lg text-main">{{__('Total admin products')}}: <span class="text-bold">{{ \App\Product::where('published', 1)->where('added_by', 'admin')->get()->count() }}</span></p>
                    <br>
                    <a href="{{ route('products.admin') }}" class="btn btn-primary mar-top">Manage Products <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-sm-6">
                    <div class="panel">
                        <div class="pad-top text-center dash-widget">
                            <p class="text-normal text-main">{{__('Total product category')}}</p>
                            <p class="text-semibold text-3x text-main">{{ \App\Category::all()->count() }}</p>
                            <a href="{{ route('categories.create') }}" class="btn btn-primary mar-top btn-block top-border-radius-no">{{__('Create Category')}}</a>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="pad-top text-center dash-widget">
                            <p class="text-normal text-main">{{__('Total product sub sub category')}}</p>
                            <p class="text-semibold text-3x text-main">{{ \App\SubSubCategory::all()->count() }}</p>
                            <a href="{{ route('subsubcategories.create') }}" class="btn btn-primary mar-top btn-block top-border-radius-no">{{__('Create Sub Sub Category')}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="panel">
                        <div class="pad-top text-center dash-widget">
                            <p class="text-normal text-main">{{__('Total product sub category')}}</p>
                            <p class="text-semibold text-3x text-main">{{ \App\SubCategory::all()->count() }}</p>
                            <a href="{{ route('subcategories.create') }}" class="btn btn-primary mar-top btn-block top-border-radius-no">{{__('Create Sub Category')}}</a>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="pad-top text-center dash-widget">
                            <p class="text-normal text-main">{{__('Total product brand')}}</p>
                            <p class="text-semibold text-3x text-main">{{ \App\Brand::all()->count() }}</p>
                            <a href="{{ route('brands.create') }}" class="btn btn-primary mar-top btn-block top-border-radius-no">{{__('Create Brand')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    @if(Auth::user()->user_type == 'admin' || in_array('1', json_decode(Auth::user()->staff->role->permissions)))
        <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <!--Panel heading-->
                <div class="panel-heading">
                    <h3 class="panel-title">{{__('Category wise product sale')}}</h3>
                </div>

                <!--Panel body-->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped mar-no">
                            <thead>
                                <tr>
                                    <th>{{__('Category Name')}}</th>
                                    <th>{{__('Sale')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (\App\Category::all() as $key => $category)
                                    <tr>
                                        <td>{{ __($category->name) }}</td>
                                        <td>{{ \App\Product::where('category_id', $category->id)->sum('num_of_sale') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel">
                <!--Panel heading-->
                <div class="panel-heading">
                    <h3 class="panel-title">{{__('Category wise product stock')}}</h3>
                </div>

                <!--Panel body-->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped mar-no">
                            <thead>
                                <tr>
                                    <th>{{__('Category Name')}}</th>
                                    <th>{{__('Stock')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (\App\Category::all() as $key => $category)
                                    @php
                                        $products = \App\Product::where('category_id', $category->id)->get();
                                        $qty = 0;
                                        foreach ($products as $key => $product) {
                                            if ($product->variant_product) {
                                                foreach ($product->stocks as $key => $stock) {
                                                    $qty += $stock->qty;
                                                }
                                            }
                                            else {
                                                $qty = $product->current_stock;
                                            }
                                        }
                                    @endphp
                                    <tr>
                                        <td>{{ __($category->name) }}</td>
                                        <td>{{ $qty }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

@endsection
