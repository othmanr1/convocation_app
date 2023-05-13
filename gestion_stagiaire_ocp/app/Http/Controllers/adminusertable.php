<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\DB;
class adminusertable extends Controller
{
    public function index()
    {
        $user = DB::table('users')->where('etat', 0)->paginate(5);
        return view('admin.dashboard', compact('user'));
    }
    public function valider()
    {
        $user = DB::table('users')->where('etat', 1)->paginate(5);
        return view('admin.valider', compact('user'));
    }
    public function nonvalider()
    {
        $user = DB::table('users')->where('etat', 2)->paginate(5);
        return view('admin.non_valider', compact('user'));
    }
    public function updateEtat($id)
    {
        $stg = User::find($id);
    
        if ($stg->etat === 0) {
            $stg->etat = 1;
        } else {
            $stg->etat = 0;
        }
    
        $stg->save();
    
        return redirect()->back();
    }
    public function updateAnother($id)
{
    $stg = User::find($id);

    if ($stg->etat === 0 ) {
        $stg->etat = 2;
    } else {
        $stg->etat = 0;
    }

    $stg->save();

    return redirect()->back();
}



public function generatePDF($id)
{
    $user = User::findOrFail($id);

    $data = [
        'title' => 'stagiaire convocation',
        'user' => $user
    ];
    

    $pdf = PDF::loadView('stagiaire-pdf', $data);

    return $pdf->download('stagiaire_convocation.pdf');
}

public function showetat()
{
    $user = User::all();
    return view('dashboard', compact('user'));
}

}
