@extends('admin.layout')

@section('content')
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Why Gemver</a></li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        {{--<h4 class="card-title">
                            Why Gemver
                        </h4>--}}
                        <div class="col-lg-12">
                          <form class="form-valide" action="" id="WhyFriendlyForm" method="post">
                            <div id="cover-spin" class="cover-spin"></div>
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="col-form-label" for="why_friendly_contant">Why Gemver Contant <span class="text-danger">*</span>
                                </label>
                                <textarea  id="why_friendly_contant" name="why_friendly_contant"></textarea>
                                <div id="why_friendly_contant-error" class="invalid-feedback animated fadeInDown" style="display: none;"></div>
                            </div>

                            <div class="form-group ">
                                <label class="col-form-label" for="meta_title">Meta Title 
                                </label>
                                <input type="text" class="form-control input-flat" id="meta_title" name="meta_title">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label" for="meta_description">Meta Description 
                                </label>
                                <textarea type="text" class="form-control input-default" id="meta_description" name="meta_description"></textarea>
                            </div>

                            <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12 justify-content-center mt-4">
                               <!-- <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button> -->
                               <button type="button" class="btn btn-primary" id="saveWhyFriendlyBtn">Save <i class="fa fa-circle-o-notch fa-spin loadericonfa" style="display:none;"></i></button>
                            </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection

@section('js')
<!-- settings JS start -->
<script type="text/javascript">
    $( document ).ready(function() {
        CKEDITOR.replace('why_friendly_contant',{
            filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
        CKEDITOR.config.height = '300';
        $.get("{{ url('admin/infopage/aboutus/edit') }}", function (data) {
            CKEDITOR.instances['why_friendly_contant'].setData(data.why_friendly);
            $('#meta_title').val(data.why_friendly_meta_title);
            $('#meta_description').val(data.why_friendly_meta_description);
           //$('#why_friendly_contant').summernote('code', data.why_friendly);
        })
    });

    $('body').on('click', '#saveWhyFriendlyBtn', function () {
        $('#saveWhyFriendlyBtn').prop('disabled',true);
        $('#saveWhyFriendlyBtn').find('.loadericonfa').show();
        for ( instance in CKEDITOR.instances ) {
            CKEDITOR.instances[instance].updateElement();
        }
        var formData = new FormData($("#WhyFriendlyForm")[0]);
        $.ajax({
            type: 'POST',
            url: "{{ url('admin/updateWhyFriendly') }}",
            data: formData,
            processData: false,
            contentType: false,
            success: function (res) {
                if(res.status == 'failed'){
                    $('#saveWhyFriendlyBtn').prop('disabled',false);
                    $('#saveWhyFriendlyBtn').find('.loadericonfa').hide();
                    if (res.errors.why_friendly_contant) {
                        $('#why_friendly_contant-error').show().text(res.errors.why_friendly_contant);
                    } else {
                        $('#why_friendly_contant-error').hide();
                    }
                }

                if(res.status == 200){
                    $('#saveWhyFriendlyBtn').prop('disabled',false);
                    $('#saveWhyFriendlyBtn').find('.loadericonfa').hide();
                    $("#UserDiscountPerVal").html(res.why_friendly_contant + " %");
                    toastr.success("Why Gemver Updated",'Success',{timeOut: 5000});
                }

                if(res.status == 400){
                    $('#saveWhyFriendlyBtn').prop('disabled',false);
                    $('#saveWhyFriendlyBtn').find('.loadericonfa').hide();
                    toastr.error("Please try again",'Error',{timeOut: 5000});
                }
            },
            error: function (data) {
                $('#saveWhyFriendlyBtn').prop('disabled',false);
                $('#saveWhyFriendlyBtn').find('.loadericonfa').hide();
                toastr.error("Please try again",'Error',{timeOut: 5000});
            }
        });
    });
 
</script>

@endsection
