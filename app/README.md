# Temper Onboarding Data

This project visualizes the onboarding data of Temper users in a chart

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

This project assumes you have PHP, composer, and git installed on your machine

### Installing

git clone https://github.com/kaladakienka/temper.git
cd temper/app
cp .env.example .env
RUN php ../composer.phar install
RUN php artisan key:generate
RUN php artisan serve
Navigate to http://localhost:8000
