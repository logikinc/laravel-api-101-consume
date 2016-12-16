# Laravel API 101 - CONSUME

It's alive! In this lesson we will create a new Laravel 5.3 application which will use Guzzle to connect to our API that we have built in the previous lessons. We will fetch the articles, display them on the home page and provide links to view each article.

We will create a service class which will handle retrieving the articles from the API. In return we will get a Collection with which we can do whatever we want. We will be using the `index` and `show` methods from our API to retrieve articles.

**Why this approach?**

If you have a single source of truth, in this case the articles database, and you want to display them on multiple sites, it is much easier to retrieve them from the API than to duplicate models on other sites and connect directly to the database. If you duplicate models, you will have to maintain them, and trust me this quickly becomes a pain in the ass.

With this approach, you will get a collection of articles with which you can do whatever you want. If you use this approach then it does not matter to you, which backend technology is behind the API. You can move your API to Python, Node.js... it does not matter, since you always get the same response from the API. Same applies to the sites where you present the resources from the API. It can be a Laravel application, Django, JavaScript or whatever.

You can change the technology and code behind the API, but as long as it returns the same formatted responses, all other sites that depend on it will continue to work.

*This way it is much easier to maintain applications, since we have decoupled the technologies behind them.*

## Installation

Clone repository to your drive and type in terminal there:

```
composer install
```

## Configuration

Copy file `.env.example` to `.env` file:

```
cp .env.example .env
```

and change the `APP_KEY` in `.env` using:

```
php artisan key:generate
```

## Running

From terminal type:

```
php artisan serve --port=8888
```

You should get an address to open in your browser like http://localhost:8888.

**Have fun!**
