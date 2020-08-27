//Create a response instance
$response = new Illuminate\Http\Response('Hello World');

//Call the withCookie() method with the response method
$response->withCookie(cookie('name', 'value', $minutes));

//return the response
return $response;