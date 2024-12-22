# Student Management System
![image](https://github.com/user-attachments/assets/63f29bc3-340d-40b5-9224-e09402818945)

A responsive web-based application for managing student details, built using HTML, CSS, PHP, and MySQL.

---

## Table of Contents
- [Overview](#overview)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Setup Instructions](#setup-instructions)
- [Usage](#usage)
- [Responsiveness](#responsiveness)
- [yet to come](#yet-to-come)
- [Future Enhancements](#future-enhancements)

---

## Overview

The **Student Management System** allows users to view student information based on class and roll number. The project supports basic CRUD operations (Create, Read, Update, Delete) and is styled for an enhanced user experience with responsive design principles.where the focus revolves around retrieving th information from sql datbase using backend scripting language :PHP 

---

## Features

- User-friendly interface.
- Displays all student information or specific student details by roll number and standard.
- Navigation bar with links for Admin and Staff logins.
- Smooth scroll animations for a visually engaging user experience.
- Responsive design suitable for various devices.

  ![image](https://github.com/user-attachments/assets/d66346d9-6b47-4b5d-bcbf-78af83bc1d16)

  ![image](https://github.com/user-attachments/assets/ae14a38d-5af0-4517-bee0-5e74b628cc03)

  ![image](https://github.com/user-attachments/assets/cf99603f-f1cd-4d41-af5a-7a57b24b93f8)




---

## Technologies Used

- **Frontend**: HTML5, CSS3, JavaScript
- **Backend**: PHP
- **Database**: MySQL

---

## Setup Instructions


1. Navigate to the htdocs directory of xampp folder and clone the repositry:
   ```bash
    git clone https://github.com/anisha00207/Student_details_Management.git
   ```   

2. Navigate to the project directory:
   ```bash
   cd student-management-system
   ```

3. create the database in php my admin and create three tables named admin, student, staff. in admin and staff tables by default add some members

4. Set up the database:
    - Update the `dblink.php` file with your database credentials.

5. Start a local PHP server with the help of Apache or any other web server:
   ```bash
   php -S localhost:8000
   ```

6. Open the application in your browser:
   ```
   http://localhost:8000
   ```
---


## Usage

1. **View All Student Details**:
   - Click the `Show All` button to display all student records.

2. **View Specific Student Details**:
   - Select a standard from the dropdown menu.
   - Enter a roll number.
   - Click `Show Info` to retrieve details for the selected student.

3. **Navigation**:
   - Use the navigation bar to access the Admin and Staff login pages or the About page.

4. **operations**:
   - login to the Admin site to update, add , delete data.
   -  - login to the staff site to update, add , delete data of a specific class.
  

---

## Responsiveness

The project uses responsive design to ensure compatibility with various devices:

- **CSS Media Queries** are applied for adapting layouts to different screen sizes.
- Components such as buttons and dropdowns scale appropriately on mobile and tablet devices.

---

## yet to come
- Admin can insert, update, delete staff data too.
- Attendence management
- A homepage with detailed instructions about the website

## Future Enhancements

- Add functionality for student data insertion, updates, and deletion.
- Enhance UI with a modern CSS framework like Bootstrap or Tailwind.
- Add a dashboard for graphical insights into student performance.
- Include a search feature with advanced filters.

---

## License

This project is licensed under the [MIT License](LICENSE).

---

## Author

Developed by https://github.com/anisha00207.
