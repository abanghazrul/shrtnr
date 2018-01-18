# shrtnr
A simple URL shortener using a flat file written in PHP.

# Starting the server

```
$ cd ~/shrtnr
$ php -S localhost:4555
The terminal will show:

PHP 7.0 Development Server started at Thu Jul 21 10:43:28 2017
Listening on localhost:4555
Document root is /home/me/shrtnr
Press Ctrl-C to quit
```

# Instructions for Web frontend mode

1. Go to http://localhost:4555 on the browser
2. Enter a long Url
3. Get the result

# Instructions for RESTful mode

1. Use Postman and enter http://localhost:4555/index.php?create=true as the API endpoint.
2. Select `raw` for the body and form an JSON array like this:
``` {"link"=>"http://www.apple.com"} ```
3. Get the result
