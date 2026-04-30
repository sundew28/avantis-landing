# Avantis Landing Theme (WordPress + Vite)

## Overview

This project is a custom-built WordPress landing page theme developed for an educational platform concept. It focuses on modern frontend architecture, modular PHP structure, and plugin-free functionality where possible.

The theme demonstrates:

- WordPress theme development best practices  
- Modular template architecture using `get_template_part()`  
- Custom Post Type implementation (Testimonials)  
- Native WordPress form handling (plugin-free contact form)  
- SCSS-based styling architecture  
- Vite-based asset bundling and build pipeline  
- Vanilla JavaScript interactions  

---

## Features

### Frontend

- Responsive landing page layout  
- Hero section with CTA and analytics-style UI card  
- Feature grid section  
- About section powered by WordPress editor content  
- Testimonials section using Custom Post Type  
- Contact form with validation and success/error states  
- Footer with navigation and branding  

---

### Backend (WordPress)

- Custom Post Type: Testimonials  
- WP_Query-based dynamic rendering  
- Native WordPress form submission handling via `admin-post.php`  
- Nonce verification for security  
- Sanitization and validation of user input  

---

### Build System

- Vite for asset bundling  
- SCSS compilation  
- JavaScript module bundling  
- Optimised production build workflow  

---

## Prerequisites

Ensure you have the following installed:

- PHP >= 8.0  
- MySQL / MariaDB  
- WordPress installation  
- Node.js >= 16  
- npm or yarn  
- Local development environment (e.g. WAMP, XAMPP, Local by Flywheel)  

---

## Installation

### 1. Clone or copy theme

Place the theme folder inside:

---

### 2. Install dependencies

Navigate to the theme folder:

```bash
cd wp-content/themes/avantis-landing
```

Install node dependencies

```bash
npm install
```

### 3. Development build

To start development mode:

```bash
npm run dev
```

### 4. Production build

To generate production assets:
```bash
npm run build
```

## WordPress Setup

### 1. Activate Theme

Go to:

```bash
Appearance → Themes
```

Activate:

```bash
Avantis Landing
```

### 2. Set Homepage

Go to:

```bash
Settings → Reading
```

Set:
```bash
Homepage: Home → static page
```

## 3. Create Content

### Testimonials

Go to:

```bash
Testimonials → Add New
```

Create sample testimonials:

Title = Author Name
Content = Testimonial text

### Home Page Content
Edit the Home page and add content for the About section using the WordPress editor.

## 4. Contact Form

The contact form is handled via:

```bash
	admin-post.php
	Action hook: avantis_contact_form
	Nonce verification for security
```

Flow:

```bash
User submits form
Data sent to WordPress handler
Input sanitised and validated
Redirect back with success/error status
```

## Project Structure

```bash
avantis-landing/
│
├── inc/
│   ├── setup.php
│   ├── enqueue.php
│   ├── custom-post-types.php
│   ├── form-handler.php
│
├── template-parts/
│   ├── hero.php
│   ├── features.php
│   ├── about.php
│   ├── testimonials.php
│   ├── contact.php
│   ├── footer-content.php
│
├── src/
│   ├── js/
│   ├── scss/
│
├── functions.php
├── front-page.php
├── footer.php
├── header.php
```

### Key Technical Highlights

## Custom Post Type

Used for testimonials to separate structured content from blog posts.

## WP_Query

Used to dynamically retrieve testimonial entries.

## Form Handling

Uses WordPress native admin_post hooks instead of plugins.

## SCSS Architecture

Organised into:

```bash
base/
layout/
sections/
abstracts/
```

## JavaScript

```bash
Mobile navigation toggle
Sticky header behaviour
Smooth anchor scrolling
```

## Security Considerations

```bash
Nonce verification on form submission
Input sanitization using WordPress functions
Email validation using is_email()
```

## Notes

This project intentionally avoids plugins to demonstrate:

```bash
Core WordPress capability
Manual implementation of common features
Clean separation of concerns
Frontend and backend integration skills
```

### Author

Developed as a technical assessment project demonstrating WordPress theme development, frontend architecture, and plugin-free functionality implementation.