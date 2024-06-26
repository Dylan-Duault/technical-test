# Code review project

## Description
This project was created for conducting technical interviews.

It is intentionally poorly coded: it does not adhere to the latest coding standards, lacks optimization, and neglects security best practices.
The main objective of this project is to allow candidates to review the codebase, identify issues, and propose corrections and improvements.

## Pre-requisites
- PHP 8.3
- Composer
- npm

## Getting Started
To run the project locally:
1. Clone the repository to your local machine.
2. Install dependencies using Composer (`composer install`).
3. Install dependencies using npm (`npm install`).
4. Set up your environment variables by copying `.env.example` to `.env` and adding your  [apiflash.com](https://apiflash.com) API key:
```
API_FLASH_KEY=your_api_key_here
```

5. Start the server using Artisan:
```
php artisan serve
```

6. Access the application at `http://localhost:8000`.

## Functionalities

The application allows users to:
- Take a screenshot of a website by entering a URL.
  ![home](./public/img/homepage.png)

- View a list of all screenshots taken.
![list](./public/img/screenshots.png)

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
