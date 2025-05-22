# todo-list
`todo-list` is a free, self-hosted, open source app, written using laravel 11.x, that may help You organise your tasks.

# Installation using MySQL
1. Clone the git repository
```git
[git clone https://github.com/Ega-Yogiantara/unit-and-feature-test_Ega.git)
```
2. Install composer dependencies
```bash
composer install
```
3. Copy environment file
```bash
cp .env.example .env
```
4. Generate app key
```bash
php artisan key:generate
```
5. Migrate database
```bash
php artisan migrate
```
6. Start development server:
```bash
php artisan serve
```

Hasil Unit Test
![image](https://github.com/user-attachments/assets/dfd19888-5e52-4eb6-86e8-63b120ce9678)

Hasil Feature Test
![image](https://github.com/user-attachments/assets/bf19bd07-f94f-4b2d-bd6a-63789a1cc854)


