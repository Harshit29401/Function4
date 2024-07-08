# Divi Builder WordPress Webpage

This project is a WordPress webpage designed using the Divi Builder. It features a custom child theme and a database schema for setting up the site's content and structure.

## **Overview**

This project uses the Divi Builder for designing the webpage and includes a custom child theme to extend the Divi theme with additional functionality and styles.

## **Features**

- **Divi Builder**: A powerful page builder for designing and customizing WordPress pages.
- **Custom Child Theme**: A child theme created to customize the Divi theme without altering the core theme files.
- **Responsive Design**: The webpage is designed to be responsive and user-friendly on both desktop and mobile devices.

## **Screenshots**

### Desktop View

![Desktop View](Desktop%20View%20Function4.png)

### Mobile View

![Mobile View](Function4_Mobile_View.png)

## **Folder Structure**

- **`wp-content/themes/Divi_Child/`**: The child theme folder for Divi.
  - **`functions.php`**: Contains additional PHP functions and custom code for the child theme.
  - **`style.css`**: Main stylesheet for the child theme.
  - **`template/`**: Contains custom page templates for different page designs.
    - **`template-news.php`**: Custom page template used for displaying news posts.
  - **`images/`**: Folder for storing image assets used in the child theme.
  - **`custom-css/`**: Contains custom CSS files for additional styling.
    - **`custom-style.css`**: Custom CSS file for additional styles.

- **`function4.sql`**: SQL file for setting up the database schema and structure for the webpage.

## **How It Works**

1. **Child Theme Customization**:
   - The `Divi_Child` theme extends the functionality of the Divi theme.
   - `functions.php` includes custom functions and features.
   - `style.css` contains custom styles for the webpage.

2. **Custom Template**:
   - `template-news.php` is a custom page template for displaying news posts or other content types.

3. **Responsive Design**:
   - The webpage is designed to be responsive using Divi Builder's built-in features and additional custom CSS in `custom-style.css`.

4. **Database Schema**:
   - Import the `function4.sql` file into your MySQL database to set up the necessary tables and data structure.

## **Getting Started**

To set up the Divi Builder WordPress Webpage:

1. **Clone the Repository**:
   ```sh
   git clone https://github.com/yourusername/divi-builder-webpage.git
