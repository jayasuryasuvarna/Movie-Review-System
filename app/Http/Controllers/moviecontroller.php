<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\reviewmodel;
use App\adminmodel;

class moviecontroller extends Controller
{
    public function adminloginqry(Request $req)
    {
    	$n=$req->input('uname');
    	$r=$req->input('password');
    	$select=adminmodel::where('username','=',$n)->where('password','=',$r)->get();
    	if(count($select)>0)
    	{
            
    		echo"
    			<script>
    			alert('logged in');
    			window.location='/adminpanel';
    			</script>

    		";
    	}
    	else
    	{
    		echo"
    		<script>
    		alert('invalid password');
    		window.location='/movieadmin';
    		</script>
    		";
    	}
    }
    public function insert(Request $req)
    {
        $image = $req->file('mpic');
        $name =  $image->getClientOriginalName();
    	$mov=new reviewmodel();
    	$mov->mname=$req->input('mname');
    	$mov->mcategory=$req->input('mcategory');
    	$mov->mlanguage=$req->input('mlanguage');
    	$mov->mdescription=$req->input('mdescription');
        $mov->mimage=$name;
    	$mov->mrate=$req->input('mrate');
    	$mov->mreview=$req->input('mreview');
    	if($mov->save())
    	{
            $destinationPath = public_path('/admin/mphotos');
            $imagePath = $destinationPath. "/".  $name;
            $image->move($destinationPath, $name);
    		echo"
    		<script>
    		alert('inserted');
    		window.location='/adminpanel';
    		</script>
    		";
    	}
    }
        public function updateqry($mid)
    {
        $res=reviewmodel::where('mid','=',$mid)->get();
        return view('Admin/update',compact('res'));
    }

    public function update(Request $req)
    {
        $mid=$req->input('mid');
        $m=$req->input('mname');
        $n=$req->input('mcategory');
        $o=$req->input('mlanguage');
        $p=$req->input('mdescription');
        $q=$req->input('mrate');
        $r=$req->input('mreview');
        $update=reviewmodel::where('mid','=',$mid)->update(['mname'=>$m,'mcategory'=>$n,'mlanguage'=>$o,'mdescription'=>$p,'mrate'=>$q,'mreview'=>$r]);
        if($update==true)
        {
            echo"
            <script>
            alert('updated');
            window.location='/adminpanel';
            </script>";
        }
        else
        {
            echo"
            <script>
            alert('error');
            window.location='/adminpanel';
            </script>";

        
    }
}
    
public function delete($mid){
        $delete=reviewmodel::where('mid','=',$mid)->delete();
        if($delete==true)
        {
            echo"
            <script>
            alert('deleted');
            window.location='/adminpanel';
            </script>";
        }
        else
        {
            echo"
            <script>
            alert('error');
            window.location='/adminpanel';
            </script>";
        }

    }
        public function info($mid)
    {
         $res=reviewmodel::where('mid','=',$mid)->get();
        return view('movieinfo',compact('res'));
    }


}
