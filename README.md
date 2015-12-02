# pemilukmteti

In 2014, KMTETI did electronic vote (paperless voting) for the first time. Because of connectivity issue, KMTETI did not use online vote. The electronic vote was offline. We were using 6 laptops in 2 places (JTETI and PAU). We obtained the voting result by summing up the votes in those 6 laptops. 

This is source code of the software that was used in that moment. This code was using PHP language with Laravel framework. This code still contains some bugs and security issues. Also, this code is a mess. I'm planning to make a general e-vote software.

How to use:
- Install composer
- Clone this project
- Go to project directory
- Go to directory protected/
- Type 'composer install'
- While waiting, make database e.g. 'pemilukmteti'
- Import the pemilukmteti.sql to the database
- Change the database configuration (database name, username, password, collation) in protected/app/config/database.php
- Go to project directory, change the permission of protected/app/storage 'chmod -R 777 protected/app/storage/'
- Open with web browser, enter 'pemilukmteti2015'

Contributors:
[dwiajik](https://github.com/dwiajik)
[rezaarkan](https://github.com/rezaarkan)
