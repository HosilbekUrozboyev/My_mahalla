@extends('admin_panel.maket.master')

@section('content')

    <!-- Button trigger modal hodim qo'shish uchun-->
    <div class="mb-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Hodim qo'shish
        </button>
    </div>

    <!-- Add news modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hodim malumotlarini to'ldiring</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form action="{{ route('employee.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name-input" class="form-label">Ismi</label>
                                <input type="text" name="name" class="form-control" id="name-input" required
                                       placeholder="Ismi">
                            </div>
                            <div class="mb-3">
                                <label for="surname-input" class="form-label">Familyasi</label>
                                <input type="text" name="surname" class="form-control" id="surname-input" required
                                          placeholder="Familyasi">
                            </div>
                            <div class="mb-3">
                                <label for="position-input" class="form-label">Lavozimi</label>
                                <input type="text" name="position" class="form-control" id="position-input" required
                                          placeholder="Lavozimi">
                            </div>
                            <div class="mb-3">
                                <label for="telegram_link-input" class="form-label">Telegram sahifasiga havola</label>
                                <input type="text" name="telegram_link" class="form-control" id="telegram_link-input" required
                                       placeholder="https://t.me/username">
                            </div>
                            <div class="mb-3">
                                <label for="facebook_link-input" class="form-label">Facebook sahifasiga havola</label>
                                <input type="text" name="facebook_link" class="form-control" id="facebook_link-input" required
                                       placeholder="https://">
                            </div>
                            <div class="mb-3">
                                <label for="instagram_link-input" class="form-label">Instagram sahifasiga havola</label>
                                <input type="text" name="instagram_link" class="form-control" id="instagram_link-input" required
                                       placeholder="https://">
                            </div>
                            <div class="mb-3">
                                <label for="telephoneNumber-input" class="form-label">Telefon raqami</label>
                                <input type="text" name="telephoneNumber" class="form-control" id="telephoneNumber-input" required
                                       placeholder="+998901234567">
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


    <!-- Edit position modal -->
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
                                <label for="name-input-edit" class="form-label">Ismi</label>
                                <input type="text" name="name" class="form-control" id="name-input-edit" required
                                       placeholder="Ismi">
                            </div>
                            <div class="mb-3">
                                <label for="surname-input-edit" class="form-label">Familyasi</label>
                                <input type="text" name="surname" class="form-control" id="surname-input-edit" required
                                       placeholder="Familyasi">
                            </div>
                            <div class="mb-3">
                                <label for="position-input-edit" class="form-label">Lavozimi</label>
                                <input type="text" name="position" class="form-control" id="position-input-edit" required
                                       placeholder="Lavozimi">
                            </div>
                            <div class="mb-3">
                                <label for="telegram_link-input-edit" class="form-label">Telegram sahifasiga havola</label>
                                <input type="text" name="telegram_link" class="form-control" id="telegram_link-input-edit" required
                                       placeholder="https://t.me/username">
                            </div>
                            <div class="mb-3">
                                <label for="facebook_link-input-edit" class="form-label">Facebook sahifasiga havola</label>
                                <input type="text" name="facebook_link" class="form-control" id="facebook_link-input-edit" required
                                       placeholder="https://">
                            </div>
                            <div class="mb-3">
                                <label for="instagram_link-input-edit" class="form-label">Instagram sahifasiga havola</label>
                                <input type="text" name="instagram_link" class="form-control" id="instagram_link-input-edit" required
                                       placeholder="https://">
                            </div>
                            <div class="mb-3">
                                <label for="telephoneNumber-input-edit" class="form-label">Telefon raqami</label>
                                <input type="text" name="telephoneNumber" class="form-control" id="telephoneNumber-input-edit" required
                                       placeholder="+998901234567">
                            </div>
                            <div class="mb-3">
                                <label for="photo-input" class="form-label">Photo</label>
                                <input type="file" name="photo" class="form-control" id="photo-input" required
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
                                        Ismi
                                    </th>
                                    <th class="text-center col-2">
                                        Familyasi
                                    </th>
                                    <th class=" text-center col-2">
                                        Lavozimi
                                    </th>
                                    <th class=" text-center col-2">
                                        Telegram sahifasiga havola
                                    </th>
                                    <th class=" text-center col-2">
                                        Facebook sahifasiga havola
                                    </th>
                                    <th class=" text-center col-2">
                                        Instagram sahifasiga havola
                                    </th>
                                    <th class=" text-center col-2">
                                        Telefon raqami
                                    </th>
                                    <th class=" text-center col-2">
                                        Photo
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
                                @foreach($employees as $key=>$employee)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$employee->name}}</td>
                                        <td>{{$employee->surname}}</td>
                                        <td>{{$employee->position}}</td>
                                        <td>{{$employee->telegram_link}}</td>
                                        <td>{{$employee->facebook_link}}</td>
                                        <td>{{$employee->instagram_link}}</td>
                                        <td>{{$employee->telephoneNumber}}</td>
                                        <td><img class="img-fluid" src="{{asset($employee->photo)}}"></td>
                                        <td>{{$employee->created_at}}</td>
                                        <td class="project-actions text-center">
                                            {{--                                            <a class="btn btn-info btn-sm" href="#">--}}
                                            {{--                                                <i class="fas fa-pencil-alt"></i>--}}
                                            {{--                                            </a>--}}

                                            <form action="{{route('employee.destroy', $employee)}}" method="post"
                                                  id="delete-form-{{$employee->id}}" class="">
                                                <a class="btn btn-primary btn-sm" href="#">
                                                    <i class="fas fa-folder"></i>
                                                </a>
                                                <button type="button" class="btn btn-info btn-sm"
                                                        onclick="edit({{$employee}})"
                                                        data-bs-toggle="modal" data-bs-target="#editNews">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </button>
                                                @method('DELETE')
                                                @csrf
                                                <button id="delete-btn" type="button" class="btn btn-danger btn-sm"
                                                        onclick="deleteNews({{$employee->id}})">
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
        function edit($employee) {
            id = $employee.id;
            console.log($employee);
            document.getElementById('name-input-edit').value = $employee.name;
            document.getElementById('surname-input-edit').value = $employee.surname;
            document.getElementById('position-input-edit').value = $employee.position;
            document.getElementById('telegram_link-input-edit').value = $employee.telegram_link;
            document.getElementById('facebook_link-input-edit').value = $employee.facebook_link;
            document.getElementById('instagram_link-input-edit').value = $employee.instagram_link;
            document.getElementById('telephoneNumber-input-edit').value = $employee.telephoneNumber;
        }

        function form_edit() {
            let form = document.getElementById('edit-form');
            form.action = "employee/" + id;
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

        function deleteNews($employeeId) {
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
                    document.getElementById("delete-form-" + $employeeId).submit();
                }
            })
        }
    </script>
@endsection
