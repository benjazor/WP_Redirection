# wp-redirection
## What is wp-redirection
wp-redirection is a Wordpress function that allows you to define custom links to redirect to another website.   
( Ex: mywebsite.com/youtube -> youtube.com/myYoutubePage )
## How to use it
Copy this function in your "functions.php", then create as many redirections as you want.
## How to create a redirection
```php
wp_redirection( $link, $url );
```
"$link" is the link you want to use for the redirection.  
"$url" is the url you want to redirect the user too.