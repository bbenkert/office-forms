
# Old Town Church Office Portal

A secure Laravel-based internal tool designed for the staff at Old Town Christian Outreach Center. This project powers a simple, user-friendly portal for accessing and managing internal forms—each built to send submissions directly to an email inbox and a Microsoft 365 Excel spreadsheet.

## ✨ Features

- 🔒 Password-protected portal
- 🛠️ Admin panel to create and manage forms
- 📝 Dynamic form creation with flexible fields
- 📩 Email notification of every submission (via Mailgun)
- 📈 Microsoft Excel integration via Graph API
- 🧭 Central hub with links to all forms

## 🧰 Tech Stack

- Laravel (latest stable)
- Livewire + Alpine.js
- Tailwind CSS
- Filament Admin
- Docker + Laravel Sail
- Microsoft Graph API (Excel integration)
- Mailgun for email delivery

## ✅ Requirements

- PHP 8.2+
- Composer
- Docker
- Microsoft 365 account with Graph API access
- Mailgun account and API credentials

## 🚀 Getting Started

1. **Clone the project**

   ```bash
   git clone https://github.com/YOUR_USERNAME/oldtown-office.git
   cd oldtown-office
   ```

2. **Environment setup**

   ```bash
   cp .env.example .env
   ```

   Update the environment variables in `.env`:
   - `APP_URL`
   - `MAIL_MAILER=mailgun`
   - `MAILGUN_DOMAIN`, `MAILGUN_SECRET`, etc.
   - `GRAPH_CLIENT_ID`, `GRAPH_SECRET`, etc.

3. **Start development server**

   ```bash
   ./vendor/bin/sail up -d
   ./vendor/bin/sail artisan migrate
   ./vendor/bin/sail artisan db:seed
   ```

4. **Admin Access**

   Visit `/admin` to log in using the seeded credentials:
   ```
   Email: admin@example.com
   Password: password
   ```

5. **Microsoft 365 Integration**

   Follow the setup instructions in the admin panel to authenticate with Microsoft Graph and select your Excel file.

## 📦 Deployment

Deployed using [Laravel Forge](https://forge.laravel.com) and hosted on a DigitalOcean droplet.

Security best practices:
- Enforce HTTPS
- Limit access to verified staff accounts
- Schedule regular backups

## 📌 Roadmap

- [ ] Form response history viewer
- [ ] Form logic & field conditions
- [ ] Improved mobile UX
- [ ] Email confirmation to form submitters
- [ ] Export to PDF feature

## 📄 License

Licensed under the [MIT License](LICENSE).

---

> Crafted with purpose for Old Town Christian Outreach Center
