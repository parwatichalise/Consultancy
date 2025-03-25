@extends('Admin.includes.main')
@section('content')
<div style="display: flex;justify-content: space-between;align-items: center;flex-wrap: wrap;margin-bottom: 1.5rem;">
    <h3>
        About Us
    </h3>
</div>
<form action="{{route('admin.about-us.update')}}" method="post">
    @method('PUT')
    @csrf
    <div class="form-group">
        <textarea class="col-xs-10 col-sm-5 form-control ckeditor" rows="30" id="description" name="description">
            {{$about->description}}
        </textarea>
    </div>
    <div class="form-group row">
        <div class="col-sm-12">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
            <a href="{{route('admin.about-us.show')}}" class="btn btn-danger">
                <i class="fa fa-long-arrow-left"></i>&nbsp;
                <span>Go Back</span>
            </a>
        </div>
    </div>
</form>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.2.0/tinymce.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.2.0/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: 'textarea#description',
        menubar: false,
        plugins: 'code table lists image',
        toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | table | image',
    });
</script>
@endsection
