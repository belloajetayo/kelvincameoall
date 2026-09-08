# Kelvin Cameo Organization — WordPress & InstaWP Deployment Guide

This guide explains how to deploy the **Kelvin Cameo Organization (RC: 1613032)** theme to WordPress using **InstaWP** (100% free) and enable **WP Pusher** (automated Git push-to-deploy) with full **Rank Math / Yoast SEO** structured data.

---

## 1. Push New WordPress Theme Files to GitHub

From your terminal or VS Code in `C:\Users\HP\kelvin-cameo-organization\`:

```bash
git add .
git commit -m "feat: add WordPress theme, templates, SEO schema, and WP Pusher support"
git push origin main
```

Once pushed, your GitHub repository ([`belloajetayo/kelvincameoall`](https://github.com/belloajetayo/kelvincameoall)) is fully equipped as a standard WordPress theme!

---

## 2. Launch a 100% Free Sandbox on InstaWP

1. Visit **[instawp.com](https://instawp.com)** and create a free account (no credit card required).
2. On your InstaWP dashboard, click **"Add Site"**.
3. Choose the default WordPress configuration and click **"Create Site"**.
4. In under 5 seconds, your site is generated. Click **"Magic Login"** to jump straight into your WordPress Admin (`/wp-admin`).

---

## 3. Option A: Auto-Deploy via WP Pusher (Recommended)

With WP Pusher, every time you `git push origin main`, WordPress updates itself in seconds without any manual file uploads!

### Step 1: Install WP Pusher Plugin
1. Download the free WP Pusher plugin zip from **[wppusher.com](https://wppusher.com)**.
2. In your WordPress Admin, go to **Plugins → Add New → Upload Plugin**.
3. Choose the downloaded `wppusher.zip` and click **Install Now** → **Activate**.

### Step 2: Install Your Theme
1. In the WordPress admin sidebar, click **WP Pusher → Install Theme**.
2. Fill in:
   - **Theme repository:** `belloajetayo/kelvincameoall`
   - **Repository branch:** `main`
   - **Push-to-Deploy:** Check this box (✓).
3. Click **Install Theme**.
4. Once installed, go to **Appearance → Themes** and click **Activate** on **Kelvin Cameo Organization**.

### Step 3: Enable the GitHub Webhook (Auto-Sync on Git Push)
1. In WordPress Admin, go to **WP Pusher → Themes**.
2. Look at the **Push-to-Deploy** column next to Kelvin Cameo and copy the unique **Webhook URL**.
3. Open your GitHub repository on the web:
   - Go to: `https://github.com/belloajetayo/kelvincameoall/settings/hooks`
   - Click **Add webhook**.
   - **Payload URL:** Paste the Webhook URL from WP Pusher.
   - **Content type:** Select `application/json`.
   - Click **Add webhook**.
4. **Done!** Whenever you make updates and run `git push origin main`, your WordPress site will instantly pull the changes automatically!

---

## 4. Option B: 1-Click Manual Zip Upload (Alternative)

If you prefer uploading a ZIP file without using Git:
1. Double-click **`create-theme-zip.bat`** in your project folder.
2. A `kelvin-cameo-theme.zip` will be generated in 1 second.
3. In WordPress Admin, go to **Appearance → Themes → Add New → Upload Theme**.
4. Choose `kelvin-cameo-theme.zip` and click **Install Now** → **Activate**.

---

## 5. Setting Up Pages & Permalinks in WordPress

To ensure WordPress cleanly connects each template:

### Step 1: Set Clean Permalinks
- In WordPress Admin, go to **Settings → Permalinks**.
- Select **Post name** (`/%postname%/`) and click **Save Changes**.

### Step 2: Create Core Pages
Go to **Pages → Add New** and create these pages (assign the corresponding **Template** in the Page Attributes sidebar):

| Page Title | URL Slug | Template Name |
| :--- | :--- | :--- |
| **Home** | `/` | *(Default / Front page handled automatically)* |
| **Energy & Fuel** | `energy` | **Energy & Fuel** |
| **Real Estate** | `real-estate` | **Real Estate & Infrastructure** |
| **Agriculture** | `agriculture` | **Agriculture & Agro-Allied** |
| **Resort Hotel** | `hospitality` | **Hospitality & Resort Hotel** |
| **About Us** | `about` | **Corporate Heritage & About** |
| **Contact** | `contact` | **Contact & Headquarters** |

### Step 3: Set Front Page
- Go to **Settings → Reading**.
- Under **Your homepage displays**, choose **A static page**.
- Select **Homepage: Home** and click **Save Changes**.

---

## 6. Supercharging SEO (Rank Math / Yoast)

Our theme comes with built-in **JSON-LD Structured Data Schema**:
- **Organization Schema:** Kelvin Cameo Organization (RC: 1613032, email `kelvincameo73@gmail.com`, phone `+234 805 555 8197`, Suleja HQ).
- **LodgingBusiness Schema:** On the Resort Hotel page (`/hospitality/`), giving Google searchers immediate rich snippets with room tariffs (₦25,000–₦180,000), amenities, and 1,000-guest banquet hall data.
- **FAQPage Schema:** Real-talk guarantees and frequently asked questions for Google rich snippet accordion displays.

### Free Recommended Plugin:
1. In WP Admin, go to **Plugins → Add New** and search for **Rank Math SEO**.
2. Install and activate it.
3. Run the quick setup wizard:
   - Rank Math will automatically connect Google Search Console and sitemaps.
   - Our theme's schema and Rank Math work hand-in-hand without conflicts.
