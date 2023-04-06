# webtes2023_laravel10_api_crud
 
Requirment
<ul>
<li>PHP 8.x</li>
<li>Laravel 10.x</li>
<li>MySQL</li>
</ul>
 
Step Instalation
<ul>
<li>Clone "git clone https://github.com/ekohendratno/webtes2023_laravel10_api_crud.git"</li>
<li>cd laravel</li>
<li>Copy .env.example to .env</li>
<li>Config your data .env host,user,pass and dbname
<p>
DB_CONNECTION=mysql<br/><br/>
DB_HOST=127.0.0.1<br/><br/>
DB_PORT=3306<br/>
DB_DATABASE=folarium_tes_crud<br/>
DB_USERNAME=root<br/>
DB_PASSWORD=
</p>
</li>
<li>php artisan migrate</li>
<li>php artisan make:seeder DataPegawaiSeeders</li>
<li>php artisan db:seed DataPegawaiSeeders</li>
<li>php artisan serve</li>
<li>open browser http://localhost:8000</li>
</ul>