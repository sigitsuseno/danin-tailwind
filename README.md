<div align="center">


  <h1>Danin Tailwin</h1>

</div>

## Installation
1. Clone the repository: git clone https://github.com/sigitsuseno/danin-tailwind.git
2. Navigate to the project directory
3. Install dependencies:
4. Laravel:
   * `composer install`
   * `cp .env.example .env`
   * edit the env based on your local configuration
   * add `FILESYSTEM_DISK="public"`
   * `php artisan key:generate`
   * `php artisan migrate --seed`
   * `php artisan storage:link`
5. Javascript:
  * `npm install`
  * `npm run build or npm run dev`
