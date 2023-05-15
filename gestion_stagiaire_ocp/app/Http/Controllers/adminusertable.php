<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;
use App\Models\User; 
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class adminusertable extends Controller
{
    public function index()
    {
        $user = DB::table('users')->where('etat', 0)->paginate(5);
        return view('admin.demande', compact('user'));
    }

// Controller function
public function graph()
{
    $users = User::selectRaw("count(*) as count, MONTH(created_at) as month")
    ->where('etat', 1)
    ->groupBy('month')
    ->get();

// Prepare the data for the chart
$labels = $users->map(function ($user) {
return Carbon::createFromDate(null, $user->month, null)->format('F');
});
$data = $users->pluck('count');
        // Pass the data to the view
        return view('admin.dashboard', compact('labels', 'data'));
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

    $pdf = PDF::loadView('conv-pdf', $data);

    $filename = time().'conv.pdf';

    return response($pdf->output(), 200)
        ->header('Content-Type', 'application/pdf')
        ->header('Cache-Control', 'no-cache, no-store, must-revalidate')
        ->header('Pragma', 'no-cache')
        ->header('Expires', '0')
        ->header('Content-Disposition', 'attachment; filename="' . $filename . '"');
}

public function showetat()
{
    $user = User::all();
    return view('dashboard', compact('user'));
}

}
