##Use of git to add repository or pull from repository 1) Go to github and fork https://github.com/laravel/framework.git.

2) Install your application as you would normally:

composer create-project laravel/laravel your-project-name --prefer-dist
3) Rename git origin to anything else:

git remote rename origin laravel
4) Create a new project on github and add it as your new origin

git remote add origin https://github.com/you/yourproject.git
5) Add, commit and push it:

git add -A
git commit -m "first commit"
git push origin master   OR use  git push origin master --force
And you should be good to go.

Every time you need to merge yours with Laravel's you'll probably need to:

1) Fetch the changes

 git fetch laravel
2) Take a look at the list of branches:

git branch -va
3) Merge yous with laravel

git merge laravel/master
Integrate vue router to your application
1.To install it, you can run: npm install --save vue-router
2. Add following code to app.js
	import VueRouter from 'vue-router'
	Vue.use(VueRouter)

##Make model view controller at a single commands with migration
	php artisan make:model Todo -m -r

1.Create request to validation 
	php artisan make:request TodoRequest

2.After controller is created we can check route list
	php artisan route:list

##To generate a seeder, execute the 
	php artisan make:seeder UsersTableSeeder

	A seeder class only contains one method by default: run. This method is called when the  db:seed Artisan command is executed. Within the run method, you may insert data into your database however you wish. You may use the query builder to manually insert data or you may use Eloquent model factories.

	php artisan db:seed  or by perticular seeder class name 
	php artisan db:seed --class=UsersTableSeeder