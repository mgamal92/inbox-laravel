
# Laravel Inbox

A simple and efficient messaging system for Laravel applications, enabling user-to-user communications with ease.

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Requirements](#requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Contributing](#contributing)
- [Security](#security)
- [License](#license)

## Introduction

The Laravel Inbox Package offers a streamlined approach to integrating a messaging system within your Laravel application. It is designed to handle user-to-user messaging with minimal setup.

## Features

- [ ] Send messages to other users
- [ ] Receive messages from other users
- [ ] Mark messages as read or unread
- [ ] Delete messages with soft delete
- [ ] Star messages


## Requirements

- Laravel 8.x or newer
- PHP 7.4 or higher

## Installation

- Use Composer to install the package:

```bash
composer require mgamal/laravel-inbox
```

- Publish the configuration and migrations:

```bash
php artisan vendor:publish --provider="MG\LaravelInbox\InboxServiceProvider"
```

- You many need to run this commad for config file 
```bash
php artisan vendor:publish --tag=config
```

- Run migrations to create necessary tables:

```bash
php artisan migrate
```

## Configuration

Configuration Modify config/inbox.php for custom settings like database table names.


## Security

Report security vulnerabilities to mg.dev1992@icloud.com

## License

The Laravel Inbox Package is open-source software licensed under the MIT license.
