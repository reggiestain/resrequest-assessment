
# Welcome to my resrequest assessment

This solution was implemented using a simple MVC architecture.
It separates the code into three layers. Model is the representation of all the data used, and the code required to make it persist. The Controller handles requests and updates the model. And lastly, View offers ways to extract and represent the data from the Model

List of libraries
=================

Below, a list of libraries used for implementation.

| Language                  | Library   
| ------------------------- | ------------------------------------------------------------------------------ |
| PHP [illuminate/database] | (https://github.com/illuminate/database)                                       | 
| JQUERY | CSS [Datatables] | (https://datatables.net/examples/styling/bootstrap)                            |
## Installation

1. First, download the project folder, either directly or by cloning the repo into the "www" directory on your apache server.
2. This Application database file is located in "app/schema/rest_request_db.sql" directory of the project folder
3. Run this sql script on your mysql server to create the "rest_request_db" database.

## Configuration
Open [app/database.php](app/database.php) and enter your database configuration data.
You are now set to go.

Run the Application on your web server




