use Illuminate\Http\Request;
class welcomecontroller extends controller{

public function welcome(){

    return view('welcome');
}

public function about()
{

    return view('about');
}
public function user($id,$name)
{

    $user['id']=$id;
    $user['name']=$name;

    return view('user.name',compact('user'));

}
}