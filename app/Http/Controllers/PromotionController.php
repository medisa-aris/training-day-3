<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;
use App\Services\Student\StudentService;
use App\Http\Requests\StudentPromoteRequest;

class PromotionController extends Controller
{
    public $student;
    public function __construct(StudentService $student)
    {
        $this->student = $student;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', Promotion::class);
        
        return view('pages.student.promotion.index');
    }

    /**
     * promote view 
     */
    public function promoteView()
    {
        $this->authorize('promote', Promotion::class);

        return view('pages.student.promotion.promote');
    }

    /**
    * promote student
    */
    public function promote(StudentPromoteRequest $request)
    {
        $this->authorize('promote', Promotion::class);
        $data = collect($request->except('_token'));
        $this->student->promoteStudents($data);

        return back();
    }

    /**
     * reset promotion
     */
    public function resetPromotion(Promotion $promotion){
        $this->authorize('reset', Promotion::class);
        $this->student->resetPromotion($promotion);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Promotion $promotion)
    {
        $this->authorize('view', $promotion);

        return view('pages.student.promotion.show', compact('promotion'));
    }
}