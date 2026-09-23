# PHP Basics

## How Websites Work

A web server is simply a computer that has a web server software installed. Web server software is a program that
delivers or serves files that make up websites. We installed XAMPP which includes the Apache Web server. Every web
server has an address this could be `google.com` or `wikipedia.org` and so on.

By default, the address of the web server you have installed on your computer is `localhost`. When webserver software
is running it sits and waits for requests for files, these requests normally come from web browsers. A web browser
is a program for accessing websites. When you type the address of a web server in your web browser it requests the site
from the web server, the web server receives the request and sends the requested file back.

## What is PHP

- PHP: Hypertext Preprocessor is an open-source server-side scripting language used to develop web applications.
- PHP is very popular and accounts for around 70% of all websites. This includes websites that use frameworks like Laravel as well as content management systems like Wordpress & Drupal.
- It can be used to build anything from a simple contact form to a social network platform.

## Client-side vs Server-side

- Server-side code is executed on the server. It is not accessible from the browser. Only the output from the code is accessible.
- Client-side code like frontend JS is actually executed within the browser. All client-side code is visible to the user in the source code.

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

## Why use a Server-Side Language

- **Security:** Code cannot be seen by the client.
- **More Efficient:** Browser does not have to do any work.
- **Database Access:** You can access the database.
- **File System Access:** Read and write to files.
- **Authentication:** Create login/register functionality.
- **Sessions:** Create sessions and session variables.

## Why use PHP

- Very easy to learn
- Lots of freedom and flexibility
- Create things quickly
- Open-source and great community
- Easy web-server integration
- HTML in .php files
- Database integration

## PHP Controversy

- PHP is very flexible and gives you so much freedom that it can be easy to write bad code. This is the source of its criticisms.
- It is important to write clean code and to be aware of any security vulnerabilities that you can run into with PHP.
- Using a framework like Laravel mitigates these issues.

## Who uses PHP

- PHP is used by some of the very large companies like Facebook, Wikipedia, however it is not extremely popular among FAANG-type companies.
- PHP is very popular in small to mid-size companies, agencies and is very popular with freelancers.
