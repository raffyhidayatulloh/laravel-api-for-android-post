# 📡 Laravel API for Android App Communication

This **Laravel RESTful API** serves as the backend for the [android-post-to-laravel-api](https://github.com/raffyhidayatulloh/android-post-to-laravel-api) app. It provides **user authentication** and **CRUD operations on posts** via **token-based authentication** using Laravel Sanctum.

---

## 🚀 Features

- 🔐 User Registration, Login, Logout  
- 📝 CRUD operations for posts  
- 🧪 Secured with **Sanctum tokens**  
- 🤖 Tested with Android app via Retrofit + Ngrok

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

- Laravel & Laravel Sanctum  
- RESTful API Design  
- MySQL (or preferred DB)  
- Ngrok for mobile testing 

---

## 🧪 Quick Testing with Ngrok

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

- 📱 Android Client: [android-post-to-laravel-api](https://github.com/raffyhidayatulloh/android-post-to-laravel-api)

- 🛠️ Backend API: [laravel-api-for-android-post](https://github.com/raffyhidayatulloh/laravel-api-for-android-post)
