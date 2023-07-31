@extends('admin_panel.maket.master')

@section('content')
{{--    <h1>Yangiliklar jadvali</h1>--}}

<!-- Button trigger modal yangilik qo'shish uchun-->
    <div class="mb-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Yangilik qo'shish
        </button>
    </div>

    <!-- Add news modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">yangilik qo'shish</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="title-input" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" id="title-input" required
                                       placeholder="Title">
                            </div>
                            <div class="mb-3">
                                <label for="short-content-input" class="form-label">Short Content</label>
                                <textarea name="short_content" class="form-control" id="short-content-input" required
                                          placeholder="Short Content"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="content-input" class="form-label">Content</label>
                                <textarea name="contents" class="form-control" id="content-input" required
                                          placeholder="Content"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="photo-input" class="form-label">Photo</label>
                                <input type="file" name="photo" class="form-control" id="photo-input" required
                                       placeholder="Photo">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- Edit news modal -->
<div class="modal fade" id="editNews" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">yangilikni tahrirlash</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form id="edit-form" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title-input" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="title-input-edit" required
                                   placeholder="Title">
                        </div>
                        <div class="mb-3">
                            <label for="short-content-input-edit" class="form-label">Short Content</label>
                            <textarea name="short_content" class="form-control" id="short-content-input-edit" required
                                      placeholder="Short Content"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="content-input" class="form-label">Content</label>
                            <textarea name="contents" class="form-control" id="content-input-edit" required
                                      placeholder="Content"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="photo-input" class="form-label">Photo</label>
                            <input type="file" name="photo" class="form-control" id="photo-input-edit" required
                                   placeholder="Photo">
                        </div>
{{--                        <div class="modal-footer">--}}
{{--                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--                            <button type="submit" class="btn btn-primary">Save</button>--}}
{{--                        </div>--}}

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" onclick="form_edit()" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>
    @endif



    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->

                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th class="text-center col-1">
                                        #
                                    </th>
                                    <th class="text-center col-1">
                                        Sarlavha
                                    </th>
                                    <th class="text-center col-1">
                                        Qisqacha mazmuni
                                    </th>
                                    <th class=" text-center col-2">
                                        Mazmuni
                                    </th>
                                    <th class=" text-center col-2">
                                        Photo
                                    </th>
                                    <th class="text-center col-1">
                                        View
                                    </th>
                                    <th class="text-center col-2">
                                        Sana
                                    </th>
                                    <th class="text-center col-2">
                                        Amallar
                                    </th>
                                </tr>
                                {{--                                @dd($news)--}}
                                </thead>
                                <tbody>
{{--                                {{$i=0}}--}}
                                @foreach($news as $key=>$news1)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$news1->title}}</td>
                                        <td>{{$news1->short_content}}</td>
                                        <td>{{$news1->content}}</td>
                                        <td><img class="img-fluid" src="{{asset($news1->photo)}}"></td>
                                        <td>{{$news1->view_count}}</td>
                                        <td>{{$news1->created_at}}</td>
                                        <td class="project-actions text-center">
                                            {{--                                            <a class="btn btn-info btn-sm" href="#">--}}
                                            {{--                                                <i class="fas fa-pencil-alt"></i>--}}
                                            {{--                                            </a>--}}

                                            <form action="{{route('news.destroy', $news1)}}" method="post"
                                                  id="delete-form-{{$news1->id}}" class="">
                                                <a class="btn btn-primary btn-sm" href="#">
                                                    <i class="fas fa-folder"></i>
                                                </a>
                                                <button type="button" class="btn btn-info btn-sm"
                                                        onclick="edit({{$news1}})"
                                                        data-bs-toggle="modal" data-bs-target="#editNews">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </button>
                                                @method('DELETE')
                                                @csrf
                                                <button id="delete-btn" type="button" class="btn btn-danger btn-sm"
                                                        onclick="deleteNews({{$news1->id}})">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>


{{--edit modal--}}
<script>
    let id;
    function edit(news1) {
        id = news1.id;
        console.log(news1);
        document.getElementById('title-input-edit').value = news1.title;
        document.getElementById('short-content-input-edit').value = news1.short_content;
        document.getElementById('content-input-edit').value = news1.contents;
    }

    function form_edit() {
        let form = document.getElementById('edit-form');
        form.action = "news/" + id;
        // console.log(form.action);
        form.submit();
    }
</script>

    {{--    Delete  --}}

@endsection
@section('scripts')
    <script>
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false    ,
            timer: 3000
        });
        // toastr.success('News created successfully.');

        @if ($message = Session::get('success'))
        Toast.fire({
            icon: 'success',
            title: '{{$message}}'
        });
        @endif

        function deleteNews(news1Id) {
            Swal.fire({
                title: 'Haqiqatan ham o`chirmoqchimisiz?',
                text: "Agar tasdiqlasangiz malumotingiz butunlayga yo'qoladi!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Ha, o`chirish!',
                cancelButtonText: 'Bekor qilish'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById("delete-form-" + news1Id).submit();
                }
            })
        }
    </script>
@endsection
