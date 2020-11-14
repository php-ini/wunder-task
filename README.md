<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

### About WunderFleet Task
<b>What do you suggest to optimize the performance?</b>
<p>- I can suggest to do the payment process in a queue job to recover the other situations like the failure, server issues and apply logic for these cases.</p>


<b>Which things could be done better?</b>
<p>- Decouple the registration steps to have one handler for everystep, in this way I can have more flexibility and can control the changes might be required in the future.</p>
<b>Notes:</b>
<p>The provided endpoint for payment is returning 502 Bad Gateway, so I created another endpoint locally for the purpose of simulation the request/response.</p>
<p>The simulation endpoint can be disabled by switching the constant in <code>Domains/WunderFleet/Payment/Sites/WunderFleet.php</code></p>
<p>The MySQL database schema can be found in <code>wunder.sql</code>
</p>
