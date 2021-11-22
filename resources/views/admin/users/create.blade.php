@extends('admin.layouts.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Adding brand</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" method="POST" action="{{ route('brand.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">

                                    <!-- Brand title -->
                                    <h5 class="text-left text-uppercase text-red"><u>Brand title</u></h5>
                                    <div class="form-group">
                                        <label for="title"></label>
                                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Brand title">
                                    </div>
                                    <!-- END Brand title -->

                                    <!-- Services -->
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label for="services"> Choose services

                                                <table>
                                                    @foreach($services as $service)
                                                        <tr>
                                                            <td>
                                                                {{ $service->title }}
                                                            </td>
                                                            <td>
                                                                <input type="checkbox" id="services" name="services[]" value="{{ $service->id }}" class="ml-3">
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- END Services -->

                                    <!-- Slug -->
                                    <h5 class="text-left text-uppercase text-red"><u>Brand slug</u></h5>
                                    <div class="form-group">
                                        <label for="slug"></label>
                                        <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="Slug">
                                    </div>
                                    <!-- END Slug -->


                                    <!-- Image -->
                                    <h5 class="text-left text-uppercase text-red"><u>Background Image</u></h5>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="custom-file custom-file_1">
                                                <label class="custom-file-label custom-file-label_1" for="image"></label>
                                                <input type="file" name="image" id="image" class="custom-file-input custom-file-input_1">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <!-- END Image -->

                                    <!-- Logo -->
                                    <h5 class="text-left text-uppercase text-red"><u>Logo Image</u></h5>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="custom-file custom-file_1">
                                                <label class="custom-file-label custom-file-label_1" for="logo"></label>
                                                <input type="file" name="logo" id="logo" class="custom-file-input custom-file-input_1">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <!-- END Logo -->

                                    <!-- ZIP Codes -->
                                    <h5 class="text-left text-uppercase text-red"><u>ZIP Codes Section</u></h5>
                                    <div class="form-group">
                                        <label for="zip"></label>
                                        <textarea name="zip" class="form-control @error('zip') is-invalid @enderror" id="zip" rows="4" placeholder=""></textarea>
                                    </div>
                                    <!-- END ZIP Codes -->
                                    <hr>
                                    <!-- IFRAME -->
                                    <h5 class="text-left text-uppercase text-red"><u>IFRAME Section</u></h5>
                                    <div class="form-group">
                                        <label for="iframe"></label>
                                        <textarea name="iframe" class="form-control @error('iframe') is-invalid @enderror" id="iframe" rows="4" placeholder=""></textarea>
                                    </div>
                                    <!-- END IFRAME -->

                                    <!-- SEO title -->
                                    <h5 class="text-left text-uppercase text-red"><u>SEO title</u></h5>
                                    <div class="form-group">
                                        <label for="seo_title"></label>
                                        <textarea name="seo_title" class="form-control @error('seo_title') is-invalid @enderror" id="seo_title" rows="2" placeholder=""></textarea>
                                    </div>

                                    <!-- SEO description -->
                                    <h5 class="text-left text-uppercase text-red"><u>SEO description</u></h5>
                                    <div class="form-group">
                                        <label for="seo_description"></label>
                                        <textarea name="seo_description" class="form-control @error('seo_description') is-invalid @enderror" id="seo_description" rows="3" placeholder=""></textarea>
                                    </div>


                                    <!-- Section 1 -->
                                    <h5 class="text-left text-uppercase text-red"><u>Section 1</u></h5>
                                    <div class="form-group">
                                        <label for="content_1">Content 1</label>
                                        <textarea name="content_1" class="form-control @error('content') is-invalid @enderror" id="content_1" rows="7" placeholder=""></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="content_1_1">Additional Content 1</label>
                                        <textarea name="content_1_1" class="form-control @error('content') is-invalid @enderror" id="content_1_1" rows="7" placeholder=""></textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="custom-file custom-file_1">
                                                <label class="custom-file-label custom-file-label_1" for="image_1"></label>
                                                <input type="file" name="image_1" id="image_1" class="custom-file-input custom-file-input_1">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <br>
                                    <!-- END Section 1 -->
                                    <!-- Section 2 -->
                                    <h5 class="text-left text-uppercase text-red"><u>Section 2</u></h5>
                                    <div class="form-group">
                                        <label for="content_2">Content 2</label>
                                        <textarea name="content_2" class="form-control @error('content') is-invalid @enderror" id="content_2" rows="7" placeholder=""></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="content_2_1">Additional Content 2</label>
                                        <textarea name="content_2_1" class="form-control @error('content') is-invalid @enderror" id="content_2_1" rows="7" placeholder=""></textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="custom-file custom-file_2">
                                                <label class="custom-file-label custom-file-label_2" for="image_2"></label>
                                                <input type="file" name="image_2" id="image_2" class="custom-file-input custom-file-input_2">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <br>
                                    <!-- END Section 2 -->

                                    <!-- Section 3 -->
                                    <h5 class="text-left text-uppercase text-red"><u>Section 3</u></h5>
                                    <div class="form-group">
                                        <label for="content_3">Content 3</label>
                                        <textarea name="content_3" class="form-control @error('content') is-invalid @enderror" id="content_3" rows="7" placeholder=""></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="content_3_1">Additional Content 3</label>
                                        <textarea name="content_3_1" class="form-control @error('content') is-invalid @enderror" id="content_3_1" rows="7" placeholder=""></textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="custom-file custom-file_3">
                                                <label class="custom-file-label custom-file-label_3" for="image_3"></label>
                                                <input type="file" name="image_3" id="image_3" class="custom-file-input custom-file-input_3">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <br>
                                    <!-- END Section 3 -->

                                    <!-- Section 4 -->
                                    <h5 class="text-left text-uppercase text-red"><u>Section 4</u></h5>
                                    <div class="form-group">
                                        <label for="content_4">Content 4</label>
                                        <textarea name="content_4" class="form-control @error('content') is-invalid @enderror" id="content_4" rows="7" placeholder=""></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="content_4_1">Additional Content 4</label>
                                        <textarea name="content_4_1" class="form-control @error('content') is-invalid @enderror" id="content_4_1" rows="7" placeholder=""></textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="custom-file custom-file_4">
                                                <label class="custom-file-label custom-file-label_4" for="image_4"></label>
                                                <input type="file" name="image_4" id="image_4" class="custom-file-input custom-file-input_4">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <br>
                                    <!-- END Section 4 -->

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        // image uploading in categories.create and categories.edit blades
        let wrapper = document.querySelectorAll('.custom-file');
        let arrWrapper = [...wrapper]
        if (wrapper) {
            arrWrapper.forEach(group => {
                let file = group.querySelector('.custom-file-input')
                let label = group.querySelector('.custom-file-label')
                file.addEventListener('change', function () {
                    let fileName = this.value.split('\\').pop();
                    label.classList.add("selected")
                    label.innerHTML = fileName;
                });
            })
        }
    </script>
    <style>
        .ck-editor__editable_inline {
            min-height: 250px;
        }
    </style>

@endsection
