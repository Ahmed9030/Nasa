# 🌍 Climate Change Interactive Map

![Climate Impact Banner](https://images.unsplash.com/photo-1611273426721-c21d65451991?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80)

<div align="center">

[![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)](https://tailwindcss.com)
[![Vite](https://img.shields.io/badge/Vite-646CFF?style=for-the-badge&logo=vite&logoColor=white)](https://vitejs.dev)
[![License](https://img.shields.io/badge/license-MIT-blue?style=flat-square)](LICENSE)

**An interactive platform for visualizing climate change impacts globally, based on curated scientific research.**

[View Live Demo](https://your-demo-link.com) · [Report Bug](https://github.com/Ahmed9030/Nasa/issues) · [Request Feature](https://github.com/Ahmed9030/Nasa/issues)

</div>

---

## 📖 Table of Contents
- [Introduction](#-introduction)
- [Features](#-features)
- [Data & Methodology](#-data--methodology)
- [Requirements](#-requirements)
- [Installation](#-installation)
- [Usage](#-usage)
- [Configuration](#-configuration)
- [Contributing](#-contributing)
- [License](#-license)

---

## 🌌 Introduction

The **Climate Change Map** project is a sophisticated web application designed to raise awareness about global environmental crises. Unlike traditional apps that rely on automated APIs, this platform utilizes a custom-built dataset derived from **in-depth scientific papers and climate research**.

The application features an interactive world map where affected regions are highlighted with **red circular indicators**. The size and density of these indicators represent the severity of climate impact. Users can interact with these points to view summaries and access detailed articles regarding the specific environmental status of each region.

---

## ✨ Features

- 🗺️ **Interactive Global Map:** A seamless visual experience for exploring climate hotspots worldwide.
- 🔴 **Visual Indicators:** Dynamic red circles that visually quantify the scale of environmental impact.
- 📄 **Deep-Dive Details:** Clicking a hotspot reveals a concise summary and a direct link to comprehensive research pages.
- 🎨 **Modern UI/UX:** Built with **Tailwind CSS** for a clean, responsive, and mobile-friendly interface.
- ⚡ **High Performance:** Powered by **Vite** for ultra-fast asset loading and real-time interactions.
- 🔍 **Data-Driven:** Every data point is backed by processed scientific research.

---

## 📚 Data & Methodology

This project stands out by its unique approach to data:
1.  **Manual Processing:** We collect raw data from scientific journals and climate reports.
2.  **Analysis:** Complex environmental data is simplified into coordinate-based mapping points.
3.  **Accuracy:** Each point on the map is cross-referenced with verified research papers rather than generic API feeds.

---

## 🛠 Requirements

To run this project locally, ensure you have the following installed:

* **PHP** (v8.1 or higher)
* **Composer** (PHP Package Manager)
* **Node.js** & **NPM** (v18.x or higher recommended)
* **Database:** MySQL, PostgreSQL, or SQLite

---

## ⚙️ Installation

Follow these steps to set up the project on your local machine:

1.  **Clone the Repository:**
    ```bash
    git clone [https://github.com/Ahmed9030/Nasa.git](https://github.com/Ahmed9030/Nasa.git)
    cd Nasa
    ```

2.  **Install Backend Dependencies:**
    ```bash
    composer install
    ```

3.  **Install Frontend Dependencies:**
    ```bash
    npm install
    ```

4.  **Environment Setup:**
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
    *Note: Configure your database credentials in the `.env` file.*

5.  **Run Migrations (if applicable):**
    ```bash
    php artisan migrate
    ```

---

## 🚀 Usage

To start the application, you need to run both the Laravel server and the Vite development server:

**Step 1: Start the Laravel Server**
```bash
php artisan serve
```

**Step 2: Start Vite Dev Server** (In a new terminal)
```bash
npm run dev
```
The application will be accessible at http://localhost:8000.

---

## 🔧 Configuration
The project uses Vite for asset bundling. If you are deploying to production, make sure to run the build command:

```bash
npm run build
```
The configuration for Tailwind CSS and Autoprefixer can be found in tailwind.config.js and postcss.config.js.

---

## 🤝 Contributing
Contributions are what make the open-source community such an amazing place to learn, inspire, and create.

Fork the Project.

1. Create your Feature Branch (git checkout -b feature/AmazingFeature).
2. Commit your Changes (git commit -m 'Add some AmazingFeature').
3. Push to the Branch (git push origin feature/AmazingFeature).
4. Open a Pull Request.

---

<div align="center">

Developed with ❤️ for a Greener Planet by Ahmed9030

</div>
