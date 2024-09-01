@extends('layouts.master')

@section('content')

<!-- content @s -->
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Medicine details</h3>
                        </div>
                        <div class="nk-block-head-content">
                            <a href="html/pharmacy/medicine-list.html" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                            <a href="html/pharmacy/medicine-list.html" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                        </div>
                    </div>
                </div><!--.nk-block-head-->
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-aside-wrap">
                            <div class="card-content">
                                <div class="card-inner">
                                    <div class="nk-block">
                                        <div class="nk-block-head nk-block-head-sm nk-block-between">
                                            <h5 class="title">Medicine Information</h5>
                                        </div><!-- .nk-block-head -->
                                        <div class="row gy-5">
                                            <div class="col-md-3 col-lg-2 col-6">
                                                <div class="profile-stats">
                                                    <span class="profile-ud-label">Name</span>
                                                    <span>Zimax</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-lg-2  col-6">
                                                <div class="profile-stats">
                                                    <span class="profile-ud-label">Generic Name</span>
                                                    <span>Azithromycin</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-lg-2  col-6">
                                                <div class="profile-stats">
                                                    <span class="profile-ud-label">Weight</span>
                                                    <span>500mg</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-lg-2  col-6">
                                                <div class="profile-stats">
                                                    <span class="profile-ud-label">Category</span>
                                                    <span>Tablet</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-lg-2  col-6">
                                                <div class="profile-stats">
                                                    <span class="profile-ud-label">Manufacturer</span>
                                                    <span>Healthcare</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-lg-2 col-6">
                                                <div class="profile-stats">
                                                    <span class="profile-ud-label">Expire Date</span>
                                                    <span>19/12/2020</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row gy-5">
                                            <div class="col-md-3 col-lg-2 col-6">
                                                <div class="profile-stats">
                                                    <span class="profile-ud-label">Popularity</span>
                                                    <div>
                                                        <em class="icon ni ni-star-fill text-warning"></em>
                                                        <em class="icon ni ni-star-fill text-warning"></em>
                                                        <em class="icon ni ni-star-fill text-warning"></em>
                                                        <em class="icon ni ni-star-fill text-warning"></em>
                                                        <em class="icon ni ni-star-fill text-warning"></em>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block -->
                                    <div class="nk-divider divider md"></div>
                                    <div class="nk-block">
                                        <div class="nk-block-head nk-block-head-sm nk-block-between">
                                            <h5 class="title">Stock</h5>
                                        </div><!-- .nk-block-head -->
                                        <div class="row gy-5">
                                            <div class="col-md-3 col-sm-4">
                                                <div class="profile-stats">
                                                    <span class="profile-ud-label">Starting Stock</span>
                                                    <span class="amount">230box</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4">
                                                <div class="profile-stats">
                                                    <span class="profile-ud-label">Current Stock</span>
                                                    <span class="amount">180box</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4">
                                                <div class="profile-stats">
                                                    <span class="profile-ud-label">Stock Status</span>
                                                    <span class="badge bg-primary">Available</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row gy-5">
                                            <div class="col-lg-4 col-8">
                                                <div class="profile-stats">
                                                    <span class="profile-ud-label">Remaining</span>
                                                    <div class="progress progress-lg">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated" data-progress="75">75%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block -->
                                    <div class="nk-divider divider md"></div>
                                    <div class="nk-block">
                                        <div class="nk-block-head nk-block-head-sm nk-block-between">
                                            <h5 class="title">Estimate</h5>
                                        </div><!-- .nk-block-head -->
                                        <div class="row gy-5">
                                            <div class="col-md-3 col-sm-4">
                                                <div class="profile-stats">
                                                    <span class="profile-ud-label">Manufacture price</span>
                                                    <span class="amount">50.00USD</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4">
                                                <div class="profile-stats">
                                                    <span class="profile-ud-label">Seeling price</span>
                                                    <span class="amount">60.00USD </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4">
                                                <div class="profile-stats">
                                                    <span class="profile-ud-label">Wholesale Price</span>
                                                    <span class="amount">55.00USD</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block -->
                                </div><!-- .card-inner -->
                            </div><!-- .card-content -->
                        </div><!-- .card-aside-wrap -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->

@endsection
