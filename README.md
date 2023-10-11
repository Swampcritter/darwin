# DARWIN
Data Asset Resource Web Interface (DARWIN)

Author: Michael Worsham (maworsham -at- gmail.com)

Data Asset Resource Web Interface (DARWIN) is a multi-level, architectual project tracking system utilized
for large or enterprise operating environments. Its primary goal is for keeping track of project names,
acronymns, descriptions, support contact personnel, software and hardware requirements, application
middleware and external vendor information for different environmental aspects.

The DARWIN project environment runs under either a Unix-based or Windows operating platforms using the
MySQL or Oracle database platforms and the PHP server-side scripting environment. Under new SOAP/WSDL-based
web services, DARWIN will be utilized for internal and external web-based interfaces for inventory or
metric-based projects. DARWIN's GUI and its Editor interface is also entirely dynamic, updating when new or
updated asset information is verified by its internal database and support scripts.


### APPLICATION REQUIREMENTS
Functional LAMP Platform - Linux, Apache, PHP 5.x and above, and MySQL Database environments.


### INSTALLATION INSTRUCTIONS
1) Find a location to store all the DARWIN-related files as found in
   this release. 
```
	Example: /home/darwin/public_html
```

2) Access MySQL database framework and create the 'DARWIN' database.
```
        Example: mysql -u <loginname> -p
                 MySQL> create database darwin;
```

3) Under that same directory of the DARWIN files, import the DARWIN database build.
```
        Example: mysql -u <loginname> -p darwin < darwin.sql
```

4) Edit dbconn.inc and modify the LOGIN_NAME & LOGIN_PASSWORD for
   database access to where the darwin information is stored.

5) Point browser to DARWIN PHP file location and click on 'dynamic_query_form.php'.
```
        Example: http://localhost/~darwin/dynamic_query_form.php
```

If DARWIN Project Acronym is displayed, application is working correctly. If not,
check to make sure that the dbconn.inc is pointed at the right database and that
the user/password given is correctly spelled.

Enjoy!

-- Michael


