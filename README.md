# The Concierge 👷‍♂️🛠️🏨

In this project the objective is to create a CRUD using only PHP, HTML (interado), CSS and SQL queries to store and display the incidents that occurred in a hotel.
The CRUD is integrated into a table maintaining an external button to add new data. Which are: room number, incidents, area of ​​the hotel where they happen, and date.

## Project views

![image](https://github.com/user-attachments/assets/8db442f8-f41b-4081-a414-19a9a1b99476)
<p align="center"><em>Project main view</em></p>

![image](https://github.com/user-attachments/assets/260d8211-a320-45f7-bd10-ff243772a984)
<p align="center"><em>Create new incident view</em></p>


<p align="center"><em>Update incident view</em></p>


## Languages ​​and tools

- ![PHP](https://img.shields.io/badge/-PHP-777BB4?logo=php&logoColor=white)  
- ![CSS](https://img.shields.io/badge/-CSS-1572B6?logo=css3&logoColor=white)  
- ![HTML](https://img.shields.io/badge/-HTML-E34F26?logo=html5&logoColor=white)  
- ![SQL](https://img.shields.io/badge/-SQL-4479A1?logo=sqlite&logoColor=white)  

## Installation Guide    

0️⃣ The first step before doing the proyect is to design how the database is going to be structured; For this we have used [drawSQL](https://drawsql.app/), generating this table in the process that we will use as a template.

<p align="center">
  <img src="https://github.com/user-attachments/assets/fdc1adde-0160-4016-956d-7947b9f00e36" alt="Descripción de la imagen" width="100"/>
</p>

1️⃣ Once the structure is defined, we will need a database manager and a php interpreter; For this project [XAMPP](https://www.apachefriends.org/es/index.html) has been used, but it can be chosen according to the user's preferences.

2️⃣ In our database manager, we create a database called "Concierge", and then we import the following file, which will offer us a table called "problems" with the parameters seen in the image below.

<p align="center">
  <img src="https://github.com/user-attachments/assets/78ddac02-5c70-4a00-9bc4-cbc25867fd25" alt="Descripción de la imagen" width="500" height="100"/>
</p>

3️⃣ Now we must download the repository; We can download the files directly from github, or clone the repository through the terminal using this command:
`git clone https://github.com/ArianaMartinMartinez/La-conserjeria.git`


4️⃣ Once the project is installed, we must install it in the vendor root folder, using the command:
`composer install`

5️⃣ When our Apache server and our database management system are started, we can access the project using the browser url. For this project it will be:
`http://localhost/La-conserjeria/index.php`

## About us




