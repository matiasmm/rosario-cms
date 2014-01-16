Rosario-CMS
===========

CMS based on Symfony2
This is a ßeta project.

## Requirements ##

You need to have these dependencies installed: 

 - `php >= 5.4` with extensions enabled: `intl`, `mysql` or `sqlite`
 - Composer: [Download composer](http://getcomposer.org/download/)

## Install ##
Make sure you have the **Requirements** listed above installed.

 1. Clone the repo

    `git clone https://github.com/lucciano/rosario-cms.git
     cd rosario-cms`
    
 2. Install dependencies using composer:
   `composer.phar install `
 3. Create from template config file set up the database connection:
   3.1. `cp app/config/parameters.yml.dist app/config/parameters.yml`
   3.2. Open with a text editor `app/config/parameters.yml`.

 4.  Run the app
        `php app/console server:run`
       


## Aims ##
* Static website
* Strong integration with JS (maybe through AngularJS)
* Extensions
  * Pages, directory
  * Calendar
  * Blog, Blog Post
  * Etc, etc
* Skineable
  * Structure (how each content is displayed)
  * Coordinator
  * Assets (js/css/images)

## Components ##
The system consists on two main compontents: content and anchors.

### Anchors ###
 Anchors are used to show the content in every moment, at least there must be the following anchors:
 
 * Organizator 

Set the possible blocks, for example 'header, 'menu', 'content', each one can be completed with another anchor.

 * Crude

To show content without modifications (specially binary, images, JS, CSS)

 * Specific
List content in an specific way.
        
### Content ###
 Each content defines its own data as well as its relationship with other content.
 * Binary
 * Page 
 * Directory 

### Coding standards ###

    http://symfony.com/doc/current/contributing/code/standards.html
