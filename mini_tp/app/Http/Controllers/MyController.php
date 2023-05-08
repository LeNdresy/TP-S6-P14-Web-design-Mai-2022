<?php

    namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Categorie;
use App\Models\IAInfo;
use App\Models\IAInfoView;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
    use Illuminate\Support\Facades\DB;

    class MyController extends Controller{

        public function Load(Request $page){
            $currentPage = 1;
            if($page->input('page') != null){
                $currentPage = $page->input('page');
            }
            $containPage = 4;

            $liste = DB::select("select * from contenu_view limit ? offset ?",[$containPage, ($currentPage - 1) * $containPage]);
            if($page->input('search') != null){
                $liste = DB::select("select * from contenu_view where nom ilike '%".$page->input('search')."%' or producteur ilike '%".$page->input('search')."%' or contenu ilike '%".$page->input('search')."%'");

            }
            $liste_alaune = DB::table('contenu_view')->where('alaune',1)->get();
            $alaune = IAInfoView::where('alaune', 1)->first();

            $numberPage = count(IAInfoView::all());
            $pages = array();
            if($numberPage <= $containPage){
                $pages[] = 1;
            }       
            else{
                $division = (int)($numberPage / $containPage);
                $reste = $numberPage % $containPage;
                for($i = 1; $i <= $division; $i++){
                    $pages[] = $i;
                    if($i == $division && $reste > 0){
                        $pages[] = $i + 1;
                    }
                }
            }

            return view('index',['iainfos'=>$liste,'alaune'=>$liste_alaune, 'firstalaune'=>$alaune, 'pages'=>$pages, 'currentpage'=>$currentPage]);
        }

        public function DetailIA(Request $id){
            $iaid = $id->input('id');
            $IA = DB::table('contenu_view')->where('id',$iaid)->first();
            return view('detail',['ia'=>$IA]);
        }

        public function Login(Request $champ){
            $user = Admin::all();
            foreach($user as $u){
                if($u['nom'] == $champ->input('username') && $u['motdepasse'] == $champ->input('password')){
                    session()->put('admin', $u['id']);
                    break;
                }
            }
            return redirect('go-to-back');
        }

        public function LogOut(){
            session()->forget('admin');
            return redirect('/');
        }

        public function LoadAjout(){
            if (session()->has('admin')) {
                $liste = Categorie::all();
                return view('ajout',['categorie'=>$liste]);
            } 
            return view('login');
            
        } 

        public function Ajout(Request $champ){

            $iainfo = new IAInfo;
            $iainfo->nom = $champ->input('nom');
            $iainfo->idcategorie = $champ->input('categorie');
            $iainfo->datecreation = $champ->input('date');
            $iainfo->contenu = $champ->input('contenu'); 
            if($champ->file('photo') !== null){
                $file = $champ->file('photo');
                $iainfo->photo = "aaa".$file->getClientOriginalName();
                $champ->file('photo')->move(public_path('assets/img'),$iainfo->photo);
            }
            $iainfo->producteur = $champ->input('producteur');
            $iainfo->alaune = $champ->input('alaune');

            $result = 0;
            try{
                $iainfo->save();
                $result = 1;
            }
            catch(Exception $exception){
                $result = 2;
            }

            $liste = Categorie::all();
            return view('ajout',['categorie'=>$liste, 'result'=>$result]);
        }
    }
?>