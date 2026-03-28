@extends('layouts.app')
@section('title')
إضافة معرض جديد
@stop
@section('page-header')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الأعمال</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    إضافة عمل جديد</span>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                    <h4 class="card-title mg-b-0">إضافة عمل جديد</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('our-work.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title_ar">العنوان بالعربية <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="title_ar" name="title_ar">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title_en">العنوان بالإنجليزية <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="title_en" name="title_en">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="service_id">الخدمة <span class="text-danger">*</span></label>
                                    <select class="form-control" id="service_id" name="service_id" required>
                                        <option value="">اختر الخدمة</option>
                                        @foreach(\App\Models\Service::where('status', 1)->get() as $service)
                                            <option value="{{ $service->id }}">{{ $service->title_ar }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="client_name">اسم العميل</label>
                                    <input type="text" class="form-control" id="client_name" name="client_name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="project_date">تاريخ المشروع <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="project_date" name="project_date">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="is_active">
                                        <input type="checkbox" id="is_active" name="is_active" value="1" checked>
                                        نشط
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image">الصورة <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control" id="image" name="image" accept="image/*">
                                    <small class="text-muted">اختر صورة واحدة للمشروع</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex gap-2">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save"></i> حفظ العمل
                                    </button>
                                    <a href="{{ route('our-work.index') }}" class="btn btn-secondary">
                                        <i class="fas fa-times"></i> إلغاء
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@if (session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ session()->get('error') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session()->get('success') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@endsection
