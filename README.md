FOR CONFIGURING SUBDOMIAN IN LARAVEL PROJECT YOU NEED TO FOLLOW THESE STEPS : 

1- FIRSTLY GO TO THE WINDOWS FOLDER IN C DRIVE WHERE YOU HAVE TO GO IN FOLLOWING PATH :  C:\Windows\System32\drivers\etc\hosts 
2- RUN HOST FILE AS AN ADMINSTRATOR AND ADD FOLLOWING COMMANDS AT THE BOTTOM 
    127.0.0.1  subdomainConcepts.test,
    127.0.0.1 *.subdomainConcepts.test

3- NOW GO TO LARAGON FOLDER AND GO IN THE FOLLOWING PATH C:laragon\bin\appache   
   HERE YOU FIND httpd-vhosts.conf THIS FILE .OPEN THIS AS AN ADMINISTRATOR IN EDITOR AND ADD A VIRTUAL HOST HERE

   
   <VirtualHost *:80> <br>
    DocumentRoot "C:/path/to/laragon/www/subdomainConcepts" <br>
    ServerName subdomainConcepts.test<br>
  </VirtualHost>
  <br>
  

4- SAVE THE FILE AND OPEN YOUR PROJECT IN CODE EDITOR . GO TO .env FILE AND SET APP_URL=http://subdomainConcepts.test

5-RESTART THE SERVER AND RUN npm run dev  AND PROJECT IS READY 

6-IF FACING ANY ISSUE CLEAR CACHE . RUN A COMMAND php:artisan optimize
