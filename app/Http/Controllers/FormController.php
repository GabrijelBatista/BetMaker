<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stg;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic;
use Session;
use File;
use Storage;
use User;
use App\Template;
use App;
use Config;

class FormController extends Controller
{
    public function index(Request $request){

        $templates=Template::get()->all();
        $user = Auth::user();
        $ctemplate2['name']='Classic';
        $ctemplate2['max_matches']=10;
        if(!Session::has('stg')){
            $resolution['width']="1200";
            $resolution['height']="1200";
            $scale=$resolution['width']/500;
            return view('welcome', ['scale'=>$scale, 'ctemplate'=>$ctemplate2, 'user'=>$user, 'templates'=>$templates, 'backgrounds'=>$user->backgrounds,'resolution'=>$resolution, 'teams'=>$user->teams, 'competitions'=>$user->competitions]);
           }

        $oldStg=Session::get('stg');
        $stg=new Stg($oldStg);



        if($stg->resolution===NULL){
            $resolution = new \stdClass();
            $resolution->height=1200;
            $resolution->width=1200;
            $stg->addresolution($resolution);
            $request->session()->put('stg', $stg);
        }

        if($stg->ctemplate===NULL){
                $ctemplate = new \stdClass();
                $ctemplate->name='Classic';
                $ctemplate->max_matches= 10;
                $stg->addctemplate($ctemplate);
                $request->session()->put('stg', $stg);
            }

            $stg=collect($stg);

        if($stg['ctemplate']['name']==='Classic'){
            if($stg['resolution']['width']===$stg['resolution']['height']){
                $scale=$stg['resolution']['width']/500; 
                    return view('welcome', ['scale'=>$scale, 'ctemplate'=>$stg['ctemplate'], 'user'=>$user, 'templates'=>$templates,'matches2'=>$stg['matches2'], 'teams'=>$user->teams, 'competitions'=>$user->competitions, 'matches'=>$stg['matches'], 'backgrounds'=>$user->backgrounds, 'cimage'=>$stg['cimage'], 'resolution'=>$stg['resolution']]);}
            elseif($stg['resolution']['width']===1920 && $stg['resolution']['height']===1080){
                $scale=$stg['resolution']['width']/922.666666667; 
                    return view('welcome2', ['scale'=>$scale, 'ctemplate'=>$stg['ctemplate'], 'user'=>$user, 'templates'=>$templates,'matches2'=>$stg['matches2'], 'teams'=>$user->teams, 'competitions'=>$user->competitions, 'matches'=>$stg['matches'], 'backgrounds'=>$user->backgrounds, 'cimage'=>$stg['cimage'], 'resolution'=>$stg['resolution']]);}
            elseif($stg['resolution']['width']===1080 && $stg['resolution']['height']===1920){
                $scale=$stg['resolution']['width']/500; 
                     return view('welcome3', ['scale'=>$scale, 'ctemplate'=>$stg['ctemplate'], 'user'=>$user, 'templates'=>$templates,'matches2'=>$stg['matches2'], 'teams'=>$user->teams, 'competitions'=>$user->competitions, 'matches'=>$stg['matches'], 'backgrounds'=>$user->backgrounds, 'cimage'=>$stg['cimage'], 'resolution'=>$stg['resolution']]);}
}
        elseif($stg['ctemplate']['name']==='Special Match'){
            if(isset($stg['matches2'][0])){
                $matches2=$stg['matches2'];
                if($matches2[0]['day']=="Četvrtak"){
                    $m2=substr($matches2[0]['day'] , 0, 4);
                }
                else{
                $m2=substr($stg['matches2'][0]['day'] , 0, 3);}
            }
            elseif(isset($stg['matches'][0])){
                $matches2=$stg['matches'];
                if($matches2[0]['day']=="Četvrtak"){
                    $m2=substr($matches2[0]['day'] , 0, 4);
                }
                else{
                $m2=substr($stg['matches'][0]['day'] , 0, 3);}
            }
            else{
                $matches2=$stg['matches'];
                $m2='NULL';
            }
            if($stg['resolution']['width']===$stg['resolution']['height']){
            $scale=$stg['resolution']['width']/500; 
                return view('special', ['m2'=>$m2, 'scale'=>$scale, 'ctemplate'=>$stg['ctemplate'], 'user'=>$user, 'templates'=>$templates,'matches2'=>$matches2, 'teams'=>$user->teams, 'competitions'=>$user->competitions, 'matches'=>$stg['matches'], 'backgrounds'=>$user->backgrounds, 'cimage'=>$stg['cimage'], 'resolution'=>$stg['resolution']]);}
            elseif($stg['resolution']['width']==="1920" && $stg['resolution']['height']==="1080"){
            $scale=$stg['resolution']['width']/888.888889; 
                return view('special2', ['m2'=>$m2,'scale'=>$scale, 'ctemplate'=>$stg['ctemplate'], 'user'=>$user, 'templates'=>$templates,'matches2'=>$matches2, 'teams'=>$user->teams, 'competitions'=>$user->competitions, 'matches'=>$stg['matches'], 'backgrounds'=>$user->backgrounds, 'cimage'=>$stg['cimage'], 'resolution'=>$stg['resolution']]);}
            elseif($stg['resolution']['width']==="1080" && $stg['resolution']['height']==="1920"){
            $scale=$stg['resolution']['height']/500; 
                return view('special3', ['m2'=>$m2,'scale'=>$scale, 'ctemplate'=>$stg['ctemplate'], 'user'=>$user, 'templates'=>$templates,'matches2'=>$matches2, 'teams'=>$user->teams, 'competitions'=>$user->competitions, 'matches'=>$stg['matches'], 'backgrounds'=>$user->backgrounds, 'cimage'=>$stg['cimage'], 'resolution'=>$stg['resolution']]);}
        }

    }

   /* 
   public function addpdf(Request $request){

        $user = Auth::user();

        $this->validate($request, [
            'ppdf'=>'required|file'
        ]);

        $path = '/public/images/'.$user['id'].$user['name'].'/pdf';
        if(!Storage::exists($path)) {
            Storage::makeDirectory($path, $mode = 0777, true, true);
        }
        $request->file('ppdf')->move(public_path().'/storage/images/'.$user['id'].$user['name'].'/pdf/pdf.pdf');

        $pdf = new Spatie\PdfToImage\Pdf(public_path().'/storage/images/'.$user['id'].$user['name'].'/pdf/pdf.pdf');
        $pdf->saveImage(public_path().'/storage/images/'.$user['id'].$user['name'].'/pdf/pdf2.pdf');
    
        return redirect('/');
    }
    */

   /* public function fb(Request $request){

        $user = Auth::user();

        $data = $request->file('blob'); 

        $image = explode('base64,',$data); 
    
        file_put_contents('../public/image/img.png', base64_decode($image[1]));

        return [];

}*/



    public function lang(Request $request){

            Config::get('languages');
            Session::put('applocale', $request->input('lang'));

        return redirect('/');
    }

    public function addteam(Request $request){

        $this->validate($request, [
            'team_name'=>'required|max:25',
            'logo'=>'image'
        ]);

        $user = Auth::user();

        $team = new \stdClass();
        
        if($request->file('logo')!=NULL){
        $filenameWithExt = $request->file('logo')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('logo')->getClientOriginalExtension();
        $thumbStore = $user['id'].$user['email'].$filename.'_'.time().'.'.$extension;
        $thumb = Image::make($request->file('logo')->getRealPath());
        $thumb->resize(140, 140);
        $thumb->save(public_path().'/storage/images/teams/'.$thumbStore);
        $team->logo = $thumbStore;}


        $team->name = $request->input('team_name');
        $name=$team->name;
        $tarray=$user->teams;
        if($tarray!=NULL){
        foreach($tarray as $b){
            if($b['name']===$team->name){
                return redirect('/')->with('err2', 'Team with that name already exists');
            }
        }} 

        $tarray[$name]=$team;
        $user->teams=$tarray;
        $user->save();
    
            return redirect('/')->with('suct', 's');

    }

    public function addcimage(Request $request){

        $user = Auth::user();
        $cimage = new \stdClass();
        $cimage->cimage = $request->input('cimage');    
        $cimage->cimage2="NULL"; 

        $oldStg=Session::has('stg') ? Session::get('stg') : null;
        $stg = new Stg($oldStg);
        
        if($user->backgrounds!=NULL){
        foreach($user->backgrounds as $bc){
            if($bc['image']===$cimage->cimage){
                $cimage->cimage2 =$bc['image2'];
            }
        }}

        if($cimage->cimage2==="NULL"){
            $cimage->cimage2 =  $request->input('cimage2'); 
        }


        $stg->cimage=NULL;
        if($cimage->cimage!=NULL){
        $stg->addcimage($cimage);}
        $request->session()->put('stg', $stg);
    
            $oldStg=Session::get('stg');
            $stg=new Stg($oldStg);
            return redirect('/');

    }


    public function addctemplate(Request $request){

        $templates = Template::get()->all();
        $ctemplate = new \stdClass();
        $ctemplate->name = $request->input('ctemplate');   
        $ctemplate->max_matches = $request->input('cmax');    


        $oldStg=Session::has('stg') ? Session::get('stg') : null;
        $stg = new Stg($oldStg);   
        $stg->ctemplate=NULL;
        $stg->addctemplate($ctemplate);

       

            $request->session()->put('stg', $stg);


            $oldStg=Session::get('stg');
            $stg=new Stg($oldStg);
            return redirect('/');

    }


    public function addresolution(Request $request){

        $this->validate($request, [
            'width'=>'required|numeric',
            'height'=>'required|numeric'
        ]);
        $user = Auth::user();
        $resolution = new \stdClass();
        $resolution->width = $request->input('width');
        $resolution->height = $request->input('height');
        $oldStg=Session::has('stg') ? Session::get('stg') : null;
        $stg = new Stg($oldStg);
        $stg->resolution=NULL;
        $stg->addresolution($resolution);
        if($stg->cimage!=NULL){
            if(file_exists((public_path().'/storage/images/backgrounds/'.$stg->cimage['cimage']))){
            $imga = File::get(public_path().'/storage/images/backgrounds/'.$stg->cimage['cimage']);
            $img = Image::make($imga);
            $img->fit($resolution->width, $resolution->height);
            unlink(public_path().'/storage/images/backgrounds/'.$stg->cimage['cimage2']);
            $img->save(public_path().'/storage/images/backgrounds/'.$stg->cimage['cimage2']);
        }
            else{
            $imga = File::get(public_path().'/storage/images/templates/'.$stg->cimage['cimage']);
            $img = Image::make($imga);
            $img->fit($resolution->width, $resolution->height);
            unlink(public_path().'/storage/images/templates/'.$stg->cimage['cimage2']);
            $img->save(public_path().'/storage/images/templates/'.$stg->cimage['cimage2']);
            }
        }
        $request->session()->put('stg', $stg);
        
        if(!Session::has('stg')){
            return redirect('/');
           }
    
            $oldStg=Session::get('stg');
            $stg=new Stg($oldStg);
            return redirect('/');

    }


    public function addbackground(Request $request){

        $this->validate($request, [
            'background_name'=>'required|max:25',
            'background_image'=>'required|image'
        ]);

        $user = Auth::user();

        $background = new \stdClass();
        
        $oldStg=Session::has('stg') ? Session::get('stg') : null;
        $stg = new Stg($oldStg);

            $ef=$request->get('ef');

        $filenameWithExt = $request->file('background_image')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('background_image')->getClientOriginalExtension();
        $thumbStore = $user['id'].$user['email'].$filename.'_'.time().'.'.$extension;
        $thumbStore2 = $user['id'].$user['email'].$filename.'_2_'.time().'.'.$extension;
        $thumbStore3 = $user['id'].$user['email'].$filename.'_3_'.time().'.'.$extension;
        $thumb = Image::make($request->file('background_image')->getRealPath());
        $thumb2 = Image::make($request->file('background_image')->getRealPath());
        if($stg->resolution!=NULL){
        $thumb2->fit($stg->resolution['width'],$stg->resolution['height']);}
        else{
            $thumb2->fit(1920,1080);
        }

        if($ef==='blur'){
            $thumb->blur(40);
            $thumb2->blur(40);
        }
        elseif($ef==='greyscale'){
            $thumb->greyscale(40);
            $thumb2->greyscale(40);
        }
        elseif($ef==='invert'){
            $thumb->invert(5);
            $thumb2->invert(5);
        }
        elseif($ef==='brightness'){
            $thumb->brightness(30);
            $thumb2->brightness(30);
        }
        elseif($ef==='contrast'){
            $thumb->contrast(30);
            $thumb2->contrast(30);
        }
        elseif($ef==='sharpen'){
            $thumb->sharpen(30);
            $thumb2->sharpen(30);
        }
        elseif($ef==='darkness'){
            $thumb->brightness(-30);
            $thumb2->brightness(-30);
        }
        elseif($ef==='pixelate'){
            $thumb->pixelate(10);
            $thumb2->pixelate(10);
        }

        $thumb->save(public_path().'/storage/images/backgrounds/'.$thumbStore);
        $thumb2->save(public_path().'/storage/images/backgrounds/'.$thumbStore2);
        
        



        $background->name = $request->input('background_name');
        $background->image = $thumbStore;
        $background->image2 = $thumbStore2;

        $name=$request->input('background_name');

        $tarray=$user->backgrounds;
        if($tarray!=NULL){
            $count=count($tarray);
            foreach($tarray as $b){
                $b=(array)$b;
                if($b['name']===$name){
                    return redirect('/')->with('err', 'Background with that name already exists');
                }
            }    
     }  
     else{
         $count=0;
     }
     if($count<10){
        $tarray[$name]=$background;
        $user->backgrounds=$tarray;
        $user->save();
        return redirect('/')->with('sucb', 's');
    }    
        else{
            return redirect('/')->with('err', 'You can have maximum up to 10 backgrounds');
        }  
    }

    public function addcompetition(Request $request){

        $this->validate($request, [
            'competition_name'=>'required|max:25',
            'logo'=>'image'
        ]);

        $user = Auth::user();

        $competition = new \stdClass();

if($request->file('complogo')!=NULL){
        $filenameWithExt = $request->file('complogo')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('complogo')->getClientOriginalExtension();
        $thumbStore = $user['id'].$user['email'].$filename.'_'.time().'.'.$extension;
        $thumb = Image::make($request->file('complogo')->getRealPath());
        $thumb->save(public_path().'/storage/images/competitions/'.$thumbStore);
        $competition->logo=$thumbStore;
    }
        
        $competition->name = $request->input('competition_name');
        $name=$competition->name;

        $tarray=$user->competitions;
        if($tarray!=NULL){
        foreach($tarray as $b){
            if($b['name']===$competition->name){
                return redirect('/')->with('err3', 'Competition with that name already exists');
            }
        } }

        $tarray[$name]=$competition;
        $user->competitions=$tarray;
        $user->save();
        return redirect('/')->with('succ', 's');

    }

    public function addtemplate(Request $request){

        $this->validate($request, [
            'template_name'=>'required|max:25',
            'max'=>'required|numeric',
        ]);

        $user = Auth::user();
        if($user->id===1 || $user->id===2){
        $templates=new Template;

        $templates->name=$request->input('template_name');
        $templates->max_matches=$request->input('max');
        
        $templates->save();}
       
        return redirect('/')->with('suctemp', 's');

    }


    public function addmatch(Request $request){

        $this->validate($request, [
            'home_team'=>'required',
            'away_team'=>'required',
            'competition'=>'required',
            'date'=>'required',
            'time'=>'required',
        ]);    
        
        $datesend=$request->input('date');

        $datesend=explode(",", $datesend);
if(App::getLocale()=='en'){
        if($datesend[0]==='01'){
            $datesend[0]='01st';
        }
        elseif($datesend[0]==='02'){
            $datesend[0]='02nd';
        }
        elseif($datesend[0]==='03'){
            $datesend[0]='03rd';
        }
        elseif($datesend[0]==='04'){
            $datesend[0]='04th';
        }
        elseif($datesend[0]==='05'){
            $datesend[0]='05th';
        }
        elseif($datesend[0]==='06'){
            $datesend[0]='06th';
        }
        elseif($datesend[0]==='07'){
            $datesend[0]='07th';
        }
        elseif($datesend[0]==='08'){
            $datesend[0]='08th';
        }
        elseif($datesend[0]==='09'){
            $datesend[0]='09th';
        }
        elseif($datesend[0]==='10'){
            $datesend[0]='10th';
        }
        elseif($datesend[0]==='11'){
            $datesend[0]='11th';
        }
        elseif($datesend[0]==='12'){
            $datesend[0]='12th';
        }
        elseif($datesend[0]==='13'){
            $datesend[0]='13th';
        }
        elseif($datesend[0]==='14'){
            $datesend[0]='14th';
        }
        elseif($datesend[0]==='15'){
            $datesend[0]='15th';
        }
        elseif($datesend[0]==='16'){
            $datesend[0]='16th';
        }
        elseif($datesend[0]==='17'){
            $datesend[0]='17th';
        }
        elseif($datesend[0]==='18'){
            $datesend[0]='18th';
        }
        elseif($datesend[0]==='19'){
            $datesend[0]='19th';
        }
        elseif($datesend[0]==='20'){
            $datesend[0]='20th';
        }
        elseif($datesend[0]==='21'){
            $datesend[0]='21st';
        }
        elseif($datesend[0]==='22'){
            $datesend[0]='22nd';
        }
        elseif($datesend[0]==='23'){
            $datesend[0]='23rd';
        }
        elseif($datesend[0]==='24'){
            $datesend[0]='24th';
        }
        elseif($datesend[0]==='25'){
            $datesend[0]='25th';
        }
        elseif($datesend[0]==='26'){
            $datesend[0]='26th';
        }
        elseif($datesend[0]==='27'){
            $datesend[0]='27th';
        }
        elseif($datesend[0]==='28'){
            $datesend[0]='28th';
        }
        elseif($datesend[0]==='29'){
            $datesend[0]='29th';
        }
        elseif($datesend[0]==='30'){
            $datesend[0]='30th';
        }
        elseif($datesend[0]==='31'){
            $datesend[0]='31st';
        }}
    else{
        $dot=".";
        $datesend[0]=$datesend[0].$dot;
    }

        $match = new \stdClass();  
        $match->mn=$datesend[3];  
        $match->mv=$datesend[2]; 
        $match->year = $datesend[4];
        $match->date = $datesend[0];
        $match->day = $datesend[1];
        $match->time = $request->input('time');
        $match->hometeam = $request->get('home_team');
        $match->awayteam = $request->get('away_team');
        $match->competition = $request->get('competition');


        $fulldate=[$match->year, $match->mv, $match->date];
        $fd=implode(",", $fulldate);
        $match->fd=$fd;

        if($match->date<="09th"){
            $str = substr($match->date, 1); 
            $match->dts=$str;
        }
        else{
            $match->dts=$match->date;
        }

        $name=[$match->hometeam, $match->awayteam, $match->fd, $match->time];
        $name=implode(",", $name);
    
        $oldStg=Session::has('stg') ? Session::get('stg') : null;
        $user = Auth::user();
        $stg = new Stg($oldStg);
        foreach($user->teams as $team){
            if($team['name'] === $match->hometeam){
                if(isset($team['logo'])){
                $match->homelogo=$team['logo'];}
                else{$match->homelogo=0;}
            }
            if($team['name'] === $match->awayteam){
                if(isset($team['logo'])){
                $match->awaylogo=$team['logo'];}
                else{$match->awaylogo=0;}
            }
        }

        $stg->addmatch($match, $name);
        $request->session()->put('stg', $stg);

        $oldStg=Session::get('stg');
        $stg=new Stg($oldStg);

        return redirect('/')->with('sucm', 's');

    }

    public function deleteall(){

        $oldStg=Session::has('stg') ? Session::get('stg') : null;
        $oldStg->matches=NULL;
        $oldStg->matches2=NULL;
        $stg = new Stg($oldStg);
        
 
    
        return redirect('/')->with('sucm', 's');

    }

    public function deleteone(Request $request){


        $remove = request()->input('key');

        $oldStg=Session::get('stg');

        $stg=new Stg($oldStg);
        $stg->deleteone($oldStg, $remove);
        $request->session()->put('stg', $stg);

        return redirect('/')->with('sucm', 's');

    }

    public function deleteoneb(Request $request){

        $bn = request()->get('bn');
        $bi = request()->get('bi');
        $bi2 = request()->get('bi2');


        $user = Auth::user();

        foreach($user->backgrounds as $key=>$background){
            if($background['name']===$bn){
                $arr=(array)$user->backgrounds;
                unset($arr[$key]);
                $user->backgrounds=(object)$arr;
                $file_path=public_path().'/storage/images/backgrounds/'.$bi;
                unlink($file_path);
                $file_path2=public_path().'/storage/images/backgrounds/'.$bi2;
                unlink($file_path2);

            }
        }
        $user->save();
        return redirect('/')->with('sucb', 's');

    }

    public function deleteallt(){

        $user = Auth::user();
        $user->teams=NULL;
        $user->save();
    
        return redirect('/')->with('suct', 's');
    }

    public function deleteonet(Request $request){

        $tn = request()->get('tn');
        $ti = request()->get('ti');

        $user = Auth::user();

        foreach($user->teams as $key=>$team){
            if($team['name']===$tn){
                $arr=(array)$user->teams;
                unset($arr[$key]);
                $user->teams=(object)$arr;
                $path = '/public/images/teams/'.$ti;
                if(Storage::exists($path)) {
                $file_path=public_path().'/storage/images/teams/'.$ti;
                unlink($file_path);
            }}
        }
        $user->save();
        return redirect('/')->with('suct', 's');

    }

    public function deleteallc(){

        $user = Auth::user();
        $user->competitions=NULL;
        $user->save();
    
        return redirect('/')->with('succ', 's');
    }

    public function deleteonec(Request $request){

        $cn = request()->get('cn');
        $ci = request()->get('ci');

        $user = Auth::user();

        foreach($user->competitions as $key=>$competition){
            if($competition['name']===$cn){
                $arr=(array)$user->competitions;
                unset($arr[$key]);
                $user->competitions=(object)$arr;
                $path = '/public/images/competitions/'.$ci;
                if(Storage::exists($path)) {
                $file_path=public_path().'/storage/images/competitions/'.$ci;
                unlink($file_path);
            }
        }}
        $user->save();
        return redirect('/')->with('succ', 's');

    }

    public function deleteonetemp(Request $request){

        $id = request()->get('tempid');
       
        $templates = Template::get()->all();

        foreach($templates as $template){
            if($template->id===$id){
                $tempi=$template->image;
                $tempi2=$template->image2;
            $file_path=public_path().'/storage/images/templates/'.$tempi;
            unlink($file_path);
            $file_path2=public_path().'/storage/images/templates/'.$tempi2;
            unlink($file_path2);
            }
        }

        Template::where('id', $id)->delete();

        return redirect('/')->with('suctemp', 's');

    }

    public function edittemp(Request $request){

        $id = request()->input('tempid');
      
        $temp=Template::where('id', $id)->get();
        $temp=$temp[0];
        $name=$temp->name;

        $templates = Template::get()->all();


    if($request->file('eexample')!=NULL){      

    foreach($templates as $template){
        if($template->id===$id){
            $tempexample=$template->example;
            $path4 = '/public/images/templates/examples/'.$tempexample;
            if(!Storage::exists($path4)) {
        $file_path4=public_path().'/storage/images/templates/examples/'.$tempexample;
        unlink($file_path4);
        }
    }

    $filenameWithExt3 = $request->file('eexample')->getClientOriginalName();
    $filename3 = pathinfo($filenameWithExt3, PATHINFO_FILENAME);
    $extension3 = $request->file('eexample')->getClientOriginalExtension();
    $thumbStore3 = $filename3.'_'.time().'.'.$extension3;
    $thumb3 = Image::make($request->file('eexample')->getRealPath());
    $thumb3->fit(200, 200);
    $path3 = '/public/images/templates/examples';
    if(!Storage::exists($path3)) {
        Storage::makeDirectory($path3, $mode = 0777, true, true);
    }
    $thumb3->save(public_path().'/storage/images/templates/examples/'.$thumbStore3);



        $temp->example=$thumbStore3;
    }
}

        if($request->input('ename')!=NULL){
        $temp->name=$request->input('ename');}
        if($request->input('emax')!=NULL){
        $temp->max_matches=$request->input('emax');}
        
        $temp->save();



        return redirect('/')->with('suctemp', 's');

    }


    public function filter(Request $request)
    {

        $datesend=$request->input('datesend');
        $datesend2=$request->input('datesend2');

if($datesend!=NULL){

    $datesend=explode(",", $datesend);

        if($datesend[0]==='01'){
            $datesend[0]='01st';
        }
        elseif($datesend[0]==='02'){
            $datesend[0]='02nd';
        }
        elseif($datesend[0]==='03'){
            $datesend[0]='03rd';
        }
        elseif($datesend[0]==='04'){
            $datesend[0]='04th';
        }
        elseif($datesend[0]==='05'){
            $datesend[0]='05th';
        }
        elseif($datesend[0]==='06'){
            $datesend[0]='06th';
        }
        elseif($datesend[0]==='07'){
            $datesend[0]='07th';
        }
        elseif($datesend[0]==='08'){
            $datesend[0]='08th';
        }
        elseif($datesend[0]==='09'){
            $datesend[0]='09th';
        }
        elseif($datesend[0]==='10'){
            $datesend[0]='10th';
        }
        elseif($datesend[0]==='11'){
            $datesend[0]='11th';
        }
        elseif($datesend[0]==='12'){
            $datesend[0]='12th';
        }
        elseif($datesend[0]==='13'){
            $datesend[0]='13th';
        }
        elseif($datesend[0]==='14'){
            $datesend[0]='14th';
        }
        elseif($datesend[0]==='15'){
            $datesend[0]='15th';
        }
        elseif($datesend[0]==='16'){
            $datesend[0]='16th';
        }
        elseif($datesend[0]==='17'){
            $datesend[0]='17th';
        }
        elseif($datesend[0]==='18'){
            $datesend[0]='18th';
        }
        elseif($datesend[0]==='19'){
            $datesend[0]='19th';
        }
        elseif($datesend[0]==='20'){
            $datesend[0]='20th';
        }
        elseif($datesend[0]==='21'){
            $datesend[0]='21st';
        }
        elseif($datesend[0]==='22'){
            $datesend[0]='22nd';
        }
        elseif($datesend[0]==='23'){
            $datesend[0]='23rd';
        }
        elseif($datesend[0]==='24'){
            $datesend[0]='24th';
        }
        elseif($datesend[0]==='25'){
            $datesend[0]='25th';
        }
        elseif($datesend[0]==='26'){
            $datesend[0]='26th';
        }
        elseif($datesend[0]==='27'){
            $datesend[0]='27th';
        }
        elseif($datesend[0]==='28'){
            $datesend[0]='28th';
        }
        elseif($datesend[0]==='29'){
            $datesend[0]='29th';
        }
        elseif($datesend[0]==='30'){
            $datesend[0]='30th';
        }
        elseif($datesend[0]==='31'){
            $datesend[0]='31st';
        }
        $datef=$datesend[0];
        $yearf=$datesend[4];
        $montharray=array($datesend[2], $datesend[3]);
        $monthf=implode(":", $montharray);}
        else{
            
            $datef=NULL;
            $yearf=NULL;
            $monthf=NULL;
        }

if($datesend2!=NULL){
        $datesend2=explode(",", $datesend2);

        if($datesend2[0]==='01'){
            $datesend2[0]='01st';
        }
        elseif($datesend2[0]==='02'){
            $datesend2[0]='02nd';
        }
        elseif($datesend2[0]==='03'){
            $datesend2[0]='03rd';
        }
        elseif($datesend2[0]==='04'){
            $datesend2[0]='04th';
        }
        elseif($datesend2[0]==='05'){
            $datesend2[0]='05th';
        }
        elseif($datesend2[0]==='06'){
            $datesend2[0]='06th';
        }
        elseif($datesend2[0]==='07'){
            $datesend2[0]='07th';
        }
        elseif($datesend2[0]==='08'){
            $datesend2[0]='08th';
        }
        elseif($datesend2[0]==='09'){
            $datesend2[0]='09th';
        }
        elseif($datesend2[0]==='10'){
            $datesend2[0]='10th';
        }
        elseif($datesend2[0]==='11'){
            $datesend2[0]='11th';
        }
        elseif($datesend2[0]==='12'){
            $datesend2[0]='12th';
        }
        elseif($datesend2[0]==='13'){
            $datesend2[0]='13th';
        }
        elseif($datesend2[0]==='14'){
            $datesend2[0]='14th';
        }
        elseif($datesend2[0]==='15'){
            $datesend2[0]='15th';
        }
        elseif($datesend2[0]==='16'){
            $datesend2[0]='16th';
        }
        elseif($datesend2[0]==='17'){
            $datesend2[0]='17th';
        }
        elseif($datesend2[0]==='18'){
            $datesend2[0]='18th';
        }
        elseif($datesend2[0]==='19'){
            $datesend2[0]='19th';
        }
        elseif($datesend2[0]==='20'){
            $datesend2[0]='20th';
        }
        elseif($datesend2[0]==='21'){
            $datesend2[0]='21st';
        }
        elseif($datesend2[0]==='22'){
            $datesend2[0]='22nd';
        }
        elseif($datesend2[0]==='23'){
            $datesend2[0]='23rd';
        }
        elseif($datesend2[0]==='24'){
            $datesend2[0]='24th';
        }
        elseif($datesend2[0]==='25'){
            $datesend2[0]='25th';
        }
        elseif($datesend2[0]==='26'){
            $datesend2[0]='26th';
        }
        elseif($datesend2[0]==='27'){
            $datesend2[0]='27th';
        }
        elseif($datesend2[0]==='28'){
            $datesend2[0]='28th';
        }
        elseif($datesend2[0]==='29'){
            $datesend2[0]='29th';
        }
        elseif($datesend2[0]==='30'){
            $datesend2[0]='30th';
        }
        elseif($datesend2[0]==='31'){
            $datesend2[0]='31st';
        }
    
        $datet=$datesend2[0];
        $yeart=$datesend2[4];
        $montharray2=array($datesend2[2], $datesend2[3]);
        $montht=implode(":", $montharray2);
    }
    else{
        $datet=NULL;
        $yeart=NULL;
        $montht=NULL;
    }

        $oldStg=Session::has('stg') ? Session::get('stg') : null;
        $competition=$request->get('competition2');
        $hometeam=$request->get('hometeam2');
        $awayteam=$request->get('awayteam2');
        $sort=$request->get('sort');
        
        if($datet != NULL || $datef != NULL || $yearf != NULL || $monthf != NULL || $montht != NULL || $yeart != NULL || $competition != NULL || $hometeam != NULL || $awayteam != NULL || $sort != NULL){
            $matches2=array();
            if($datet===NULL){
                $datet="31st";
            }
            if($datef===NULL){
                $datef="01st";
            }
            if($montht===NULL){
                $montht="12:December";
            }
            if($monthf===NULL){
                $monthf="01:January";
            }
            if($yeart===NULL){
                $yeart="2040.";
            }
            if($yearf===NULL){
                $yearf="2020.";
            }

            if($monthf!=NULL){
                $heh=explode(":", $monthf);
                $mv=$heh[0];
                $mn=$heh[1];
            }
            if($montht!=NULL){
                $heh2=explode(":", $montht);
                $mv2=$heh2[0];
                $mn2=$heh2[1];
            }
            $fulldatef=[$yearf, $mv, $datef];
            $fdf=implode(",", $fulldatef);

            $fulldatet=[$yeart, $mv2, $datet];
            $fdt=implode(",", $fulldatet);


        if(isset($oldStg->matches)){
        foreach($oldStg->matches as $data){
            if(($fdf===NULL || $data['fd']>=$fdf) && ($fdt===NULL || $data['fd']<=$fdt)){
                
                if($competition!=NULL && $hometeam===NULL && $awayteam===NULL){
                    foreach($competition as $c){
                        if($c===$data['competition']){
                            $matches2[]=$data;
                        }
                    }
                }
                elseif($hometeam!=NULL && $competition===NULL && $awayteam===NULL){
                    foreach($hometeam as $ht){
                        if($ht===$data['hometeam']){
                            $matches2[]=$data;
                        }
                    }
                }
                elseif($awayteam!=NULL && $hometeam===NULL && $competition===NULL){
                    foreach($awayteam as $at){
                        if($at===$data['awayteam']){
                            $matches2[]=$data;
                        }
                    }
                }
                elseif($competition!=NULL && $hometeam!=NULL && $awayteam===NULL){
                    foreach($competition as $c){
                        if($c===$data['competition']){
                            foreach($hometeam as $ht){
                                if($ht===$data['hometeam']){
                                    $matches2[]=$data;
                                }
                            }
                        }
                    }
                }
                elseif($hometeam!=NULL && $competition===NULL && $awayteam!=NULL){
                    foreach($hometeam as $ht){
                        if($ht===$data['hometeam']){
                            foreach($awayteam as $at){
                                if($at===$data['awayteam']){
                                    $matches2[]=$data;
                                }
                            }
                        }
                    }
                }
                elseif($awayteam!=NULL && $hometeam===NULL && $competition!=NULL){
                    foreach($awayteam as $at){
                        if($at===$data['awayteam']){
                            foreach($competition as $c){
                                if($c===$data['competition']){
                                    $matches2[]=$data;
                                }
                            }
                        }
                    }
                }
                elseif($awayteam!=NULL && $hometeam!=NULL && $competition!=NULL){
                    foreach($awayteam as $at){
                        if($at===$data['awayteam']){
                            foreach($hometeam as $ht){
                                if($ht===$data['hometeam']){
                                    foreach($competition as $c){
                                        if($c===$data['competition']){
                                            $matches2[]=$data;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
                else{
                    $matches2[]=$data;
                }
            }}
 


    }



    $oldStg=Session::get('stg');
        $stg=new Stg($oldStg);



        $matches2=collect($matches2);

        if($sort==="scompetition"){
            $matches2=$matches2->sortBy('time')->sortBy('date')->sortBy('mv')->sortBy('year')->sortBy('competition');}
        elseif($sort==="sdate"){
            $matches2=$matches2->sortBy('time')->sortBy('date')->sortBy('mv')->sortBy('year');}
        elseif($sort==="shome"){
            $matches2=$matches2->sortBy('time')->sortBy('date')->sortBy('mv')->sortBy('year')->sortBy('hometeam');}
        elseif($sort==="saway"){
            $matches2=$matches2->sortBy('time')->sortBy('date')->sortBy('mv')->sortBy('year')->sortBy('awayteam');}
        


        $stg->matches2=NULL;
        $stg->addmatches2($matches2);
        $request->session()->put('stg', $stg);
    
            return redirect('/');
    }

    $oldStg=Session::get('stg');
    $stg=new Stg($oldStg);
    $matches2=$stg->matches;
    $stg->matches2=NULL;
    $stg->addmatches2($matches2);
    $request->session()->put('stg', $stg);
    

    return redirect('/');
}

public function filter2(Request $request){

    $oldStg=Session::has('stg') ? Session::get('stg') : null;
    $matches=$request->get('matchesfilter');
    $sort=$request->get('sort');
if($matches!=NULL){
    if($matches!=null){
        foreach($oldStg->matches as $key=>$value){
            foreach($matches as $match){
                if($value['name']===$match){
                    $matches2[]=$value;
                }
            }
        }
    }

    $oldStg=Session::get('stg');
    $stg=new Stg($oldStg);

    $matches2=collect($matches2);
}
else{
    $oldStg=Session::get('stg');
    $stg=new Stg($oldStg);
    $matches2=$stg->matches;
    $stg->matches2=NULL;
    $stg->addmatches2($matches2);
    $request->session()->put('stg', $stg);
}
if(isset($matches2)){
    if($sort==="scompetition"){
        $matches2=$matches2->sortBy('time')->sortBy('date')->sortBy('mv')->sortBy('year')->sortBy('competition');}
    elseif($sort==="sdate"){
        $matches2=$matches2->sortBy('time')->sortBy('date')->sortBy('mv')->sortBy('year');}
    elseif($sort==="shome"){
        $matches2=$matches2->sortBy('time')->sortBy('date')->sortBy('mv')->sortBy('year')->sortBy('hometeam');}
    elseif($sort==="saway"){
        $matches2=$matches2->sortBy('time')->sortBy('date')->sortBy('mv')->sortBy('year')->sortBy('awayteam');}

        
    $stg->matches2=NULL;
    $stg->addmatches2($matches2);
    $request->session()->put('stg', $stg);}
        return redirect('/');


}

}
