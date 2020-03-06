<?php
	 
	 namespace App;
	 
	 use DB;
	 use Hash;
	 use Illuminate\Database\Eloquent\Model;
	 use Session;
	 use function bcrypt;
	 
	 /**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property \Illuminate\Support\Carbon $updated_at
 * @property \Illuminate\Support\Carbon $created_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User extends Model
	 {
			static public function verify($email, $password)
			{
				 $valid = false;
				 $user = DB::table('users as u')->join('users_rules as ur',
						 'u.id',
						 '=',
						 'ur.uid')->where('u.email',
						 '=',
						 $email)->first();
				 
				 if($user) {
						
						if(Hash::check($password,
								$user->password)) {
							 $valid = true;
							 if($user->rid == 6) Session::put('is_admin',
									 true);
							 Session::put('user_id',
									 $user->id);
							 Session::put('user_name',
									 $user->name);
							 Session::flash('sm',
									 'Welcom Back',
									 $user->name);
							 
						}
				 }
				 return $valid;
			}
			
			static public function saveNew($request)
			{
				 $user = new self();
				 $user->name = $request['name'];
				 $user->email = $request['email'];
				 $user->password = bcrypt($request['password']);
				 $user->save();
				 $uid = $user->id;
				 DB::insert("INSERT INTO users_rules VALUE($uid,7)");
				 Session::put('user_id',
						 $uid);
				 Session::put('user_name',
						 $request['name']);
				 Session::flash('sm',
						 'Welcom' . $user->name . ' you sign up good');
			}
	 }
