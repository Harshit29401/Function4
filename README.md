# WordPress Webpage with Divi Builder

This project features a WordPress webpage designed using the Divi Builder. The child theme includes custom styles and functionality for a visually appealing and functional website.

## **Overview**

The project uses the Divi Builder to design a WordPress webpage. A custom child theme is utilized for additional styling and customization. The provided SQL file sets up the database schema for the site.

## **Screenshots**

### Desktop View

![Desktop View](Desktop%20View%20Function4.png)

### Mobile View

![Mobile View](Mobile%20View%20Function4.png)

## **Folder Structure**

- **`wp-content/themes/Divi_Child/`**: The child theme folder for Divi.
  - **`style.css`**: Main stylesheet for the child theme.
  - **`functions.php`**: Contains custom functions and hooks for the child theme.
  - **`template/`**: Contains custom template files.
    - **`template-news.php`**: Custom template for displaying news or blog posts.

## **Database Schema**

- **`function4.sql`**: SQL file for setting up the database schema for the webpage. This file includes the necessary tables and initial data for the site.

## **How It Works**

1. **Divi Builder**:
   - The Divi Builder is used to design the webpage layout and content. The visual builder allows for drag-and-drop customization of page elements.

2. **Custom Theme**:
   - The `Divi_Child` theme extends the functionality of the Divi theme with custom styles and a specific page template (`template-news.php`) for content display.

3. **Database Setup**:
   - Import the `function4.sql` file into your WordPress database to set up the necessary schema and data.

4. **Theme Installation**:
   - Install and activate the `Divi_Child` theme from the WordPress admin dashboard.

5. **Access the Webpage**:
   - Visit your WordPress site to see the custom webpage designed with Divi Builder.

## **Getting Started**

To set up the WordPress webpage:

1. **Clone the Repository**:
   ```sh
   git clone https://github.com/yourusername/divi-builder-webpage.git
