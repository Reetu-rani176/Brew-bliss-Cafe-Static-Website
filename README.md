# Brew Bliss Cafe Static Website

## Team Members & Detailed Contributions

### Student 1: Reetu Rani (Roll No: 20028176)
- **Frontend Design and Layout:**
  - Designed the overall look and feel of the website, ensuring a modern and visually appealing interface.
  - Developed the main pages including Home, Menu, About, and other informational sections.
  - Focused on user experience (UI/UX), making sure the navigation is intuitive and the site is easy to use for all visitors.
- **Styling and Responsiveness:**
  - Implemented responsive CSS to ensure the website looks great on all devices, including desktops, tablets, and smartphones.
  - Created and maintained the main stylesheet (`style.css`) for consistent branding and design across the site.
- **Initial Integration:**
  - Integrated static content and images for the first version of the site.
  - Provided the base HTML structure for dynamic features to be added by other team members.

### Student 2: Mobassherul Alam (Roll No: 20028007)
- **Backend Development for User Cart and Menu System:**
  - Developed the backend logic for the shopping cart, allowing users to add, update, and remove items from their cart.
  - Implemented user authentication for regular users (login, registration, session management).
- **Database Integration:**
  - Converted menu items from static HTML to a database-driven system using MySQL, enabling easy updates and scalability.
  - Ensured that menu and cart data are dynamically loaded and updated based on user actions.
- **User-Specific Cart Functionality:**
  - Made sure each user's cart is unique and persistent across sessions, using session variables and database relations.
  - Calculated billing totals, including GST, and displayed them on the cart page.
- **Key Files:**
  - `add_to_cart.php`, `cart.php`, `remove_cart_item.php`, `update_cart.php`, `db_connect.php`, and dynamic sections in `menu.php`.

### Student 3: Bhupendra Pratap (Roll No: 20026444)
- **Admin Panel Development:**
  - Designed and implemented the admin authentication system, allowing secure login for administrators.
  - Built the admin dashboard for managing menu items, including features to add, edit, delete, and update prices and images for menu items.
  - Ensured that all admin actions are secure and user-friendly, with proper error handling and feedback.
- **Contact Page Functionality:**
  - Developed the contact form, enabling users to send messages directly from the website.
  - Implemented backend logic to store contact messages in the database and handle errors gracefully.
  - Ensured that the contact page is robust, secure, and provides clear feedback to users upon submission.
- **SEO Optimization:**
  - Implemented professional SEO best practices across all major pages, including unique and descriptive `<title>` tags, meta descriptions, meta keywords, and author tags.
  - Ensured all images have descriptive `alt` attributes for accessibility and search engine indexing.
  - Enhanced the website's visibility and ranking potential on search engines by following modern SEO guidelines.
  - Created and implemented comprehensive SEO strategy including:
    - Advanced meta tags with Open Graph protocol for better social media sharing
    - Canonical URLs to prevent duplicate content issues
    - XML sitemap for improved search engine indexing
    - Robots.txt file for proper crawler guidance
    - Enhanced keyword research and implementation
    - Structured data for better search result presentation
    - Mobile-friendly meta viewport optimization
    - Semantic HTML structure for better content understanding
  - Implemented technical SEO improvements:
    - Created sitemap.xml with proper priority and change frequency
    - Protected sensitive directories and files via robots.txt
    - Added proper URL structure and canonical links
    - Enhanced page titles and meta descriptions for better CTR
    - Implemented proper heading hierarchy
- **Hosting and Deployment:**
  - Responsible for deploying the website to a live server or local environment (e.g., XAMPP/htdocs).
  - Managed all hosting-related tasks, including database setup, configuration, and troubleshooting.
- **Key Admin/Contact/SEO Files:**
  - `admin/login.php`, `admin/dashboard.php`, `admin/add_menu_item.php`, `admin/edit_menu_item.php`, `contact.php`, all main page PHP/HTML files, and related SQL/database scripts.

---

## Project Overview
Brew Bliss Cafe is a static website enhanced with dynamic features for menu management, user cart, admin controls, and a contact form. The project is built using PHP for backend logic, MySQL for database management, and HTML, CSS, and JavaScript for the frontend. The site is designed to be user-friendly, visually appealing, and easy to maintain.

---

## How to Run
1. **Clone or download the project** to your local server directory (e.g., `XAMPP/htdocs`).
2. **Import the provided SQL files** (such as `create_database.sql`, `create_admin_table.sql`) into your MySQL database to set up all required tables and default data.
3. **Update `config.php`** with your database credentials if needed (host, username, password, database name).
4. **Start your local server** (e.g., Apache via XAMPP) and access the site at:  
   `http://localhost/Brew-bliss-Cafe-Static-Website/`

---

## Admin Login
- **Username:** `admin`
- **Password:** `admin123`
- The admin panel allows full management of menu items and viewing of contact messages.

---

## Contact
For any issues, feedback, or support, please use the contact form on the website. Messages will be stored securely and reviewed by the admin team. Alternatively, you may reach out to the team members directly.

---

## Technologies Used
- **Frontend:** HTML5, CSS3, JavaScript, PHP
- **Backend:** PHP
- **Database:** MySQL
- **Version Control:** Git

---

## Acknowledgments
- All images and content are for educational/demo purposes only.
- Special thanks to all team members for their hard work and collaboration. 