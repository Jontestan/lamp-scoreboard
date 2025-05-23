# LAMP Stack Scoring Application

## 📝 Description
Minimal web app for judges to submit scores to participants, with a live public scoreboard.

## 🧱 Stack
- Linux (Use XAMPP/WAMP or Docker locally)
- Apache
- MySQL
- PHP

## ⚙️ Setup Instructions
1. Import `schema.sql` into your MySQL database.
2. Update `includes/db.php` with your MySQL credentials.
3. Place the project folder in your Apache root (e.g., `htdocs`).
4. Access via `http://localhost/lamp-scoreboard`.

## 📂 Key Pages
- `/admin/add_judge.php`: Add a new judge
- `/judge/select_user.php`: Submit score
- `/public/scoreboard.php`: View live scores

## ✅ Features
- Add judges
- Submit scores
- Auto-refresh scoreboard

## 🧠 Design Choices
- Simple relational schema
- PDO for secure DB handling
- Meta-refresh for scoreboard (can be improved with AJAX)

## 🚀 Future Improvements
- Add login system
- Edit or delete scores
- Export results