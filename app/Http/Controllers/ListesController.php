<?php

/*namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\ListesModel;
use Illuminate\Support\Facades\session;

class ListesController extends Controller
{
  public function welcome()
  {

    $listes_models = ListesModel::all();


    return view('welcome', compact('listes_models'));
  }

  public function presence(Request $request)
  {
    if ($request->validate([

      'nom' => 'required',
      'prenom' => 'required',
      'email' => 'required',
      'number' => 'required',


    ])); {

      $listes_model = new ListesModel();

      $listes_model->nom = $request->nom;

      $listes_model->prenom = $request->prenom;

      $listes_model->email = $request->email;

      $listes_model->number = $request->number;


      $listes_model->save();
      $response = [
        'ok' => true,
        'message' => 'Enregistrer avec succès!',
        'liste'=>ListesModel::All()
      ];

      return response()->json($response,200); 
      

      return redirect('/')->with(('message', 'Merci' .$request->input('prenom'). ',vous etes enregistré !')) ;
    }
  }
}
*/



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListesModel;
use Illuminate\Support\Facades\Session;

class ListesController extends Controller
{
    public function welcome()
    {
        $listes_models = ListesModel::all();
        return view('welcome', compact('listes_models'));
    }

    public function presence(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'number' => 'required',
        ]);

        $listes_model = new ListesModel();

        $listes_model->nom = $request->nom;
        $listes_model->prenom = $request->prenom;
        $listes_model->email = $request->email;
        $listes_model->number = $request->number;

        $listes_model->save();

        $response = [
          'ok' => true,
          'message' => 'Enregistré avec succès!',
          'liste' => ListesModel::all()
      ];

      return response()->json($response, 200);

      }


 function liste () {
        $response = [
            'ok' => true,
            'message' => 'Enregistré avec succès!',
            'liste' => ListesModel::all()
        ];

        return response()->json($response, 200);

        
    }
}



