<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SchoolSessionController extends Controller
{
    public function classroom()
    {
        $classrooms = [];
        if(Session::has('classrooms') )
        {
            $classrooms = Session::get('classrooms');
        }else
        {
            $classrooms = [
                ['id' => 1,
                    'name' => 'C1808G',
                    'startDate' => '12/08/2018',
                    'size' => 24
                ],
                [
                    'id' => 2,
                    'name' => 'C1909I',
                    'startDate' => '03/09/2019',
                    'size' => 15
                ],
                [
                    'id' => 3,
                    'name' => 'C2010G3',
                    'startDate' => '07/10/2020',
                    'size' => 20
                ],
                [
                    'id' => 4,
                    'name' => 'C2108G1',
                    'startDate' => '23/08/2021',
                    'size' => 22
                ]
            ];
            Session::put('classrooms', $classrooms);
        }
        return view('school.schoolSession.classroom', ['classrooms' => $classrooms]);
    }

    public function teacher()
    {
        $teachers = [];
        if(Session::has('teachers') )
        {
            $teachers = Session::get('teachers');
        }else
        {
            $teachers = [


                    ['id' => 1,
                        'name' => 'John Main',
                    'dob' => '10/04/1983',
                    'ssid' => '01830412345'
                ],

                   [ 'id' => 2,
                       'name' => 'Mary X',
                    'dob' => '30/02/1986',
                    'ssid' => '11860298765'
                ]

            ];
            Session::put('teachers', $teachers);
        }
        return view('school.schoolSession.teacher', ['teachers' => $teachers]);
    }


    public function student()
    {
        $students = [];
        if(Session::has('students') )
        {
            $students = Session::get('students');
        }else
        {
            $students = [
                ['id' => 1,
                    'name' => 'Juliet Conroy',
                    'email' => 'hailey.nikolaus@hotmail.com',
                    'contact' => '0912345678'
                ],
                ['id' => 2,
                    'name' => 'Cillian Hartman',
                    'email' => 'willa.gerlach@gmail.com',
                    'contact' => '0888123456'
                ]

            ];
            Session::put('students', $students);
        }
        return view('school.schoolSession.student', ['students' => $students]);
    }
//    ----------------------------------------------------------------------------
    public function create()
    {
        return view('school.schoolSession.new');
    }

    public function store(Request $request)
    {
    //    dd($request->all());
//        $out = new ConsoleOutput();
//
        $validation = $this->formValidate($request);
        if ($validation->fails())
        {
            return redirect()->back()->withErrors($validation)
            ->withInput();
        }

        $classroom= [];
        $classroom['id'] = count(Session::get('classrooms')) + 1;
        $classroom['name'] = $request->input('name');
        $classroom['startDate'] = $request->input('startDate');
        $classroom['size'] = $request->input('size');
      //  $out->writeln(join("|", $classroom));
        Session::push('classrooms', $classroom);
        return redirect()->action('SchoolSessionController@classroom');
    }

//-----------------------------------------------
    public function edit($id)
    {

        $updatedClassroom = Session::get('classrooms')[$id - 1];
        return view('school.schoolSession.update', ['classrooms' => $updatedClassroom]);
    }

    public function update(Request $request, $id)
    {
        if ($request->input('id') != $id) {
            //id in query string must match id in hidden input
            return redirect()->action('SchoolSessionController@classroom');
        }

        $this->formValidate($request)->validate();
        $allClassrooms = Session::get('classrooms');
        $updatedClassroom = $allClassrooms[$id - 1];
        $updatedClassroom['name'] = $request->input('name');
        $updatedClassroom['startDate'] = $request->input('startDate');
        $updatedClassroom['size'] = $request->input('size');

        $allClassrooms[$id - 1] = $updatedClassroom;
        Session::forget('classrooms');
        Session::put('classrooms', $allClassrooms);

        return redirect()->action('SchoolSessionController@classroom');
    }

    public function confirm($id){
        $deleteClassroom = Session::get('classrooms')[$id - 1];
        return view('school.schoolSession.confirm', ['classrooms' => $deleteClassroom]);
    }

    public function destroy(Request $request, $id){
        if ($request->input('id') != $id) {
            //id in query string must match id in hidden input
            return redirect()->action('SchoolSessionController@classroom');
        }

        //
        //this is left incomplete for students to complete
        //

        return 'Successfully delete classroom id: '. $id;
    }

    function formValidate($request){
        return Validator::make(
            $request->all(),
            [
                'name' => ['required', 'min:2', 'max:8', 'starts_with:C'],
                'size' =>['required','integer'],
                'startDate' =>['required', 'after:"01/01/2020"']
            ]
        );
    }
//-------------------------------------------------------------------------------------------------------------------
    public function create1()
    {
        return view('school.schoolSession.new1');
    }
    public function store1(Request $request)
    {
        //    dd($request->all());
//        $out = new ConsoleOutput();
//
        $validation = $this->formValidate1($request);
        if ($validation->fails())
        {
            return redirect()->back()->withErrors($validation)
                ->withInput();
        }

        $teacher= [];
        $teacher['id'] = count(Session::get('teachers')) + 1;
        $teacher['name'] = $request->input('name');
        $teacher['dob'] = $request->input('dob');
        $teacher['ssid'] = $request->input('ssid');
        //  $out->writeln(join("|", $teacher));
        Session::push('teachers', $teacher);
        return redirect()->action('SchoolSessionController@teacher');
    }
//--------------------------------------------------------------------------------------------------------------------
    public function edit1($id)
    {

        $updatedStudent = Session::get('teachers')[$id - 1];
        return view('school.schoolSession.update1', ['teachers' => $updatedStudent]);
    }

    public function update1(Request $request, $id)
    {
        if ($request->input('id') != $id) {
            //id in query string must match id in hidden input
            return redirect()->action('SchoolSessionController@teacher');
        }

        $this->formValidate1($request)->validate();
        $allTeachers = Session::get('teachers');
        $updatedTeacher = $allTeachers[$id - 1];
        $updatedTeacher['name'] = $request->input('name');
        $updatedTeacher['dob'] = $request->input('dob');
        $updatedClassroom['ssid'] = $request->input('ssid');

        $allTeachers[$id - 1] = $updatedTeacher;
        Session::forget('teachers');
        Session::put('teachers', $allTeachers);

        return redirect()->action('SchoolSessionController@teacher');
    }

    public function confirm1($id){
        $deleteTeacher = Session::get('teachers')[$id - 1];
        return view('school.schoolSession.confirm1', ['teachers' => $deleteTeacher]);
    }

    public function destroy1(Request $request, $id){
        if ($request->input('id') != $id) {
            //id in query string must match id in hidden input
            return redirect()->action('SchoolSessionController@teacher');
        }

        //
        //this is left incomplete for students to complete
        //

        return 'Successfully delete teacher id: '. $id;
    }


function formValidate1($request){
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
//------------------------------------------------------------------------------------------------------------------
    public function create2()
    {
        return view('school.schoolSession.new2');
    }
    public function store2(Request $request)
    {
        //    dd($request->all());
//        $out = new ConsoleOutput();
//
        $validation = $this->formValidate2($request);
        if ($validation->fails())
        {
            return redirect()->back()->withErrors($validation)
                ->withInput();
        }
        $student= [];
        $student['id'] = count(Session::get('students')) + 1;
        $student['name'] = $request->input('name');
        $student['email'] = $request->input('email');
        $student['contact'] = $request->input('contact');

        //  $out->writeln(join("|", $teacher));
        Session::push('students', $student);
        return redirect()->action('SchoolSessionController@student');
    }

//--------------------------------------------------------------------------------
    public function edit2($id)
    {

        $updatedStudent = Session::get('students')[$id - 1];
        return view('school.schoolSession.update2', ['students' => $updatedStudent]);
    }
    public function update2(Request $request, $id)
    {
        if ($request->input('id') != $id) {
            //id in query string must match id in hidden input
            return redirect()->action('SchoolSessionController@student');
        }
        $this->formValidate2($request)->validate();
        $allStudent = Session::get('students');
        $updatedStudent = $allStudent[$id - 1];
        $updatedStudent['name'] = $request->input('name');
        $updatedStudent['email'] = $request->input('email');
        $updatedStudent['contact'] = $request->input('contact');

        $allStudent[$id - 1] = $updatedStudent;
        Session::forget('students');
        Session::put('students', $allStudent);
        return redirect()->action('SchoolSessionController@student');
    }
    public function confirm2($id){
        $deleteStudent = Session::get('students')[$id - 1];
        return view('school.schoolSession.confirm2', ['students' => $deleteStudent]);
    }
    public function destroy2(Request $request, $id){
        if ($request->input('id') != $id) {
            //id in query string must match id in hidden input
            return redirect()->action('SchoolSessionController@student');
        }
        //
        //this is left incomplete for students to complete
        //

        return 'Successfully delete student id: '. $id;
    }
    function formValidate2($request){
        return Validator::make(
            $request->all(),
            [
                'name' => ['required'],
                'email' =>['required','email:rfc,dns'],
                'contact'=>['required', 'size: 10', 'starts_with:0'],
                ]
        );
    }

}
