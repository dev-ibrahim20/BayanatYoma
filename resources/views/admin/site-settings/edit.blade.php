@extends('layouts.app')
@section('title')
تعديل إعدادات الموقع
@stop

@section('page-header')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">إعدادات الموقع</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    تعديل الإعدادات</span>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">تعديل إعدادات الموقع</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('site-settings.update', $setting->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="site_name_ar" class="form-label">اسم الموقع بالعربية</label>
                                <input type="text" class="form-control" id="site_name_ar" name="site_name_ar" 
                                       value="{{ old('site_name_ar', $setting->site_name_ar) }}" placeholder="اسم موقعك بالعربية">
                                @error('site_name_ar')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="site_name_en" class="form-label">Site Name English</label>
                                <input type="text" class="form-control" id="site_name_en" name="site_name_en" 
                                       value="{{ old('site_name_en', $setting->site_name_en) }}" placeholder="Your site name in English">
                                @error('site_name_en')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone" class="form-label">رقم الهاتف</label>
                                <input type="tel" class="form-control" id="phone" name="phone" 
                                       value="{{ old('phone', $setting->phone) }}" placeholder="+966 50 123 4567">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email" class="form-label">البريد الإلكتروني</label>
                                <input type="email" class="form-control" id="email" name="email" 
                                       value="{{ old('email', $setting->email) }}" placeholder="info@example.com">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="website_url" class="form-label">رابط الموقع</label>
                                <input type="url" class="form-control" id="website_url" name="website_url" 
                                       value="{{ old('website_url', $setting->website_url) }}" placeholder="https://example.com">
                                @error('website_url')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="description_ar" class="form-label">وصف الموقع بالعربية</label>
                                <textarea class="form-control" id="description_ar" name="description_ar" rows="4" 
                                          placeholder="وصف قصير عن موقعك وخدماتك بالعربية">{{ old('description_ar', $setting->description_ar) }}</textarea>
                                @error('description_ar')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="description_en" class="form-label">Site Description English</label>
                                <textarea class="form-control" id="description_en" name="description_en" rows="4" 
                                          placeholder="Brief description about your site and services in English">{{ old('description_en', $setting->description_en) }}</textarea>
                                @error('description_en')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="address_ar" class="form-label">العنوان بالعربية</label>
                                <textarea class="form-control" id="address_ar" name="address_ar" rows="4" 
                                          placeholder="وصف قصير عن موقعك وخدماتك بالعربية">{{ old('address_ar', $setting->address_ar) }}</textarea>
                                @error('address_ar')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="address_en" class="form-label">Site Description English</label>
                                <textarea class="form-control" id="address_en" name="address_en" rows="4" 
                                          placeholder="Brief description about your site and services in English">{{ old('address_en') }}</textarea>
                                @error('address_en')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="clients_count" class="form-label">عدد العملاء</label>
                                <input type="number" class="form-control" id="clients_count" name="clients_count" 
                                       value="{{ old('clients_count', $setting->clients_count) }}" min="0">
                                @error('clients_count')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="projects_count" class="form-label">عدد المشاريع</label>
                                <input type="number" class="form-control" id="projects_count" name="projects_count" 
                                       value="{{ old('projects_count', $setting->projects_count) }}" min="0">
                                @error('projects_count')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="experience_years" class="form-label">سنوات الخبرة</label>
                                <input type="number" class="form-control" id="experience_years" name="experience_years" 
                                       value="{{ old('experience_years', $setting->experience_years) }}" min="0">
                                @error('experience_years')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="satisfaction_rate" class="form-label">نسبة رضا العملاء (%)</label>
                                <input type="number" class="form-control" id="satisfaction_rate" name="satisfaction_rate" 
                                       value="{{ old('satisfaction_rate', $setting->satisfaction_rate) }}" min="0" max="100">
                                @error('satisfaction_rate')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> حفظ التعديلات
                                </button>
                                <a href="{{ route('site-settings.index') }}" class="btn btn-secondary">
                                    <i class="fas fa-arrow-left"></i> رجوع
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
