<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## First task get request 
Inside User controller the response of the show function is a view so it shows the html and css of the view on response like the one 
done in the demo project (users/show.blade.php is the view)

## Second task get request 
I put the route append comments where I get the password and make sure it is the users password using if statements I didn't use jwt though because its not needed as the password won't be inputed and hached so in user controller the append comments function will do the append using post request 

## 3rd task get request 
I thought the 2nd and 3rd tasks are the same so I made a small cms for the users where you can view and add and edit and delete the users 
all in the web.php http://127.0.0.1:8000/users here it is 

## Last task get request 
For the last task it was really intresting as I have not worked with commands before it was really cool to learn how to do it 
So inside Commands there is appendComments.php in the handle there is happening whats needed I am getting the user data from id and changing the comments 
which I got from an array of comments inside the argument of the command which is {comments?*} and updated in the db 

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
