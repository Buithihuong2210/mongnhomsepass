@extends('master.bookMaster')
@section('main')
    <div class="container">
        <div>
            <h1 class="display-3">New Book</h1>
        </div>
        <div>
            <form action="succes.php">
                <label for="title"><b>Title</b></label>
                <br>
                <input type="text" id="title" name="title" value="" placeholder="" required>
                <br>
                <label for="author"><b>Author</b></label>
                <br>
                <input type="text" id="author" name="author" value="" placeholder="" required>
                <br>
                <label for="pages"><b>Pages</b></label>
                <br>
                <input type="number" id="pages" name="pages" value="" placeholder="" required>
                <br><br>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>
@endsection
