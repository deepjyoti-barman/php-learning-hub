# PHP Basics

## How Websites Work

A web server is simply a computer that has a web server software installed. Web server software is a program that
delivers or serves files that make up websites. We installed XAMPP which includes the Apache Web server. Every web
server has an address this could be `google.com` or `wikipedia.org` and so on. 

By default, the address of the web server you have installed on your computer is `localhost`. When webserver software
is running it sits and waits for requests for files, these requests normally come from web browsers. A web browser
is a program for accessing websites. When you type the address of a web server in your web browser it requests the site
from the web server, the web server receives the request and sends the requested file back.

## How PHP Works

PHP is a programming language. We write code in PHP that we save in a file on the web server. When a PHP file is
requested the web server first executes the PHP code then the results of executing that code are sent to the browser.
It's important to note that PHP runs on the web server, it does not run on the browser. The browser knows nothing about
PHP.

```php
<?php
echo "Hello, world!";
```

In the above example first we add the line `<?php` which is called the opening PHP tag. This just tells the web server
that some PHP code is going to follow. Then we have the `echo` construct that says that whatever follows should be
printed out to the browser. Following that we have a message that says - `"Hello, world!"`. This message is contained
within quotes so that the echo statement knows where the message starts and where it ends. Finally, we have a 
`;` semicolon, this marks the end of this instruction.