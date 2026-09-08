# Kelvin Cameo (RC: 1613032) — Project Knowledge & Agent Guidelines

## 1. Corporate Identity & Registration
- **Entity Name:** Kelvin Cameo
- **CAC Registration:** RC: 1613032 (Corporate Affairs Commission, Federal Republic of Nigeria)
- **Headquarters:** Kelvin Cameo Resort Hotel Complex, Suleja, Niger State (Abuja Capital Corridor), Nigeria
- **Corporate Line & WhatsApp:** +234 805 555 8197 ([Chat on WhatsApp](https://wa.me/2348055558197))
- **Official Contact Email:** `kelvincameo73@gmail.com`
- **GitHub Repository:** `https://github.com/belloajetayo/kelvincameoall` (Branch: `main`)

---

## 2. Visual Identity & Design System
- **Color Palette (Strict Rule):**
  - Do **NOT** use gloomy dark navy or dark blue as the primary theme.
  - Primary Theme: Modern, vibrant **Sky Blue** (`#0284c7`, `#0ea5e9`, `#38bdf8`, `#e0f2fe`, `#f0f9ff`).
  - Accent Colors: Solar Gold (`#f59e0b`), Energy Orange (`#f25c05`), and Agro Emerald (`#10b981`).
  - Backgrounds: Crisp clean whites (`#ffffff`), soft slate tints (`#f8fafc`, `#f1f5f9`), and ambient radial Sky Blue mesh gradients on page heros.
- **Brand Logo & Mark (Strict Rule):**
  - Avoid fragile external SVG image files with complex drop-shadow filters (which fail to render in certain browser engines).
  - Use the self-contained, inline SVG **Brand Emblem Badge** (`.brand-emblem-badge`): a rounded gradient square with solar gold orbital ring, "KC" monogram vectors, and clean typography.
  - The standalone asset [`assets/logo.svg`](assets/logo.svg) is maintained as a clean, lightweight vector file without complex SVG filters.

---

## 3. Brand Voice & Copywriting
- **Conversational "Real-Talk" Tone:**
  - Write like a charismatic, trustworthy, real Nigerian business leader—direct, warm, authentic, and clear.
  - Avoid cold, stiff bureaucratic jargon (e.g. avoid *"downstream calibration modalities"*; say *"our pumps give you 10 Litres when you pay for 10 Litres"*).
- **Core Non-Negotiable Guarantees:**
  - ⛽ **Energy:** "10 Litres = 10 Litres" — certified digital meters, zero pump tampering.
  - 🏡 **Real Estate:** "Zero Omonile Drama" — verifiable C of O / Gazette titles you can search before paying.
  - 🏨 **Hospitality:** "The Light Never Goes Out" — guaranteed 24/7 power & freezing cold AC backed by dual heavy-duty generators and solar microgrids.
  - 🌾 **Agriculture:** "Straight From the Soil" — farm-fresh eggs from 50,000 layers and grains from 10,000 MT silos with no greedy middlemen.

---

## 4. The 4 Operating Divisions
1. **Kelvin Cameo Energy (`energy.html`):**
   - Downstream petroleum retail filling stations (PMS, AGO Diesel, DPK).
   - 50-tonne automated LPG cooking gas refilling plants.
   - Solar microgrids, industrial backup systems, and filling station franchising.
2. **Kelvin Cameo Real Estate (`real-estate.html`):**
   - Gated smart residential communities along the Abuja-Suleja corridor (Cameo Imperial Crest, Royal Haven).
   - Commercial highway parcels for filling stations, transit hubs, and logistics warehouses.
   - High-yield land banking with registered Certificate of Occupancy (C of O) & Gazette titles.
3. **Kelvin Cameo Agriculture (`agriculture.html`):**
   - 2,500+ hectares mechanized grain plantations (maize, soybean, cassava).
   - Automated commercial poultry battery complexes (50,000+ layer birds producing fresh eggs daily).
   - Disease-screened beef cattle and livestock ranches.
   - 10,000 MT capacity grain storage silos and 1,500+ smallholder outgrower scheme.
4. **Kelvin Cameo Resort Hotel (`hospitality.html`):**
   - Located in Suleja, Niger State (20 mins from Abuja FCT border).
   - 2 Operational Branches: Main Hotel & The Annex.
   - 10 Authentic room tiers from ₦25,000 to ₦180,000/night with Paystack checkout integration.
   - 1,000-Seat Grand Banquet Hall (₦1.05M weekend / ₦850k weekday) with full industrial AC, 2 VIP suites, generator standby, and 150+ guarded car park.
   - Amenities: Swimming pool (₦3,000 access for non-guests), snooker lounge, fine dining, 24/7 electricity guarantee.

---

## 5. Strategic Partners
- **CCCRN Nigeria** (Centre for Clinical Care & Clinical Research Nigeria): Healthcare, conference retreats, medical symposia partner.
- **IMKash Group**: Enterprise conglomerate & capital alliance partner.
- **NMDPRA**: Nigerian Midstream and Downstream Petroleum Regulatory Authority.
- **REDAN**: Real Estate Developers Association of Nigeria.
- **Bank of Agriculture (BOA)**: National agribusiness credit & off-take partner.

---

## 6. Development & Tooling Constraints
- **Platform:** Windows environment.
- **Shell Execution Rule:** Do **NOT** propose or execute interactive PowerShell commands via `run_command` as terminal processes may hang indefinitely.
- **File Management:** Always use direct file tools (`view_file`, `replace_file_content`, `write_to_file`, `grep_search`, `find_by_name`).
