# Leave-Application-Management-System
There are three types of users; admin, staff, and manager. In this system, an employee has to apply for a leave by filling up a form in the system, 
and an employer has to approve/reject the application. Let’s say you are the admin who manages the website and the database of the system. You have
already set up the database with the information on all users involved, including their username, password and user level. Below is the example of 
system flow: 

i) All users should log-in to use the system using the username and password you have given them,
incorrect log-in will be rejected - user verification (using session)

ii) Admin can add new user, and edit and delete any information on current users. Managers
and Staff can only edit their own information on their profile page (editable information
should not include the Identification ID) – user level (using session) and data
manipulation (using insert, update, delete)

iii) Staff can apply for a leave, by filling up necessary information in a form, and submit the
form for approval - data manipulation (insert, update, delete)

iv) Manager can view application and give approval or reject the application - data
manipulation (using insert, update, delete)

v) Staff can view the result of their application

vi) Manager can view a sorted report (e.g. alphabetically) on all leave taken by each of the
staff, while a staff can only view a report on all leave taken by him/her - user level (using
session), view data (using sorting & searching)

vii) Admin can view all pages, while Managers and Staff can view limited pages (for
example, only Admin can add new user, thus this page is only accessible to Admin) –
user level (using session)

Below are added criteria that are expected in the developed system :
a.Able to implement the usage of Session
b.Able to demonstrate the benefit of using Cookie
c.Able to perform user input validationd.Able to demonstrate dynamic HTML through JavaScript (DOM)
e.Clean, consistent and attractive presentation (good use of HTML + CSS)