<?php



// GITHUB ORIGIN URL https://github.com/sonamcodesoftic/laravel.git

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Suppport\Facades\DB;


class StudentController extends Controller
{

    public function index()
    {
        // return DB::select("select * from students");
        // echo "HEllo I am here";
        $books = Student::all();
        return view('students.showdata',compact('books'));
    }
public function addData(request $Request)
{
   $member = new Student();
   $member ->studname=$Request->studname;
   $member ->course=$Request->course;
   $member ->fee=$Request->fee;
   $member ->gender=$Request->gender;
   
   $member ->save();
   return view('students/users');
} 

public function update($student_id)
{
    //    return view('students/update'); 
       $student = Student::find($student_id);
       return view('students.update',compact('student'));
}

public function posteditdata(request $Request,$id)
{
      
 $member = Student:: find($id);
//  dd($member);
 $member ->studname=$Request->studname;
 $member ->course=$Request->course;
 $member ->fee=$Request->fee;
     $member->save();
     return view('students/index');
     



    // $student_edit = Student::find('student_id');
   
    // $student_edit ->studname=$Request->studname;
    // $student_edit ->course=$Request->course;
    // $student_edit ->save();
//     $student_edit ->studname=$Request->studname;
//    $student_edit ->course=$Request->course;
//    $student_edit ->fee=$Request->fee;
//    $student_edit ->save();
    // echo "Thanks";
// ;
}

// By default function created starts

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //    //pagination
    //    $student = Student::latest()->paginate(5);
    //    return view('students.index',compact('students'));
    //     ->with('1',(request()->input('page',1)-1)*5);
    
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    //     return view('students.create');
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {

    //   $request -> validate([
    //       'studname' => 'required';
    //       'course' => 'required';
    //       'fee' => 'required';
    //   ])


    //     //
    //     // $request->validate(
    //     //     [
    //     //         'studname' => 'required';
    //     //         'course' => 'required';
    //     //         'fee' => 'required';

    //     //     ]
    //     // )

    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Student  $student
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Student $student)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Student  $student
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Student $student)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Student  $student
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Student $student)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Student  $student
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Student $student)
    // {
    //     //
    // }



    // By default function created end


}
