FOR CONFIGURING SUBDOMIAN IN LARAVEL PROJECT YOU NEED TO FOLLOW THESE STEPS : <br>

1- FIRSTLY GO TO THE WINDOWS FOLDER IN C DRIVE WHERE YOU HAVE TO GO IN FOLLOWING PATH : <br>  C:\Windows\System32\drivers\etc\hosts <br>
2- RUN HOST FILE AS AN ADMINSTRATOR AND ADD FOLLOWING COMMANDS AT THE BOTTOM  <br>
    127.0.0.1  subdomainConcepts.test,<br>
    127.0.0.1 *.subdomainConcepts.test <br>

3- NOW GO TO LARAGON FOLDER AND GO IN THE FOLLOWING PATH C:laragon\bin\appache   <br>
   HERE YOU FIND httpd-vhosts.conf THIS FILE .OPEN THIS AS AN ADMINISTRATOR IN EDITOR AND ADD A VIRTUAL HOST HERE <br>

   
   <VirtualHost *:80> <br>
    DocumentRoot "C:/path/to/laragon/www/subdomainConcepts" <br>
    ServerName subdomainConcepts.test<br>
  </VirtualHost>
  <br>
  

4- SAVE THE FILE AND OPEN YOUR PROJECT IN CODE EDITOR . GO TO .env FILE AND SET APP_URL=http://subdomainConcepts.test
<br>
5-RESTART THE SERVER AND RUN npm run dev  AND PROJECT IS READY 
<br>
6-IF FACING ANY ISSUE CLEAR CACHE . RUN A COMMAND php:artisan optimize
