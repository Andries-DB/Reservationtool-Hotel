# Reservationtool for hotel
## Made by: Andries De Baere

## Public and private part
### Public:
    pages
    contact form with file upload possibility
    
    protected via login, without register:
        dashboard with management of reservations

    Laravel 9
        Correct application of MVC
        Form Handling
        validation of fields
        population of fields
        on updates, refill fields with data from db in case of errors, refill fields with old data
 
    Localisation
        App configured in NL
        no hardcoded labels/messages in views 

    Database (mysql)
        Migrations
        Two factories
        100 clients seeding with fake data
        incl. generated image for profile picture (e.g. https://5balloons.info/faker-images-in-laravel/)
        Create 20 rooms

    Models with correct relations
        Soft Deletes on customers

    Authentication
        via Laravel Breeze

    Resource Handling
    
    Recode the styles with sass & Tailwind CSS

    Use Laravel Webpack Mix 
        (compiling assets from resources, to public)
 
    Mailing
        HTML Send mails after created reservation
        Fill in the contact form
