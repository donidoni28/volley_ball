<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Genre;
use App\Models\Photo;
use App\Models\Equipe;
use App\Models\Joueur;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use function Composer\Autoload\includeFile;

class JoueurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $equipe = Equipe::find($id);
        $genres = Genre::all();
        $roles = Role::all();
        $countPlayer = $equipe->joueur->count();
        $maxJoueur = $equipe->joeurs_max;
        
        
        // dd($joueurs[0]->genre);
        return view('Frontend.joueur.index', [
            'joueurs' => $equipe->joueur,
            'equipeId' => $id,
            'genres' => $genres,
            'roles' => $roles,
            'countPlayer' => $countPlayer,
            'maxJoueur' => $maxJoueur,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($equipeId)
    {
        $roles = Role::all();
        $genres = Genre::all();
        // dd($genres);
        return view('Backend.joueur.create', [
            'roles' => $roles,
            'equipeId' => $equipeId,
            'genres' => $genres
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $equipeId)
    {
        
        $equipe = Equipe::find($equipeId);
        // $avantPlayer = $equipe->jouer

        $countPlayer = $equipe->joueur->count();
        $countAvant = $equipe->joueur->where('role_id','=','1')->count();
        $countCentral = $equipe->joueur->where('role_id','=','2')->count();
        $countArriere = $equipe->joueur->where('role_id','=','3')->count();
        $countBanc = $equipe->joueur->where('role_id','=','4')->count();

        $maxJoueur = $equipe->joeurs_max;
        $maxAvant = $equipe->avant;
        $maxArriere = $equipe->arriere;
        $maxCentral = $equipe->central;
        $maxBanc = $equipe->banc;



        // dd($allPlayer->where('role_id','=',$centreMax)->count());

        // $joueurMax
        if($countPlayer == $maxJoueur){
            return redirect()->route('joueur.index',$equipeId)->with('error','Trop de joueur');
        }
        if($countAvant == $maxAvant && $request->role == '1'){
            return redirect()->route('joueur.index',$equipeId)->with('error','Max Avant atteind');
        }
        if($countCentral == $maxCentral && $request->role == '2'){
            return redirect()->route('joueur.index',$equipeId)->with('error','Max Central atteind');
        }
        if($countArriere == $maxArriere && $request->role == '3'){
            return redirect()->route('joueur.index',$equipeId)->with('error','Max Arriere atteind');
        }
        if($countBanc == $maxBanc && $request->role == '4'){
            return redirect()->route('joueur.index',$equipeId)->with('error','Max Banc atteind');
        }
        foreach ($request->toArray() as  $value) {
            if( $value === null){
                return redirect()->route('joueur.index',$equipeId)->with('error','tout les champs sont requis');
            }
        }
        if($request->genre === null || $request->role === null||$request->img === null){
            return redirect()->route('joueur.index',$equipeId)->with('error','tout les champs sont requis');
        }
        
        if($request->file('img')===null){
            return redirect()->route('joueur.index',$equipeId)->with('error','img requis');
        }

        $store = new Joueur;
        $store['nom'] = $request->nom;
        $store['prenom'] = $request->prenom;
        $store['age'] = $request->age;
        $store['phone'] = $request->phone;
        $store['mail'] = $request->mail;
        $store['origine'] = $request->origine;



        $store->genre_id = $request->genre;
        $store->role_id = $request->role;
        $store->equipe_id = $equipeId;


        // dd($store->joueur);

        // $fileName = "img/" . ucfirst($store->equipe->nom) . "/" . ucfirst($request->prenom) . "_" . ucfirst($request->nom);
        Storage::put('public/img/', $request->file('img'));

        $storePhoto = new Photo;

        $storePhoto->src = $request->file('img')->hashName();


        $storePhoto->save();

        $store->photo_id = $storePhoto->id;
        $store->save();

        return redirect()->route('joueur.index',$equipeId);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($equipeId, $playerId)
    {
        $show = Joueur::find($playerId);
        return view('Frontend.joueur.show', [
            'joueur' => $show
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($equipeId,$playerId)
    {
        // $edit = Joueur::find($playerId);
        $joueur = Equipe::find($equipeId)->joueur->where('id',$playerId)[0];
        $genres = Genre::all();
        $roles = Role::all();


        return view('Backend.joueur.edit', [
            'joueur' => $joueur,
            'genres' => $genres,
            'roles' => $roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $equipeId,$playerId)
    {
        $equipe = Equipe::find($equipeId);
        // $avantPlayer = $equipe->jouer

        $countPlayer = $equipe->joueur->count();
        $countAvant = $equipe->joueur->where('role_id','=','1')->count();
        $countCentral = $equipe->joueur->where('role_id','=','2')->count();
        $countArriere = $equipe->joueur->where('role_id','=','3')->count();
        $countBanc = $equipe->joueur->where('role_id','=','4')->count();

        $maxJoueur = $equipe->joeurs_max;
        $maxAvant = $equipe->avant;
        $maxArriere = $equipe->arriere;
        $maxCentral = $equipe->central;
        $maxBanc = $equipe->banc;



        // dd($allPlayer->where('role_id','=',$centreMax)->count());

        // $joueurMax
        $store = Joueur::find($playerId);
        // dd(
        //     $request->role,$store->role_id

        // );
        // $countPlayer == $maxJoueur
        if(( $countAvant == $maxAvant ) && ( $request->role !== null ) && $request->role == $store->role_id  ){
            return redirect()->back()->with('error','Max Avant atteind');
        }
        if(( $countCentral == $maxCentral ) && ( $request->role !== null ) && $request->role == $store->role_id  ){
            return redirect()->back()->with('error','Max Central atteind');
        }
        if(( $countArriere == $maxArriere ) && ( $request->role !== null ) && $request->role == $store->role_id  ){
            return redirect()->back()->with('error','Max Arriere atteind');
        }
        if(( $countBanc == $maxBanc ) && ( $request->role !== null ) && $request->role == $store->role_id  ){
            return redirect()->back()->with('error','Max Banc atteind');
        }
        

        // $fileName = "img/" . ucfirst($store->equipe->nom) . "/" . ucfirst($request->prenom) . "_" . ucfirst($request->nom);

        //DATA
        $store->nom = $request->nom;
        $store->prenom = $request->prenom;
        $store->age = $request->age;
        $store->phone = $request->phone;
        $store->mail = $request->mail;
        $store->origine = $request->origine;
        if($request->genre !== null){
            $store->genre_id = $request->genre;
        }
        if($request->role !== null){
            $store->role_id = $request->role;
        }


        //FILE
        if($request->file('img')!==null)
        {
            // Storage::disk('public')->delete('img/'.$dest->img);
            Storage::delete('public/img/'. $store->photo->src);
            Storage::put('public/img/', $request->file('img'));
            // $request->file('img')->storePublicly($fileName, "public");
            $store->photo->src = $request->file('img')->hashName();
            $store->photo->save();
            
        }

        $store->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($equipeId,$playerId)
    {
        $photo = Photo::find($playerId);
        // // Storage::delete('public/img/'.$dest->img);

        // Storage::disk('public')->delete('img/'.$dest->img);
        // $dest ->delete();
        // return redirect()->back();
        $equipe = Equipe::find($equipeId);
        $player = $equipe->joueur->where('id','=',$playerId)->first();
        Storage::delete('public/img/'. $photo->src);
        $player->photo->delete();
        $player->delete();
        return redirect()->route('joueur.index',$equipeId);
    }
}
