@extends('master.bookMaster')
@section('main')
    <div class="container">
        <div>
            <h1 class="display-1">Book Index </h1>
        </div>
        <table class="table table-hover" >
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Pages</th>
                <th scope="col"></th>
                <th scope="col"></th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>PHP for Dummies</td>
                <td>Green Hulk</td>
                <td>431</td>
                <td>
                    <p><a class="btn btn-success"
                          href="editBook.blade.php" role="button">Edit</a></p>
                </td>
                <td>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete" data-whatever="@getbootstrap">Delete</button>            </td>

            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Getting started with Laravel</td>
                <td>Iron Man</td>
                <td>209</td>
                <td>
                    <p><a class="btn btn-success"href="editBook.blade.php" role="button">Edit</a></p>
                </td>
                <td>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete" data-whatever="@getbootstrap">Delete</button>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Advanced Laravel</td>
                <td>Black Window</td>
                <td>559</td>
                <td>
                    <p><a class="btn btn-success" href="editBook.blade.php" role="button">Edit</a></p>
                </td>
                <td>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete" data-whatever="@getbootstrap">Delete</button>

                </td>
            </tr>
            </tbody>
        </table>
    </div>
    @section('other')
        <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteLabel">Deleting A Book</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#delete" method="post">
                            <div class="form-group">
                                <label for="title" class="col-form-label">Title</label>
                                <input type="text" class="form-control" id="title">
                            </div>
                            <div class="form-group">
                                <label for="author" class="col-form-label">Author</label>
                                <input type="text" class="form-control" id="author">
                            </div>
                            <div class="form-group">
                                <label for="pages" class="col-form-label">Pages</label>
                                <input type="text" class="form-control" id="pages">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        @endsection
@endsection
