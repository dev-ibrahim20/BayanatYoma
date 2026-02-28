@extends('layouts.app')
@section('title')
إضافة وسائل تواصل اجتماعي
@stop

@section('page-header')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">وسائل التواصل الاجتماعي</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    إضافة وسائل تواصل جديدة</span>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">إضافة وسائل التواصل الاجتماعي</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('social-media.store') }}" method="POST">
                    @csrf
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="facebook_url" class="form-label">
                                    <i class="fab fa-facebook text-primary"></i> فيسبوك
                                </label>
                                <input type="url" class="form-control" id="facebook_url" name="facebook_url" 
                                       value="{{ old('facebook_url') }}" placeholder="https://facebook.com/yourpage">
                                @error('facebook_url')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="twitter_url" class="form-label">
                                    <i class="fab fa-twitter text-info"></i> تويتر
                                </label>
                                <input type="url" class="form-control" id="twitter_url" name="twitter_url" 
                                       value="{{ old('twitter_url') }}" placeholder="https://twitter.com/yourhandle">
                                @error('twitter_url')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="instagram_url" class="form-label">
                                    <i class="fab fa-instagram text-danger"></i> انستغرام
                                </label>
                                <input type="url" class="form-control" id="instagram_url" name="instagram_url" 
                                       value="{{ old('instagram_url') }}" placeholder="https://instagram.com/yourprofile">
                                @error('instagram_url')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="linkedin_url" class="form-label">
                                    <i class="fab fa-linkedin text-primary"></i> لينكدإن
                                </label>
                                <input type="url" class="form-control" id="linkedin_url" name="linkedin_url" 
                                       value="{{ old('linkedin_url') }}" placeholder="https://linkedin.com/in/yourprofile">
                                @error('linkedin_url')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="youtube_url" class="form-label">
                                    <i class="fab fa-youtube text-danger"></i> يوتيوب
                                </label>
                                <input type="url" class="form-control" id="youtube_url" name="youtube_url" 
                                       value="{{ old('youtube_url') }}" placeholder="https://youtube.com/yourchannel">
                                @error('youtube_url')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tiktok_url" class="form-label">
                                    <i class="fab fa-tiktok text-dark"></i> تيك توك
                                </label>
                                <input type="url" class="form-control" id="tiktok_url" name="tiktok_url" 
                                       value="{{ old('tiktok_url') }}" placeholder="https://tiktok.com/@yourusername">
                                @error('tiktok_url')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="snapchat_url" class="form-label">
                                    <i class="fab fa-snapchat text-warning"></i> سناب شات
                                </label>
                                <input type="url" class="form-control" id="snapchat_url" name="snapchat_url" 
                                       value="{{ old('snapchat_url') }}" placeholder="https://snapchat.com/add/yourusername">
                                @error('snapchat_url')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> حفظ وسائل التواصل
                                </button>
                                <a href="{{ route('social-media.index') }}" class="btn btn-secondary">
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
