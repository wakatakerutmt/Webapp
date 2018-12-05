<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Validator;

class UserController extends Controller
{

    public function index(Request $Request)
    {
        // 認証確認
        $user = Auth::user();
        return view('user.index',compact('user'));
    }


    /*
    *  ユーザー登録ページ
    */
    public function getSignUp(Request $request)
    {
       return view('user.signup');
    }

    /*
    *  ユーザー登録処理
    */
    public function postSignUp(Request $request)
    {

      $this->validate($request, User::$signinRules);
      $user = new User([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
      ]);
      $user->save();

      Auth::attempt((['email' => $request->email, 'password' => $request->password]),true);
      return redirect('/profile');
    }


    /*
    *  ユーザーログインページ
    */
    public function getLogin(Request $request)
    {
       return view('user.login');
    }

    /*
    *  ユーザーログイン処理
    */
    public function postLogin(Request $request)
    {

      $this->validate($request, User::$loginRules);

      // 認証処理
      if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
      {
          //ログイン成功時
          return redirect('/profile');
      }{
          //ログイン失敗時
          return redirect()->back();
      }
    }


    /*
    *  ユーザーログアウト処理
    */
    public function postLogout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

    /*
    *  プロフィールページ
    */
    public function profile(Request $request)
    {
        Auth::logout();
        return view('user.profile');
    }
}
