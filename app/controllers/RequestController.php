<?php

// use GuzzleHttp;
use Guzzle\Http\Client;
// use GuzzleHttp\Message\Request;
use Guzzle\Plugin\Cookie\CookiePlugin;
use Guzzle\Plugin\Cookie\CookieJar\ArrayCookieJar;
// use JSON;


class RequestController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
// Set up a cookie - name, value AND domain.
// $cookie = new Guzzle\Plugin\Cookie\Cookie();
// $cookie->setName('PHPSESSID');
// $cookie->setValue($session_id_from_api);
// $cookie->setDomain($domain_of_my_service_url);

// // Set up a cookie jar and add the cookie to it.
// $jar = new Guzzle\Plugin\Cookie\CookieJar\ArrayCookieJar();
// $jar->add($cookie);

// // Set up the cookie plugin, giving it the cookie jar.
// $plugin = new Guzzle\Plugin\Cookie\CookiePlugin($jar);

// // Register the plugin with the client.
// $client->addSubscriber($plugin);

// // Now do the request as normal.
// $request = $client->get($url);
// $response = $client->send($request);

// // The returned page body.
// echo $response->getBody(true);
	public function postLogin()
	{
		parse_str(file_get_contents('php://input'), $_POST);
		parse_str(json_decode( parse_str(file_get_contents('php://input'), $_POST), TRUE ));

		$client = new GuzzleHttp\Client();
		$url = Config::get('valor.url').'login';
		$cookieJar = new \GuzzleHttp\Cookie\CookieJar();



// $cookiePlugin = new CookiePlugin(new FileCookieJar('/tmp/cookie-file'));

// // Add the cookie plugin to a client
// $client = new Client('/login');
// $client->addSubscriber($cookiePlugin);

// // Send the request with no cookies and parse the returned cookies
// $client->get('/login')->send();

// // Send the request again, noticing that cookies are being sent
// $request = $client->post('/login');
// $request->send();

// print_r ($request->getCookies());

// $inputJSON = file_get_contents('php://input');
// $input= json_decode( $inputJSON, TRUE ); //convert JSON into array

	    $res = $client->post($url,[
	    		// 'headers'  => ['Content-Type' => 'application/json'],
	    		'cookies' => $cookieJar,
	    		// 'header' => ['session_id' => $session_id],
	    		'body' => [
		        'admin_id' => Request::input('admin_id'),
		        'password' => Request::input('password')
		        // moze i Request::get()
			    ],
	    ]);


	    $res->removeHeader('HTTP/1.1');
	    $res->removeHeader('Host');
	    $res->removeHeader('Connection');
	    $res->removeHeader('X-Powered-By');

	    $res->removeHeader('Expires');
	    $res->removeHeader('Cache-Control');
	    $res->removeHeader('Pragma');
	    $res->removeHeader('Date');

	    $res->removeHeader('Server');
	    $res->removeHeader('Content-Length');

		$contents = $res->getHeader('Set-Cookie');
	    // echo $contents;
	    // $temp = explode('PHPSESSID=', $contents);
		$temp = explode('laravel_session=', $contents);
		$temp = $temp[1];
		$temp = explode(';', $temp);
		$session_id = $temp[0];
	    // echo 'Session-Id: '.$session_id;
	    // echo '</br>';
		$res->addHeader('Session-Id', $session_id);
				// $res->addHeader('Session-Id', Session::getId());
		$res->removeHeader('Set-Cookie');

		return $res;

// $value = $request->cookie('name');
	    // return $res->getBody();
	 //    foreach ($res->getHeaders() as $name => $values) {
		//     echo $name . ': ' . implode(', ', $values) . "\r\n";
		// }
		/*echo 'PHPSESSID = '.substr($res->getHeader('Set-Cookie'),10,26);
		echo '</br>';
	    echo 'laravel_session = '.substr($res->getHeader('Set-Cookie'),62,282);*/
	 //    $contents = $res->getHeader('Set-Cookie');
	 //    preg_match('/laravel_session=/',$contents,$matches);
		// echo $matches[0];
		// $temp = explode('laravel_session=', $contents);
		// $temp = $temp[1];
		// $temp = explode(';', $temp);
		// $session_id = $temp[0];
					 //    $content_type = $res->getHeader('Content-Type');
						// echo 'Content-Type: '.$content_type;
						// echo '</br>';


		// echo 'laravel_session = '.$session_id;
	 //    echo '</br>';
		// return $session_id;
		// return $res->getBody();
		// return $res->setHeader('session_id', $session_id);
		// return $res->getBody();
	    // return $res;
	 //    foreach ($res->getHeaders() as $name => $values) {
		//     echo $name . ': ' . implode(', ', $values) . "\r\n";
		// }

	    // var_dump($res->getHeader('Set-Cookie'));
	    // return $res;

	    // $sess_id = $res->SetCookie();
	    // echo $sess_id;

	    // return $res->getBody();
	}

// 	public function postLogin()
// 	{
// 		$client = new \GuzzleHttp\Client([
// 			'base_url' => Config::get('valor.url'),
// 			'defaults' => [
// 				'headers' => ['Accept' => 'application/json'
// 				]
// 			]
// 		]);

// 	    $cookieJar = new \GuzzleHttp\Cookie\CookieJar();

// 	    $request = $client->createRequest('POST', 'login', [
// 	    	'cookies' => $cookieJar,
// 	    	'body' => [
// 	    		// 'admin_id' => Request::get('admin_id'),
// 	    		// 'password' => Request::get('password'),
// 	    		'admin_id' => 'firstadmin@school.edu',
// 	    		'password' => '123456',
// 	    	]


// 	    ]);
// // echo var_dump($request);
// 	    // $response = $client->post('login', [
// 	    // 	'cookies' => $cookieJar
// 	    // ]);
// 	    // return $response->getBody();
// 	    echo $request->getBody();

// 	    $response1 = $client->get('all-members', [
// 	    	'cookies' => $cookieJar
// 	    ]);
// 	    return $response1->getBody();

// 	    $response2 = $client->get('join-requests', [
// 	    	'cookies' => $cookieJar
// 	    ]);
// 	    return $response2->getBody();
// 	    // return $res->$sess_id;
// 	    // echo $res->$sess_id;
// 	    // var_dump($res);
// 	    // return $res->getHeader('content-type');
// 	    //return $res;

// 	    //return Redirect::route('admin.login');
// 	}

	// public function getLogin()
	// {
	// 	$client = new \GuzzleHttp\Client();
		
	// 	// $options['headers'] = ['Content-Type' => 'application/json'];
	// 	$url = Config::get('valor.url').'login';
	//     $res = $client->post($url,[
	//     		'body' => [
	// 	        'admin_id' => 'firstadmin@school.edu',
	// 	        'password' => '123456',
	// 	        'action' => 'login'
	// 		    ],
	// 	        // 'admin_id' => Auth::user()->admin_id,
	// 	        // 'password' => Auth::user()->password
	// 	        // 'action' => 'login'
	// 		    'cookies' => true
	//         // 'auth' =>  ['firstadmin@school.edu', '123456']
	//     ]);
	//     // header('Content-Type: application/json');
	//     return $res->getBody();
	//     // return $res->$sess_id;
	//     // echo $res->$sess_id;
	//     // var_dump($res);
	//     // return $res->getHeader('content-type');
	//     //return $res;

	//     //return Redirect::route('admin.login');
	// }
	// public function getLogin()
	// {
	// 	$client = new \GuzzleHttp\Client();
		
	// 	// $options['headers'] = ['Content-Type' => 'application/json'];
	// 	$url = Config::get('valor.url').'login';
	// 	// $url = Config::get('valor.url').'login';
	//     $res = $client->post($url, [
	//     		'headers' => ['Content-Type' =>  Request::get('Content-Type')],
	//     	 //    'body' => [
	// 	     //    'admin_id' => 'firstadmin@school.edu',
	// 	     //    'password' => '123456',
	// 	     //    // 'action' => 'login'
	// 		    // ],
	// 		    // 'cookies' => true
	//         'auth' => [Request::get('admin_id'), Request::get('password')]
	//   ]);
	//     // header('Content-Type: application/json');
	//     return $res->getBody();
	    // return $res->$sess_id;
	    // echo $res->$sess_id;
	    // var_dump($res);
	    // return $res->getHeader('content-type');
	    //return $res;

	    //return Redirect::route('admin.login');
	// }

	// public function getLogin()
	// {
	// 	$client = new GuzzleHttp\Client();
	//     $res = $client->get('http://localhost:8000/admin/login', [
	//         'auth' =>  ['firstadmin@school.edu', '123456'],
	//         'body' => ['all_swipes' => Input::get('all_swipes'),
	//                     'right_swipes' => Input::get('right_swipes'),
	//                     'matches' => Input::get('matches'),
	//                     'conversations' => Input::get('conversations')]
	//     ]);

	//     return Redirect::route('login.show');
	// }

	public function postForgottenPassword()
	{
		parse_str(file_get_contents('php://input'), $_POST);
		parse_str(json_decode( parse_str(file_get_contents('php://input'), $_POST), TRUE ));

		$client = new GuzzleHttp\Client();
		$url = Config::get('valor.url').'forgottenpassword';
		$cookieJar = new \GuzzleHttp\Cookie\CookieJar();
	    $res = $client->post($url, [
	        	'cookies' => $cookieJar,
	        	'body' => ['email_address' => Request::input('email_address')
	        	],
	    ]);

	    $res->removeHeader('HTTP/1.1');
	    $res->removeHeader('Host');
	    $res->removeHeader('Connection');
	    $res->removeHeader('X-Powered-By');

	    $res->removeHeader('Expires');
	    $res->removeHeader('Cache-Control');
	    $res->removeHeader('Pragma');
	    $res->removeHeader('Date');

	    $res->removeHeader('Server');
	    $res->removeHeader('Content-Length');

		$contents = $res->getHeader('Set-Cookie');
	    // // echo $contents;
	    // $temp = explode('PHPSESSID=', $contents);
			$temp = explode('laravel_session=', $contents);
			$temp = $temp[1];
			$temp = explode(';', $temp);
			$session_id = $temp[0];
		    // echo 'Session-Id: '.$session_id;
		    // echo '</br>';
			$res->addHeader('Session-Id', $session_id);
			$res->removeHeader('Set-Cookie');

		return $res;
	}

	public function getMembers()
	{
		$client = new GuzzleHttp\Client();
		$url = Config::get('valor.url').'all-members';
	    $res = $client->get($url,[
	    	 //   'headers' => [
		     //    // 'Content-Type' => 'application/json',
		     //    'Session-Id' => $session_id
		     //    // moze i Request::get()
			    // ],
			   'cookies' => true
	        // 'auth' =>  ['firstadmin@school.edu', '123456']
	    ]);

	    $res->removeHeader('HTTP/1.1');
	    $res->removeHeader('Host');
	    $res->removeHeader('Connection');
	    $res->removeHeader('X-Powered-By');

	    $res->removeHeader('Expires');
	    $res->removeHeader('Cache-Control');
	    $res->removeHeader('Pragma');
	    $res->removeHeader('Date');

	    $res->removeHeader('Server');
	    $res->removeHeader('Content-Length');

		$contents = $res->getHeader('Set-Cookie');
	    // echo $contents;
	    // $temp = explode('PHPSESSID=', $contents);
		$temp = explode('laravel_session=', $contents);
		$temp = $temp[1];
		$temp = explode(';', $temp);
		$session_id = $temp[0];
	    // echo 'Session-Id: '.$session_id;
	    // echo '</br>';
		$res->addHeader('Session-Id', $session_id);
		$res->removeHeader('Set-Cookie');
	    	// 			$content_type = $res->getHeader('Content-Type');
						// echo 'Content-Type: '.$content_type;
						// echo '</br>';

						// $contents = $res->getHeader('Set-Cookie');
					 //    // echo $contents;
						// $temp = explode('laravel_session=', $contents);
						// $temp = $temp[1];
						// $temp = explode(';', $temp);
						// $session_id = $temp[0];
					 //    echo 'Session-Id: '.$session_id;
					 //    echo '</br>';

	    return $res;
	    // return $res->getHeader('Set-Cookie');
	    // return $res->getBody();
	}

	// public function getMembers()
	// {
	// 	$client = new GuzzleHttp\Client();
	//     $res = $client->get('http://localhost:8000/admin/all-members', [
	//         'auth' =>  ['firstadmin@school.edu', '123456'],
	//         'body' => ['id' => Input::get('id'),
	//                     'picture_url' => Input::get('picture_url'),
	//                     'join_date' => Input::get('join_date'),
	//                     'first_name' => Input::get('first_name'),
	//                     'last_name' => Input::get('last_name'),
	//                     'title' => Input::get('title'),
	//                     'company' => Input::get('conversations'),
	//                     'email_address' => Input::get('email_address'),
	//                     'linked_in_url' => Input::get('linked_in_url'),
	//                     'class_year' => Input::get('class_year')]
	//     ]);

	//     return Redirect::route('admin.all-members');
	// }

	// public function postRemoveMember($id)
	// {
	// 	parse_str(file_get_contents('php://input'), $_POST);
	// 	parse_str(json_decode( parse_str(file_get_contents('php://input'), $_POST), TRUE ));

	// 	$client = new GuzzleHttp\Client();
	// 	$options['headers'] = ['Content-Type' => 'application/x-www-form-urlencoded'];
	// 	$url = Config::get('valor.url').'remove-member/'.$id;
	//     $res = $client->post($url, [
	//         // 'auth' =>  ['firstadmin@school.edu', '123456'],

	//         // 'json' => ['id' => Input::get('id')]
	//         'body' => json_encode(['id' => Input::get('id')])
	//     ]);

	//     // return $res;
	//     // return $res->getHeader('content-type');
	//     return $res->getBody();
	// }

	public function postRemoveMember()
	{
		parse_str(file_get_contents('php://input'), $_POST);
		parse_str(json_decode( parse_str(file_get_contents('php://input'), $_POST), TRUE ));

		$client = new GuzzleHttp\Client();
		// $options['headers'] = ['Content-Type' => 'application/x-www-form-urlencoded'];
		$url = Config::get('valor.url').'remove-member';
		$cookieJar = new \GuzzleHttp\Cookie\CookieJar();
	    $res = $client->post($url, [
	    		// 'cookies' => true,
	        	'cookies' => $cookieJar,
	        	'body' => ['id' => Request::input('id'),
	        				'reason' => Request::input('reason')
	        	],
	    		// 'body' => [
		     //    'id' => Request::get('id'),
		     //    'reason' => Request::get('reason')
			    // ],
	    ]);

	    $res->removeHeader('HTTP/1.1');
	    $res->removeHeader('Host');
	    $res->removeHeader('Connection');
	    $res->removeHeader('X-Powered-By');

	    $res->removeHeader('Expires');
	    $res->removeHeader('Cache-Control');
	    $res->removeHeader('Pragma');
	    $res->removeHeader('Date');

	    $res->removeHeader('Server');
	    $res->removeHeader('Content-Length');

		$contents = $res->getHeader('Set-Cookie');
	    // echo $contents;
	    // $temp = explode('PHPSESSID=', $contents);
		$temp = explode('laravel_session=', $contents);
		$temp = $temp[1];
		$temp = explode(';', $temp);
		$session_id = $temp[0];
	    // echo 'Session-Id: '.$session_id;
	    // echo '</br>';
		$res->addHeader('Session-Id', $session_id);
		$res->removeHeader('Set-Cookie');

		return $res;



	    // return $res->getBody();
	}

	// public function postRemoveMember($id)
	// {
	// 	$options['headers'] = ['Content-Type' => 'application/json'];
	// 	$client = new GuzzleHttp\Client();
	//     $res = $client->post('http://localhost:8000/admin/remove-member', [
	//         'auth' =>  ['firstadmin@school.edu', '123456'],
	//         'body' => ['json' => ['id' => Input::get('id')]]
	//                     // 'reason' => Input::get('reason')]
	//     ])->send();

	//     return $res;
	// }

	public function getJoinRequests()
	{
		$client = new GuzzleHttp\Client();
		$url = Config::get('valor.url').'join-requests';
		$cookieJar = new \GuzzleHttp\Cookie\CookieJar();
	    $res = $client->get($url, [
	        'cookies' => $cookieJar
	    ]);

	    $res->removeHeader('HTTP/1.1');
	    $res->removeHeader('Host');
	    $res->removeHeader('Connection');
	    $res->removeHeader('X-Powered-By');

	    $res->removeHeader('Expires');
	    $res->removeHeader('Cache-Control');
	    $res->removeHeader('Pragma');
	    $res->removeHeader('Date');

	    $res->removeHeader('Server');
	    $res->removeHeader('Content-Length');

		$contents = $res->getHeader('Set-Cookie');
	    // echo $contents;
	    // $temp = explode('PHPSESSID=', $contents);
		$temp = explode('laravel_session=', $contents);
		$temp = $temp[1];
		$temp = explode(';', $temp);
		$session_id = $temp[0];
	    // echo 'Session-Id: '.$session_id;
	    // echo '</br>';
		$res->addHeader('Session-Id', $session_id);
		$res->removeHeader('Set-Cookie');

	    return $res;
	    // return $res->getBody();
	}

	// public function getJoinRequests()
	// {
	// 	$client = new GuzzleHttp\Client();
	//     $res = $client->get('http://localhost:8000/admin/join-requests', [
	//         'auth' =>  ['firstadmin@school.edu', '123456'],
	//         'body' => ['id' => Input::get('id'),
	//                     'picture_url' => Input::get('picture_url'),
	//                     'join_date' => Input::get('join_date'),
	//                     'first_name' => Input::get('first_name'),
	//                     'last_name' => Input::get('last_name'),
	//                     'title' => Input::get('title'),
	//                     'company' => Input::get('conversations'),
	//                     'email_address' => Input::get('email_address'),
	//                     'linked_in_url' => Input::get('linked_in_url'),
	//                     'class_year' => Input::get('class_year')]
	//     ]);

	//     return Redirect::route('admin.join-requests');
	// }

	// public function postAddRejectMember($id)
	// {
	// 	parse_str(file_get_contents('php://input'), $_POST);
	// 	parse_str(json_decode( parse_str(file_get_contents('php://input'), $_POST), TRUE ));

	//     $client = new GuzzleHttp\Client();
	//     //$id = Input::get('id');
	// 	$option = Input::get('option');
	    
	//     $url = Config::get('valor.url').'join-requests/'.$id.'/option?option='.$option;
	//     $res = $client->post( $url , [
	//         // 'auth' =>  ['firstadmin@school.edu', '123456'],
	//         'body' => json_encode(['id' => $id,
	//         	'option' => $option])
	//         //option could be accept or reject
	//     ]);

	//     // return $res;
	//     return $res->getBody();
	// }

	// public function postAddRejectMember()
	// {
	// 	parse_str(file_get_contents('php://input'), $_POST);
	// 	parse_str(json_decode( parse_str(file_get_contents('php://input'), $_POST), TRUE ));

	//     $client = new GuzzleHttp\Client();
	//     $url = Config::get('valor.url').'join-requests';
	//     $cookieJar = new \GuzzleHttp\Cookie\CookieJar();
	//     $res = $client->post( $url , [
	//         // 'auth' =>  ['firstadmin@school.edu', '123456'],
 //        	'cookies' => $cookieJar,
 //        	'body' => ['accept' => Request::input('accept'),
 //        				'reject' => Request::input('reject')
 //        	],
	//         //option could be accept or reject
	//     ]);

	//     // return $res;
	//     return $res->getBody();
	// }

	public function postAddRejectMember()
	{
		parse_str(file_get_contents('php://input'), $_POST);
		parse_str(json_decode( parse_str(file_get_contents('php://input'), $_POST), TRUE ));

	    $client = new GuzzleHttp\Client();
	    $url = Config::get('valor.url').'join-requests';
	    $cookieJar = new \GuzzleHttp\Cookie\CookieJar();
	    $res = $client->post( $url , [
	        // 'auth' =>  ['firstadmin@school.edu', '123456'],
        	'cookies' => $cookieJar,
	       	'body' => ['accept' => Request::input('accept'),
	       				'reject' => Request::input('reject')
        	// 'body' => ['accept' => ['id' => Request::input('id'),
        	// 						'id' => Request::input('id')],
        	// 			'reject' => ['id' => Request::input('id'),
        	// 						'id' => Request::input('id')]
        	],
	        //option could be accept or reject
	    ]);

	    $res->removeHeader('HTTP/1.1');
	    $res->removeHeader('Host');
	    $res->removeHeader('Connection');
	    $res->removeHeader('X-Powered-By');

	    $res->removeHeader('Expires');
	    $res->removeHeader('Cache-Control');
	    $res->removeHeader('Pragma');
	    $res->removeHeader('Date');

	    $res->removeHeader('Server');
	    $res->removeHeader('Content-Length');

		$contents = $res->getHeader('Set-Cookie');
	    // echo $contents;
	    // $temp = explode('PHPSESSID=', $contents);
		$temp = explode('laravel_session=', $contents);
		$temp = $temp[1];
		$temp = explode(';', $temp);
		$session_id = $temp[0];
	    // echo 'Session-Id: '.$session_id;
	    // echo '</br>';
		$res->addHeader('Session-Id', $session_id);
		$res->removeHeader('Set-Cookie');

	    return $res;
	    // return $res->getBody();
	}

	public function getSettings()
	{
		$client = new GuzzleHttp\Client();
		$url = Config::get('valor.url').'community-settings';
		$cookieJar = new \GuzzleHttp\Cookie\CookieJar();
	    $res = $client->get( $url, [
	    	'cookies' => $cookieJar
	    ]);

	    $res->removeHeader('HTTP/1.1');
	    $res->removeHeader('Host');
	    $res->removeHeader('Connection');
	    $res->removeHeader('X-Powered-By');

	    $res->removeHeader('Expires');
	    $res->removeHeader('Cache-Control');
	    $res->removeHeader('Pragma');
	    $res->removeHeader('Date');

	    $res->removeHeader('Server');
	    $res->removeHeader('Content-Length');

		$contents = $res->getHeader('Set-Cookie');
	    // echo $contents;
	    // $temp = explode('PHPSESSID=', $contents);
		$temp = explode('laravel_session=', $contents);
		$temp = $temp[1];
		$temp = explode(';', $temp);
		$session_id = $temp[0];
	    // echo 'Session-Id: '.$session_id;
	    // echo '</br>';
		$res->addHeader('Session-Id', $session_id);
		$res->removeHeader('Set-Cookie');

	    return $res;

	    // return $res->getBody();


	}

	// public function putSettings($id)
	// {
	//     $client = new GuzzleHttp\Client();
	//     $res = $client->put('http://localhost:8000/admin/community-settings', [
	//         'auth' =>  ['firstadmin@school.edu', '123456'],
	//         'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
	//         'body' => ["color3" => "#3CD88"]
	//     ]);

	//     // return $res;
	//     return $res->getBody();
	// }

// 	$response = GuzzleHttp\post('http://www.example.com:1234/rest/user/validat', [
//         'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
//         'body'    => '{"email":"user@domain.com", "pwd":"xxxxxx"}'
// ]);     
// print_r($response->json());


	// #=%23

	// public function putSettings($id)
	// {

	//     $client = new GuzzleHttp\Client();
	//     $url = Config::get('valor.url').'community-settings/'.$id. '?';
	//     $color1 = Input::get('color1');
	//     $color2 = Input::get('color2');
	//     $color3 = Input::get('color3');
	//     $welcome_logo = Input::get('welcome_logo');
	//     $app_header = Input::get('app_header');
	//     $menu_header = Input::get('menu_header');

	//        if ( Request::get('color1') )
	// 	    {
	// 	        $params['color1'] = Request::get('color1');
	// 	    }
		 
	// 	    if ( Request::get('color2') )
	// 	    {
	// 	        $params['color2'] = Request::get('color2');
	// 	    }

	// 	    if ( Request::get('color3') )
	// 	    {
	// 	        $params['color3'] = Request::get('color3');
	// 	    }

	// 	    if ( Request::get('welcome_logo') )
	// 	    {
	// 	        $params['welcome_logo'] = Request::get('welcome_logo');
	// 	    }

	// 	    if ( Request::get('app_header') )
	// 	    {
	// 	        $params['app_header'] = Request::get('app_header');
	// 	    }

	// 	    if ( Request::get('menu_header') )
	// 	    {
	// 	        $params['menu_header'] = Request::get('menu_header');
	// 	    }

	    
	    
	    
	//     $res = $client->put($url . http_build_query($params) , [
	//         'auth' =>  ['firstadmin@school.edu', '123456'],
	//         // 'body' => json_encode([
	//         // 			'color1' => $color1,
	//         //             'color2' => $color2,
	//         //             'color3' => $color3,
	//         //             'welcome_logo' => $welcome_logo,
	//         //             'app_header' => $app_header,
	//         //             'menu_header' => $menu_header
	//         //             ])
	//     ]);

	//     // return $res;
	//     return $res->getBody();
	// }


	public function putSettings()
	{
		// $data = array('color1'=>Request::input('color1'),'color2'=>Request::input('color2'));
		// $data_json = json_encode($data);

		// $ch = curl_init();
		// $url = Config::get('valor.url').'community-settings';
		// curl_setopt($ch, CURLOPT_URL, $url);
		// curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_json)));
		// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
		// curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
		// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// $response  = curl_exec($ch);
		// curl_close($ch);

// 		$postdata = array(
// 	        'color1' => Request::input('color1'),
// 	        'color2' => Request::input('color2')
//     	);
// 		$opts = array('http' =>
// 	    array(
// 	        'method'  => 'PUT',
// 	        'content' => $postdata
// 	    )
// );


// 		$context  = stream_context_create($opts);
		// parse_str(file_get_contents('php://input', false, $context));
		//parse_str(json_decode( parse_str(file_get_contents('php://input')), TRUE ));

		// $put = array();
		// parse_str(file_get_contents('php://input'), $put);

		parse_str(file_get_contents('php://input'), $_POST);
		parse_str(json_decode( parse_str(file_get_contents('php://input'), $_POST), TRUE ));



	    $client = new GuzzleHttp\Client();
	    $url = Config::get('valor.url').'community-settings';
	    $cookieJar = new \GuzzleHttp\Cookie\CookieJar();
	    $res = $client->post( $url , [
	        // 'auth' =>  ['firstadmin@school.edu', '123456'],
	    	'cookies' => $cookieJar,
	    	'body' => ['color1' => Request::input('color1'),
	    				'color2' => Request::input('color2'),
	    				'color3' => 'zelena',
	    				'welcome_logo' => Request::input('welcome_logo'),
	    				'app_header' => Request::input('app_header'),
	    				'menu_header' => Request::input('menu_header')
	    	],
	        //option could be accept or reject
	    ]);


	    $res->removeHeader('HTTP/1.1');
	    $res->removeHeader('Host');
	    $res->removeHeader('Connection');
	    $res->removeHeader('X-Powered-By');

	    $res->removeHeader('Expires');
	    $res->removeHeader('Cache-Control');
	    $res->removeHeader('Pragma');
	    $res->removeHeader('Date');

	    $res->removeHeader('Server');
	    $res->removeHeader('Content-Length');

		$contents = $res->getHeader('Set-Cookie');
	    // echo $contents;
	    // $temp = explode('PHPSESSID=', $contents);
		$temp = explode('laravel_session=', $contents);
		$temp = $temp[1];
		$temp = explode(';', $temp);
		$session_id = $temp[0];
	    // echo 'Session-Id: '.$session_id;
	    // echo '</br>';
		$res->addHeader('Session-Id', $session_id);
		$res->removeHeader('Set-Cookie');

	    return $res;
	    // return $res->getBody();
	}

	
	// public function putSettings()
	// {
	// 	parse_str(file_get_contents('php://input'), $_PUT);
	// 	parse_str(json_decode( parse_str(file_get_contents('php://input'), $_PUT), TRUE ));

	//     $client = new GuzzleHttp\Client();
	//     $url = Config::get('valor.url').'community-settings';
	//     $cookieJar = new \GuzzleHttp\Cookie\CookieJar();
	//     $res = $client->put($url, [
	//         	'cookies' => $cookieJar,
	//         	'body' => ['color1' => Request::input('color1'),
	//         				'color2' => Request::input('color2'),
	//         				'color3' => Request::input('color3'),
	//         				'welcome_logo' => Request::input('welcome_logo'),
	//         				'app_header' => Request::input('app_header'),
	//         				'menu_header' => Request::input('menu_header')
	//         	],
	//     ]);

	//     // return $res;
	//     return $res->getBody();
	// }
}
