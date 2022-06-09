<?php

namespace App\Http\Controllers;

use App\Repository\ClassroomRepos;
use App\Repository\StudentRepos;
use App\Repository\TeacherRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SchoolControllerWithRepos extends Controller
{
            public function classrooms()
{
    $classrooms = ClassroomRepos :: getAllClassrooms();
    return view('school.schoolWithRepos.classrooms',
    [
        'classrooms' => $classrooms,
    ]);
}
    public function show($id)
    {

        $classrooms = ClassroomRepos::getClassroomById($id); //this is always an array of objects
        return view('school.schoolWithRepos.show',
            [
                'classrooms' => $classrooms[0] //get the first element
            ]
        );
    }

    public function create()
    {
        return view(
            'school.schoolWithRepos.new',
            ["classrooms" => (object)[
                'id' => '',
                'name' => '',
                'startDate' => '',
                'size' => ''
            ]]);

    }

    public function store(Request $request)
    {
        $this->formValidate($request)->validate(); //shortcut

        $classrooms = (object)[
            'name' => $request->input('name'),
            'startDate' => $request->input('startDate'),
            'size' => $request->input('size'),
        ];

        $newId = ClassroomRepos::insert($classrooms);

        return redirect()
            ->action('SchoolControllerWithRepos@classrooms')
            ->with('msg', 'New classrooms with id: '.$newId.' has been inserted');
    }

    public function edit($id)
    {
        $classrooms = ClassroomRepos::getClassroomById($id); //this is always an array


        return view(
            'school.schoolWithRepos.update',
            ["classrooms" => $classrooms[0]]);
    }

    public function update(Request $request, $id)
    {
        if ($id != $request->input('id')) {
            //id in query string must match id in hidden input
            return redirect()->action('SchoolControllerWithRepos@classrooms');
        }

        $this->formValidate($request)->validate(); //shortcut

        $classrooms = (object)[
            'id' => $request->input('id'),
            'name' => $request->input('name'),
            'startDate' => $request->input('startDate'),
            'size' => $request->input('size'),
        ];
        ClassroomRepos::update($classrooms);

        return redirect()->action('SchoolControllerWithRepos@classrooms')
            ->with('msg', 'Update Successfully');;
    }

    public function confirm($id){
        $classrooms = ClassroomRepos::getClassroomById($id); //this is always an array

        return view('school.schoolWithRepos.confirm',
            [
                'classrooms' => $classrooms[0]
            ]
        );
    }

    public function destroy(Request $request, $id)
    {
        if ($request->input('id') != $id) {
            //id in query string must match id in hidden input
            return redirect()->action('SchoolControllerWithRepos@classrooms');
        }

        ClassroomRepos::delete($id);


        return redirect()->action('SchoolControllerWithRepos@classrooms')
            ->with('msg', 'Delete Successfully');
    }

    private function formValidate($request)
    {
        return Validator::make(
               $request->all(),
               [
                   'name' => ['required', 'min:2', 'max:8', 'starts_with:C'],
                   'size' =>['required','integer'],
                   'startDate' =>['required', 'after:"01/01/2020"']
               ]
           );
            }

//     -----------------------------------------------     ///////////////////////////////////////

    public function students()
    {
        $students = StudentRepos:: getAllStudents();
        return view('school.schoolWithRepos.students',
            [
                'students' => $students,
            ]);
    }
    public function show1($id)
    {

        $students = StudentRepos::getStudentById($id); //this is always an array of objects
        return view('school.schoolWithRepos.show1',
            [
                'students' => $students[0] //get the first element
            ]
        );
    }

    public function create1()
    {
        return view('school.schoolWithRepos.new1',
            ["students" => (object)[
                'id' => '',
                'name' => '',
                'email' => '',
                'contact' => ''
            ]]);

    }

    public function store1(Request $request)
    {
        $this->formValidate1($request)->validate(); //shortcut

        $students = (object)[
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'contact' => $request->input('contact'),
        ];

        $newId = StudentRepos::insert($students);

        return redirect()
            ->action('SchoolControllerWithRepos@students')
            ->with('msg', 'New classrooms with id: '.$newId.' has been inserted');
    }

    public function edit1($id)
    {
        $students = StudentRepos::getStudentById($id); //this is always an array


        return view(
            'school.schoolWithRepos.update1',
            ["students" => $students[0]]);
    }

    public function update1(Request $request, $id)
    {
        if ($id != $request->input('id')) {
            //id in query string must match id in hidden input
            return redirect()->action('SchoolControllerWithRepos@students');
        }

        $this->formValidate1($request)->validate(); //shortcut

        $students = (object)[
            'id' => $request->input('id'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'contact' => $request->input('contact'),
        ];
        StudentRepos::update($students);

        return redirect()->action('SchoolControllerWithRepos@students')
            ->with('msg', 'Update Successfully');;
    }

    public function confirm1($id){
        $students = StudentRepos::getStudentById($id); //this is always an array

        return view('school.schoolWithRepos.confirm1',
            [
                'students' => $students[0]
            ]
        );
    }

    public function destroy1(Request $request, $id)
    {
        if ($request->input('id') != $id) {
            //id in query string must match id in hidden input
            return redirect()->action('SchoolControllerWithRepos@students');
        }

        ClassroomRepos::delete($id);


        return redirect()->action('SchoolControllerWithRepos@students')
            ->with('msg', 'Delete Successfully');
    }

    function formValidate1($request){
        return Validator::make(
            $request->all(),
            [
                'name' => ['required'],
                'email' =>['required','email:rfc,dns'],
                'contact'=>['required', 'size: 10', 'starts_with:0'],
            ]
        );
    }

    ////////////////////////////////////////////////////////
    /// ----------------------------------------------

    public function teachers()
    {
        $teachers = TeacherRepos:: getAllTeachers();
        return view('school.schoolWithRepos.teachers',
            [
                'teachers' => $teachers,
            ]);
    }
    public function show2($id)
    {

        $teachers = TeacherRepos::getTeacherById($id); //this is always an array of objects
        return view('school.schoolWithRepos.show2',
            [
                'teachers' => $teachers[0] //get the first element
            ]
        );
    }

    public function create2()
    {
        return view('school.schoolWithRepos.new2',
            ["teachers" => (object)[
                'id' => '',
                'name' => '',
                'dob' => '',
                'ssid' => ''
            ]]);

    }

    public function store2(Request $request)
    {
        $this->formValidate2($request)->validate(); //shortcut

        $teachers = (object)[
            'name' => $request->input('name'),
            'dob' => $request->input('dob'),
            'ssid' => $request->input('ssid'),
        ];

        $newId = TeacherRepos::insert($teachers);

        return redirect()
            ->action('SchoolControllerWithRepos@teachers')
            ->with('msg', 'New students with id: '.$newId.' has been inserted');
    }

    public function edit2($id)
    {
        $teachers = TeacherRepos::getTeacherById($id); //this is always an array


        return view(
            'school.schoolWithRepos.update2',
            ["teachers" => $teachers[0]]);
    }

    public function update2(Request $request, $id)
    {
        if ($id != $request->input('id')) {
            //id in query string must match id in hidden input
            return redirect()->action('SchoolControllerWithRepos@teachers');
        }

        $this->formValidate2($request)->validate(); //shortcut

        $teachers = (object)[
            'id' => $request->input('id'),
            'name' => $request->input('name'),
            'dob' => $request->input('dob'),
            'ssid' => $request->input('ssid'),
        ];
        StudentRepos::update($teachers);

        return redirect()->action('SchoolControllerWithRepos@teachers')
            ->with('msg', 'Update Successfully');;
    }

    public function confirm2($id){
        $teachers = TeacherRepos::getTeacherById($id); //this is always an array

        return view('school.schoolWithRepos.confirm2',
            [
                'teachers' => $teachers[0]
            ]
        );
    }

    public function destroy2(Request $request, $id)
    {
        if ($request->input('id') != $id) {
            //id in query string must match id in hidden input
            return redirect()->action('SchoolControllerWithRepos@teachers');
        }

        ClassroomRepos::delete($id);


        return redirect()->action('SchoolControllerWithRepos@teachers')
            ->with('msg', 'Delete Successfully');
    }
    function formValidate2($request){
        return Validator::make(
            $request->all(),
            [
//                'id' => ['required'],
                'name' => ['required'],
                'dob' =>['required','date_format:d/m/Y'],
                'ssid' =>['required', 'size: 11', 'starts_with:00,10,01'],
            ]
        );
    }

}
