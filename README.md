# phoneShop

A lightweight backend system using MySQL to manage users, their owned goods, and available products. This project includes three main tables: `users`, `goods`, and `allgoods`.

## 📂 Database Structure

### 🧑‍💼 users
Stores registered user credentials and timestamps.

| Field      | Type     | Description                |
|------------|----------|----------------------------|
| id         | INT      | Primary key (auto-increment) |
| username   | VARCHAR  | Unique username             |
| password   | VARCHAR  | Hashed user password        |
| time       | DATETIME | Account creation time       |

---

### 📦 goods
Represents which goods are owned by which users.

| Field   | Type | Description                     |
|---------|------|---------------------------------|
| id      | INT  | Primary key (auto-increment)    |
| userId  | INT  | Foreign key to `users.id`       |
| goodId  | INT  | Foreign key to `allgoods.id`    |

---

### 🛍️ allgoods
Catalog of all goods available in the system.

| Field        | Type     | Description                  |
|--------------|----------|------------------------------|
| id           | INT      | Primary key (auto-increment) |
| name         | VARCHAR  | Name of the good             |
| price        | FLOAT    | Price of the good            |
| category     | VARCHAR  | Category (e.g., electronics, books) |
| imageAddress | VARCHAR  | Path or URL to product image |

---

## 🔧 Features

- User registration and login system
- Assign goods to users
- Retrieve all goods or user-specific goods
- Basic product information with pricing and images

## 🛠️ Technologies

- MySQL
- PHP
- HTML/CSS/Vanilla JS

## 🚀 Getting Started

1. Clone this repository
2. Set up the MySQL database using the schema
3. Configure your backend connection
4. Start the server

## 🔐 Security Note

Make sure to hash passwords before storing them in the `users` table (e.g., using bcrypt).

## 📜 License

MIT License
