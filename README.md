
# Old Town Church Office Portal

This Laravel-based project is a secure internal portal for Old Town Christian Outreach Center staff. It enables easy access to custom forms, each designed to collect and route important data directly to both an internal email address and a Microsoft 365 Excel spreadsheet.

## Features

- 🔐 Password-protected internal site
- 📋 Admin dashboard to manage all form pages
- 📄 Easy form builder: create, edit, and organize form pages
- 📧 Email submissions to staff inbox
- 📊 Submit data to Microsoft 365 Excel (via Graph API)
- 🧭 Main page with dynamic links to all available forms

## Tech Stack

- **Laravel** (latest stable)
- **Livewire** + **Alpine.js** for reactive UI
- **Tailwind CSS** for styling
- **Filament** for the admin panel
- **Docker + Laravel Sail** for local development
- **Microsoft Graph API** for Excel integration
- **SMTP** for email submission

## Requirements

- PHP 8.2+
- Composer
- Docker
- Microsoft 365 account with Graph API permissions
- Mail server credentials (SMTP)

## Setup Instructions

1. **Clone the repository**

   ```bash
   git clone https://github.com/YOUR_USERNAME/oldtown-office.git
   cd oldtown-office
   ```

2. **Copy the example environment file and update settings**

   ```bash
   cp .env.example .env
   ```

   Update the following in `.env`:
   - `APP_URL`
   - `MAIL_*` (SMTP settings)
   - `GRAPH_CLIENT_ID`, `GRAPH_SECRET`, etc. (Microsoft 365 credentials)

3. **Start the app using Laravel Sail**

   ```bash
   ./vendor/bin/sail up -d
   ./vendor/bin/sail artisan migrate
   ./vendor/bin/sail artisan db:seed
   ```

4. **Log in to the admin panel**

   Visit `/admin` and log in using seeded credentials:
   ```
   Email: admin@example.com
   Password: password
   ```

5. **Connect to Microsoft Graph**

   Follow the in-app guide under "Settings" in the admin panel to connect your Microsoft 365 account.

## Deployment

This project is deployed using [Laravel Forge](https://forge.laravel.com) on a DigitalOcean droplet. For optimal security:

- Use HTTPS
- Restrict access to authenticated staff
- Regularly back up database and Excel files

## Roadmap

- [ ] Add submission history tracking
- [ ] Enable conditional logic in forms
- [ ] Mobile-first UI improvements
- [ ] Submission confirmation emails to users
- [ ] PDF export of submitted data

## License

This project is licensed under the [MIT License](LICENSE).

---

> Built with ❤️ for Old Town Christian Outreach Center
