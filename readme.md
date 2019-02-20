# laravel5-shopping-cart-with-mail-facility

##Windows users:

Download wamp: http://www.wampserver.com/en/
Download and extract cmder mini: https://github.com/cmderdev/cmder/releases/download/v1.1.4.1/cmder_mini.zip
Update windows environment variable path to point to your php install folder (inside wamp installation dir) (here is how you can do this http://stackoverflow.com/questions/17727436/how-to-properly-set-php-environment-variable-to-run-commands-in-git-bash)
cmder will be refered as console

##Mac Os, Ubuntu and windows users continue here:
<ul>
  <li>Create a database locally named homestead utf8_general_ci</li>
  <li>Download composer https://getcomposer.org/download/</li>
  <li>Pull Laravel/php project from git provider.</li>
   <li>Rename .env.example file to .envinside your project root and fill the database information. (windows wont let you do it, so you have to open your console cd your project root directory and run mv .env.example .env )</li>
  <li>Open the console and cd your project root directory</li>
  <li>Run composer install or php composer.phar install</li>
   <li>Run php artisan key:generate</li>
  <li>Run php artisan migrate</li>
  <li>Run php artisan db:seed to run seeders, if any.</li>
   <li>Run php artisan serve</li>
  
</ul><br>

<h2>#####You can now access your project at localhost:8000 :)</h2><br>

If for some reason your project stop working do these:<br>
composer install<br>
php artisan migrate<br>

<h3>This shopping cart has mail facility. Whenever a user will make new account, a mail will be sent to user account</h3>
<ul>
  <li>User can reset password by mail.</li>
  <li>User can craete cart and manage details.</li>
  <li>User can search product.</li>
  <li>Has  payment facility with stripe</li>
  <li>User can book Order for multiple product at a time.</li>
  <li>Interactive interface</li>
  </ul>

