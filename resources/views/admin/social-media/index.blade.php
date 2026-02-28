@extends('layouts.app')
@section('title')
وسائل التواصل الاجتماعي
@stop

@section('page-header')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">وسائل التواصل الاجتماعي</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    إدارة وسائل التواصل</span>
            </div>
        </div>
    </div>
@endsection

@section('content')
@if (session()->has('success'))
    <script>
        window.onload = function() {
            notif({
                msg: "{{ session()->get('success') }}",
                type: "success"
            })
        }
    </script>
@endif

<div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">وسائل التواصل الاجتماعي</h4>
                        <a href="{{ route('social-media.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i>&nbsp; إضافة وسائل تواصل جديدة
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table id="example" class="table key-buttons text-md-nowrap" data-page-length='50' style="text-align: center">
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">#</th>
                                    <th class="border-bottom-0">فيسبوك</th>
                                    <th class="border-bottom-0">تويتر</th>
                                    <th class="border-bottom-0">انستغرام</th>
                                    <th class="border-bottom-0">لينكدإن</th>
                                    <th class="border-bottom-0">يوتيوب</th>
                                    <th class="border-bottom-0">تيك توك</th>
                                    <th class="border-bottom-0">سناب شات</th>
                                    <th class="border-bottom-0">العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($socialMedia)
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            @if($socialMedia->facebook_url)
                                                <a href="{{ $socialMedia->facebook_url }}" target="_blank" class="btn btn-sm btn-primary">
                                                    <i class="fab fa-facebook"></i>
                                                </a>
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($socialMedia->twitter_url)
                                                <a href="{{ $socialMedia->twitter_url }}" target="_blank" class="btn btn-sm btn-info">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($socialMedia->instagram_url)
                                                <a href="{{ $socialMedia->instagram_url }}" target="_blank" class="btn btn-sm btn-danger">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($socialMedia->linkedin_url)
                                                <a href="{{ $socialMedia->linkedin_url }}" target="_blank" class="btn btn-sm btn-primary">
                                                    <i class="fab fa-linkedin"></i>
                                                </a>
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($socialMedia->youtube_url)
                                                <a href="{{ $socialMedia->youtube_url }}" target="_blank" class="btn btn-sm btn-danger">
                                                    <i class="fab fa-youtube"></i>
                                                </a>
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($socialMedia->tiktok_url)
                                                <a href="{{ $socialMedia->tiktok_url }}" target="_blank" class="btn btn-sm btn-dark">
                                                    <i class="fab fa-tiktok"></i>
                                                </a>
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($socialMedia->snapchat_url)
                                                <a href="{{ $socialMedia->snapchat_url }}" target="_blank" class="btn btn-sm btn-warning">
                                                    <i class="fab fa-snapchat"></i>
                                                </a>
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true"
                                                    class="btn ripple btn-primary btn-sm" data-toggle="dropdown"
                                                    type="button">العمليات<i class="fas fa-caret-down ml-1"></i></button>
                                                <div class="dropdown-menu tx-13">
                                                    <a class="dropdown-item" href="{{ route('social-media.edit', $socialMedia->id) }}">
                                                        <i class="fas fa-edit text-primary"></i> تعديل
                                                    </a>
                                                    <a class="dropdown-item" href="#" onclick="deleteSocialMedia({{ $socialMedia->id }}); return false;" data-social_media_id="{{ $socialMedia->id }}">
                                                        <i class="fas fa-trash text-danger"></i> حذف
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @else
                                    <tr>
                                        <td colspan="9" class="text-center py-4">
                                            <div class="alert alert-info">
                                                <i class="fas fa-info-circle"></i>
                                                لا توجد وسائل تواصل حالياً
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteSocialMediaModal" tabindex="-1" role="dialog" aria-labelledby="deleteSocialMediaModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteSocialMediaModalLabel">تأكيد الحذف</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>هل أنت متأكد من حذف وسائل التواصل الاجتماعي؟</p>
                <p class="text-muted">هذا الإجراء لا يمكن التراجع عنه.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                <button type="button" class="btn btn-danger" onclick="confirmDelete()">حذف</button>
            </div>
        </div>
    </div>
</div>

@endsection

<script>
let currentSocialMediaId = null;

function deleteSocialMedia(socialMediaId) {
    currentSocialMediaId = socialMediaId;
    $('#deleteSocialMediaModal').modal('show');
}

function confirmDelete() {
    if (!currentSocialMediaId) return;
    
    $.ajax({
        url: `{{ route('social-media.destroy', ':id') }}`.replace(':id', currentSocialMediaId),
        method: 'POST',
        data: {
            '_token': '{{ csrf_token() }}',
            '_method': 'DELETE'
        },
        success: function(response) {
            console.log('Delete successful:', response);
            
            // Close modal
            $('#deleteSocialMediaModal').modal('hide');
            
            // Show success notification
            notif({
                msg: "تم حذف وسائل التواصل الاجتماعي بنجاح",
                type: "success"
            });
            
            // Remove the deleted row from table immediately
            const row = $(`tr:has([data-social_media_id="${currentSocialMediaId}"])`);
            row.fadeOut(500, function() {
                $(this).remove();
                
                // Check if table is empty and show message
                const remainingRows = $('tbody tr').length;
                if (remainingRows === 0) {
                    $('tbody').html(`
                        <tr>
                            <td colspan="9" class="text-center py-4">
                                <div class="alert alert-info">
                                    <i class="fas fa-info-circle"></i>
                                    لا توجد وسائل تواصل حالياً
                                </div>
                            </td>
                        </tr>
                    `);
                }
            });
            
            // Reset currentSocialMediaId
            currentSocialMediaId = null;
        },
        error: function(xhr) {
            console.log('Delete error:', xhr);
            // Show error notification
            notif({
                msg: "حدث خطأ أثناء الحذف",
                type: "error"
            });
        }
    });
}

$(document).ready(function() {
    // Initialize tooltips and other components
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
