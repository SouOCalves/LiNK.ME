<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Person;
use App\Models\Report;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Shows the user for a given id.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $this->authorize('show', $user);
        return view('pages.profile', ['user' => $user]);
    }

    public function getUserInfo(Request $request)
    {
        $id = $request->input('id');
        $user = User::find($id);
        $this->authorize('getUserInfo', $user);
        return $user;
    }



    /**
     * Creates a new user.
     *
     * @return User The user created.
     */
    public function create(Request $request)
    {
        $person = new Person();
        $this->authorize('create', $person);
        $person->username = $request->input('username');
        $person->password = $request->input('password');

        $user = $person->create([
            'name' => $request->input('name'),
            'mail' => $request->input('mail'),
        ]);
        $user->name = $request->input('name');
        $user->user_id = Auth::user()->id;
        $user->save();

        return $user;
    }

    public function delete($id)
    {
        $user = User::find($id);

        $this->authorize('delete', $user);
        $user->delete();

        return $user;
    }


    public function search(Request $request)
    {
        $users = DB::select('SELECT "user".* FROM "user" JOIN "person" ON "user"."id" = "person"."id" WHERE UPPER("user"."name") LIKE UPPER(CONCAT(:search::text, \' % \')) OR UPPER("person"."username") LIKE UPPER(CONCAT(:search::text, \' % \')) OR to_tsvector("user"."name" || \' \' || "person"."username") @@ plainto_tsquery(:search)', ["search" => $request->input("search")]);

        $final = [];
        foreach ($users as $user) {
            array_push($final, User::find($user->id));
        }

        if (Auth::check()) {
            if (!Auth::user()->is_admin) {
                return view('pages.search_posts', ['users' => $final, 'search' => $request->input("search")]);
            } else {
                $reports = Report::all()->take(20);
                return view('pages.search_posts', ['users' => $final, 'reports' => $reports, 'search' => $request->input("search")]);
            }
        } else {
            return redirect('login');
        }
    }

}
