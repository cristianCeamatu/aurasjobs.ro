<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    //filter if we want to sort results
    public function scopeFilter($query, $filters)
    {
        if ($department = $filters['department']) 
        {
            $query->whereRaw("department LIKE '%" . $department . "%'");
        }
        if ($company = $filters['company']) 
        {
            $query->whereRaw("company LIKE '%" . $company . "%'");
        }
        if ($employer = $filters['employer']) 
        {
            $query->whereRaw("employer LIKE '%" . $employer . "%'");
        }
    }

    //get all departments
    public static function departments()
    {
        return static::where('status', 'active')->selectRaw('department, COUNT(*) candidates')->groupBy('department')->get()->toArray();
    }

    //get all types of status
    public static function candidatesStatus()
    {
        return static::selectRaw('status, COUNT(*) candidates')->groupBy('status')->get()->toArray();
    }

    //get all employers names
    public static function candidateEmployers()
    {
        return static::where('status', 'active')->selectRaw('employer, COUNT(*) candidates')->groupBy('employer')->get()->toArray();
    }


    //adds new candidate to database
    public function addCandidate($request)
    {
        $this->name = filter_var($request['name'], FILTER_SANITIZE_STRING);
        $this->email = filter_var($request['email'], FILTER_SANITIZE_STRING);
        $this->phone = filter_var($request['phone'], FILTER_SANITIZE_STRING);
        $this->message = $request['message'] ? filter_var($request['message'], FILTER_SANITIZE_STRING) : null;
        $this->department = filter_var($request['department'], FILTER_SANITIZE_STRING);
        $cv = request()->file('cv');
        if($cv) {
            $date = date('dmYs');
            $this->cv = $cv->storeAs($date . '_' . $this->name, $date . '_cv.' . $cv->getClientOriginalExtension()); 
        }
        $identificationDocument = request()->file('identificationDocument');
        if($identificationDocument) { 
            $this->identificationDocument = $identificationDocument->storeAs($date . '_' . $this->name, $date . '_identificationDocument.' . $identificationDocument->getClientOriginalExtension()); 
        }
        if ($this->save()) {
            event(new \App\Events\Candidates\CandidateCreated($this));
        }
    }
}
