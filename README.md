# 🐺 Hydra Lab: PHP Login System for Brute Force Practice

Welcome to **Hydra Lab**, a lightweight PHP-based login system which have **3 users : wolf , admin , test** designed specifically for practicing **Hydra brute force attacks** in a controlled environment. This project includes a login page, a secure dashboard, and session handling with demo users for testing.

---

## 👨‍💻 Author Introduction  

Hello! I am **Muhammad Saqlain Shoukat** also known as **Dark Wolf** founder and developer of **Coding Chat Room**, a passionate learner and creator in the field of **Cybersecurity, Programming, and DevSecOps**.  

🔹 My mission is to make **complex technical concepts simple and easy** so that students and professionals can learn without confusion.  
🔹 On my platforms, I share tutorials, study notes, and practical tips about **Linux, Ethical Hacking, Development, Programming and Cybersecurity**.  
🔹 I believe in **learning by sharing** — the more we teach, the more we grow.  

---

## 📑 Project Overview

Hydra Lab is a simple yet effective platform to simulate a login system which have **3 users : wolf , admin , test**  vulnerable to brute force attacks. It’s perfect for cybersecurity enthusiasts, penetration testers, and learners who want to experiment with **THC-Hydra** in a safe, ethical setup.

### 🗂 Project Structure
- **`login.php`**: The login page which have **3 users : wolf , admin , test** with a form that returns a detectable error message for failed login attempts, ideal for Hydra testing.  
- **`dashboard.php`**: A protected dashboard displayed after successful login, showcasing session handling.  
- **`logout.php`**: A script to destroy the session and log out the user securely.

---

## 🛠 Setup Instructions

Follow these steps to set up **Hydra Lab** on **Kali Linux** with **Apache2** and **PHP**.

### 1️⃣ Install Dependencies
Ensure Apache2 and PHP are installed:
```bash
sudo apt update
sudo apt install apache2 php libapache2-mod-php -y
```

### 2️⃣ Deploy Project
Copy the project folder to the Apache web root:
```bash
sudo cp -r hydra-lab /var/www/html/
```

### 3️⃣ Set Permissions
Configure ownership and permissions for security:
```bash
sudo chown -R www-data:www-data /var/www/html/hydra-lab
sudo chmod -R 755 /var/www/html/hydra-lab
```

### 4️⃣ Restart Apache
Apply changes by restarting the Apache service:
```bash
sudo systemctl start apache2
```

### 5️⃣ Access the Application
Open your browser and navigate to:
```
http://localhost/hydra-lab/login.php
```

---

## 🔑 Demo Credentials

Test the login system with these pre-configured users:

| Username | Password  |
|----------|-----------|
| admin    | admin123  |
| test     | test      |
| wolf     | 1234      |

> **Note**: These credentials are for demonstration purposes only. Use them to practice brute force techniques ethically.

---

## 🐉 Using THC-Hydra

Test your brute force skills by running **Hydra** against the login form. Use the following command:

```bash
hydra -L users.txt -P passwords.txt localhost http-post-form "/hydra-lab/login.php:uname=^USER^&pass=^PASS^:F=Invalid login"
```

### Command Breakdown
- `-L users.txt`: Path to a wordlist containing usernames.
- `-P passwords.txt`: Path to a wordlist containing passwords.
- `localhost`: Target server (replace with your server IP if not local).
- `http-post-form`: Specifies the HTTP POST method for form submission.
- `/hydra-lab/login.php:uname=^USER^&pass=^PASS^`: The login endpoint and form parameters.
- `F=Invalid login`: The failure message returned by the server for incorrect credentials.

> **Tip**: Create `users.txt` and `passwords.txt` with the demo credentials above to test Hydra successfully.

> **Watch Demo**: You can also watch demo for its learning from here 👉: [HYDRA in 1 Video](https://www.youtube.com/@CodingChatRoom)

---

## ⚠️ Ethical Use Disclaimer

This project is intended for **educational purposes only**. Use it in a controlled, legal environment to learn about cybersecurity and brute force techniques. Unauthorized hacking or misuse is strictly prohibited.

Happy learning, and stay ethical! 🛡️

---

## 📚 More Learning & Connect with Me

If you found this helpful and want to learn more about **search tricks, cybersecurity, and coding**, follow me here and **Star this Resporatory**:

- 🎥 **YouTube**: [Coding Chat Room](https://www.youtube.com/@CodingChatRoom)  
- 📸 **Instagram**: [@codingchatroom](https://www.instagram.com/codingchatroom/?igsh=czBrcjAyYmxma2du)
- 💻 GitHub: [Coding Chat Room](https://github.com/CodingChatRoom)

💡 I share tutorials, tips, and resources to make learning **cybersecurity and coding easier**.  
Don’t forget to **subscribe & follow** for more updates and **Star this Resporatory** 🚀  
