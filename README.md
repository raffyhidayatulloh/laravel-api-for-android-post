# 📡 Laravel API for Android App Communication

This Laravel-based RESTful API serves as the backend for the [android-post-to-laravel-api](https://github.com/raffyhidayatulloh/android-post-to-laravel-api) mobile application. It handles **user authentication** and **CRUD operations on blog posts**, enabling seamless communication with an Android client over HTTP using **token-based authentication** via Laravel Sanctum.

---

## 🚀 Features

- 🔐 **User Authentication** with Registration, Login, and Logout
- 📝 **Create, Read, Update, Delete (CRUD)** operations for posts
- 🧪 Secured endpoints using **Sanctum** token authentication
- 🤖 Tested with a real Android app using Retrofit + Ngrok tunnel

---

## 📁 API Endpoints

| Method | Endpoint         | Description                 | Auth Required |
|--------|------------------|-----------------------------|---------------|
| POST   | `/api/register`  | Register a new user         | ❌            |
| POST   | `/api/login`     | Login and get auth token    | ❌            |
| POST   | `/api/logout`    | Logout the user             | ✅            |
| GET    | `/api/posts`     | List all posts              | ✅            |
| GET    | `/api/posts/{id}`| View a single post          | ✅            |
| POST   | `/api/posts`     | Create a new post           | ✅            |
| PUT    | `/api/posts/{id}`| Update a post               | ✅            |
| DELETE | `/api/posts/{id}`| Delete a post               | ✅            |

---

## 🔐 Authentication

This API uses [Laravel Sanctum](https://laravel.com/docs/sanctum) for **token-based authentication**.

- After logging in, the Android app must include the token in the `Authorization` header:

Authorization: Bearer your_token_here

---

## 🧩 Tech Stack

- **Laravel Sanctum**
- **RESTful API Design**
- **MySQL** (or your preferred database)
- **Ngrok** for tunneling and mobile testing

---

## 🧪 Testing with Ngrok
To expose your Laravel server to the internet for Android testing:

Start Laravel local server:

```bash
php artisan serve
```
In another terminal, run ngrok (adjust port if needed):

```bash
ngrok http 8000
```
Use the provided HTTPS ngrok URL in your Android app's Retrofit base URL

---

## 🔗 Related Projects
📱 Frontend Android Client: [android-post-to-laravel-api](https://github.com/raffyhidayatulloh/android-post-to-laravel-api)
