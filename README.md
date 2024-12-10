<div align="center">


  <h1>Danin Tailwin</h1>

  <p> Lakasir is a Point of Sale (POS) application built using Laravel for the API, the Filament admin panel for the web application, and Flutter for the mobile application. </p>
  
</div>

## Installation
1. Clone the repository: git clone https://github.com/lakasir/lakasir.git
2. Navigate to the project directory: cd lakasir
3. Install dependencies:
4. Laravel:
   * `composer install`
   * `cp .env.example .env`
   * edit the env based on your local configuration
   * `php artisan key:generate`
   * `php artisan migrate --path=database/migrations/tenant --seed`
   * `php artisan filament:assets`
5. Javascript:
  * `npm install`
  * `npm run build or npm run dev`
6. Create the user using `php artisan app:create-user`
