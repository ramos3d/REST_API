# REST API Structure
This repository contains a basic structure for building a RESTful API in PHP. It provides a simple routing mechanism to handle different endpoints and an example implementation for retrieving user data from an API. 
For this example, I used the free JSONPlaceholder API provided by typicode. 

# Introduction
The REST API structure is designed to provide a foundation for building RESTful APIs in PHP. It follows a simple directory structure and includes essential components like environment variable loading, routing, and example API consumption.

# Directory Structure
The repository has the following directory structure:
```
REST_API_structure/
├── api/
│   └── APIReader.php
├── routes/
│   └── route.php
├── .env
├── EnvLoader.php
└── index.php
```

- The api/ directory contains the API-related classes and logic. In this example, it includes the APIReader.php file, which demonstrates fetching user data from an API source.
- The routes/ directory contains the routing configuration for different endpoints. The route.php file defines the available routes and their corresponding actions.
- The .env file stores environment variables used by the application. The EnvLoader.php file loads these variables into the environment.
- The index.php file acts as the entry point for the application. It loads the environment variables, includes the routing file, and handles the requests.

# Routing
The routing mechanism allows mapping URLs to specific actions in the code. In this structure, the routing is implemented in the **routes/route.php file**.

The route.php file defines an associative array called $routes, where each key represents a route URL and contains information about the expected request method and the corresponding action to be executed. Currently, only the GET method is used.

The handleRequest function is responsible for handling the /users endpoint. It uses the APIReader class to retrieve user data and returns it as a JSON response.

To add more routes, you can expand the $routes array and define the appropriate actions in the code.

# Usage
To use this REST API structure, follow these steps:

1. Clone the repository: **git clone https://github.com/ramos3d/REST_API.git**
2. Set up the environment variables by creating a .env file in the project root directory. Refer to the provided .env.example file for the required variables.
3. Customize the API logic in the api/APIReader.php file or create additional API-related files.
4. Define additional routes and actions in the **routes/route.php** file as per your API requirements.
5. Deploy the application to a PHP-enabled web server.
6. Access the defined endpoints using the appropriate URLs. (example: http://localhost/REST_API/users)


The REST API Structure provides a basic foundation for building RESTful APIs in PHP. It includes essential components like routing, environment variable loading, and an example implementation for consuming an API. Feel free to explore and modify the codebase according to your specific project requirements.

If you have any questions or need further assistance, please don't hesitate to reach out. 
