# CST352 Class Project
Participants: Cody Wall, Leann Aboudiab, Herman Lippert, and Joshua Coon.

Live site: http://itcd4.csumb.edu/~cwall/final/CST352TeamProject/frontpage.php

## User Stories
### Visitors
As a student, I need to see which courses satisfy which Major Learning Outcomes, so I can stay on track. I log in to the MLO tracker and am able to view all MLOs and which courses fulfill their requirements. I am also able to filter the classes by units so I can see which classes fit into my schedule.

### Admin
As an admin, I need to be able to modify which courses satisfy the various MLOs. I am able click the login button to log in using my admin username and password. Once the database is checked to make sure I am verified, I am taken to the admin dashboard. There I can view all courses and information regarding them.

From there, I can add new classes to the database or edit existing classes. I specify which MLO this class satisfies. I can also delete existing classes from the database, once I confirm that I would like to delete it. When I am done making changes, I log out and am brought back to the homepage. I am now unable to view the admin dashboard unless I log back in.

## Database
### Description
Our SQL database is comprised of three tables: classes, mlos, and users.
The ‘classes’ table stores information pertaining to each class listed in our MLOs section. This table can be edited and updated by the admin user.

The ‘mlos’ table is strictly maintained by the database administrators (not the website admin user). The information in the ‘mlos’ table is fairly static, yet it may be changed once every few years as the Major Learning Outcomes for the School of Computing Design may change. Because of this, we have configured our site to dynamically load the MLOs before loading the classes associated with the MLOs.

Lastly, the ‘users’ table is used to store our admin user’s username and password. When logging in to the admin dashboard, the users table is referenced each time a login attempt occurs in order to authenticate the user. This functionality can be expanded upon in the future.

Google drive
https://drive.google.com/drive/u/1/folders/0AAqPDqcpuPYBUk9PVA

Bulma documentaion
https://bulma.io/documentation/

Bulma cheatsheet
https://devhints.io/bulma

SQL cheatsheet
https://devhints.io/mysql
