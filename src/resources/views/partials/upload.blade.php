<!-- Upload image input-->
<div class="input-group mb-3 px-2 py-2 shadow-sm border">
    <input id="{{ $name }}" name="{{ $name }}" type="file" onchange="showFileName(this, '{{ $uploadLable }}');"
           class="upload form-control border-0">
    <label id="{{ $uploadLable }}" for="{{ $name }}" class="upload-label font-weight-light text-muted">Choose
        file</label>
    <div class="input-group-append">
        <label for="{{ $name }}" class="btn btn-light m-0 px-4"> <i
                class="fa fa-cloud-upload mr-2 text-muted"></i><small
                class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
    </div>
</div>
