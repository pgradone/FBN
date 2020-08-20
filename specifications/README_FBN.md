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
- GitHub Project Management tool

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
