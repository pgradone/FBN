# FBN
"Fact Based Nutrition" - Web site
Final Project for NumericALL CodingJobs Web Design Bootcamp

# Participants
Faballa Cissé, Potito Gradone, Guilherme Pereira, Jeff Cigrand

# Objectives
- Guide, inform and motivate health-conscious individuals to improve their health by switching to a Whole Foods Plant Based (WFPB) diet.
- Gather and rate food recipes using compliant ingredients, by allowing registered users to contribute to their creation and rating.
- Post, document and reference reliable information by challenging established beliefs and debunking false myths about nutrition.
- Inform the community at large by relating reliable scientific information with healthy eating.

# Stakeholders
- Users
- Admin
- Moderators
(- Sponsors (Food markets, organic, local.....))

# Product Backlog
- Trello as tool (learn how 2 use, see below)

# Minimum Viable Product
- refer to mockup of site

# Timeline
- Inform Team of information sources 2 B inspired by (60min)
- Learn 2 use Github as tool for backlog (40min)
- Build first backlog (1hr)
- Discuss the Entities and relationships (60min)
- Daily meetings & frequency of SCRUM iterations (20min)
- Manage SEO (Lorem Ipsum)
	Console log developer tool (80min)
- Create the DB (80min)
	create tables (40min)
	check data integrity (40min)
- Design signin page and procedure (8hrs)
	DB connections
	data validations
	testing
- Home page building (4hrs)
	session management
- Admin page for (4hrs)
	managing accounts (rights management)
	make usage statistcs
	allocation of sponsors
- User Experience check (4hrs)
- Web site validation (4hrs)
	W3c validations
	Jigsaw rating

# Burndown chart
- Look @ GDrive Sheet

# STORIES
These could be considered as entries in the menu/Navbar

## Stakeholders
Here are the possible types of users:
1. Administrators
	They have all the rights on all users, blog posts, recipes, ingredients etc..
2. Collaborators - Developers
	They can post all categories of the blog, like Articles, Recipes, Comments, Quotes, Opinions, Faqs + answers
	They can define new categories, food ingredients, translations, they have all the rights of Moderators.
3. Moderators
	They approve (read/update/delete) any post of the blog (articles, recipes, comments, quotes, opinions, answer to faqs questions)
	They can block or unregister Standard users.
4. Standard user
	They can register, login, logout, unregister themselves.
	They can read all approved posts, but only (create, update and delete) their own
	They can create recipes from (rated) ingredients
5. Sponsors
	Their registation is not free. The could be the mai source of income for the internet site
	They cotribute financially in exchange of being able to post ads.
## Blog
	The blog is made of Posts.
	Posts can be:
		- Articles (science, news)
		- Quotes
		- Opinions
		- Questions
		- Comments
		- Recipes
		- Ads (tbd)
## Recipes
	Recipes are posted by a user (many to one).
	Recipes are complex posts that can be linked to many ingredients and that can receive a nutrition score according to their ingredients composition (automatically).
  Moderators manage recipes approvals and give score according to the degree of processing and compliance to the rules of the WFPB guidelines.
## Foods
	Foods include ingredients that can be incorporated in recipes. Foods can be be rated by collaborators
	Ingredients (classified in food groups) can be used in recipes.
	Ingredients have a score according to their degree of processing and their origin (Animal or Plant kingdom)
## Search
  Ability to perform queries on any field and any table

# Web Structure
<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
