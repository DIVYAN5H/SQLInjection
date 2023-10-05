To showcase SQL injection, enter the following in the username and password fields:

Username: ' OR '1'='1
Password: ' OR '1'='1

This input will trick the vulnerable SQL query into retrieving all user records because the condition '1'='1' always evaluates to true.