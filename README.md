<p align="center">
  <a href="https://github.com/thiiagoms/learning-phpunit">
    <img src="assets/logo.png" alt="Logo" width="80" height="80">
  </a>
     <h3 align="center">Learning about PHPUnit :bug:</h3>
</p>

- [Dependencies](#dependencies)
- [Usage](#usage)

### Dependencies
* PHP 8.1
* Composer

### Usage

01 -) Clone the project
```bash
$ git clone https://github.com/thiiagoms/learning-phpunit
```

02 -) Install dependencies:
```bash
$ cd learning-phpunit
user@pc:leasrning-phpunit$ composer install
```

03 -) To run:

- Tests
```bash
user@pc:leasrning-phpunit$ composer tests
```

- Lint
```bash
user@pc:leasrning-phpunit$ composer phplint
```

- PHPCS and PHPCBF  
```bash
user@pc:leasrning-phpunit$ composer phpcs
user@pc:leasrning-phpunit$ composer phpcbf
```

04 -) Run application
```bash
user@pc:leasrning-phpunit$ chmod +x app
user@pc:leasrning-phpunit$ ./app

    ██████╗ ██╗  ██╗██████╗ ██╗   ██╗███╗   ██╗██╗████████╗
    ██╔══██╗██║  ██║██╔══██╗██║   ██║████╗  ██║██║╚══██╔══╝
    ██████╔╝███████║██████╔╝██║   ██║██╔██╗ ██║██║   ██║   
    ██╔═══╝ ██╔══██║██╔═══╝ ██║   ██║██║╚██╗██║██║   ██║   
    ██║     ██║  ██║██║     ╚██████╔╝██║ ╚████║██║   ██║ 
    ╚═╝     ╚═╝  ╚═╝╚═╝      ╚═════╝ ╚═╝  ╚═══╝╚═╝   ╚═╝ 
    
    [*] Learning about phpunit with simple calculator
    
> Number One: 2
> Number Two: 2
```