# New England Pinball Locator

## Live URL
<http://p4.joebox.me>

## Description
The New England Pinball Locator is a searchable, user-modifiable database of places to play pinball in New England

Years ago, pinball machines were an essential fixture in almost any bar, bowling alley, arcade, pizza parlor or movie theater. As other forms of entertainment began competing for the same space, pinball was forced aside and it has become harder to find pinball in public places.

The New England Pinball Locator will allow players to search for places to play and show which games are available at each location. Registered users will be able to add new locations, modify existing locations to change the line-up of machines, and add notes about game pricing and condition.


## Screencast Demo
<https://youtu.be/82tSqUpWqyI>

## Details for teaching team
* Users Jill and Jamal are available, or you can create your own.  Registered users have access to the full set of features.
* Though the terms "pinball machine" and "pinball game" can be used interchangeably, I've given them specific meaning within the code. I use "machine" to refer an entry in the master list of machines.  I use "game" to refer to an instance of a particular machine at a particular location. I tried to remain consistent throughout the code.  Users need not be aware of this subtle distinction.
* Almost all locations are made-up and so noted on the screens.  Locations added by users are inserted into the database with the "real" flag set to "false".

## Outside code
* Bootstrap: http://getbootstrap.com/
* jQuery: http://jquery.com/
* Laravel Debugbar https://github.com/barryvdh/laravel-debugbar
* Laravel 5 log viewer https://github.com/rap2hpoutre/laravel-log-viewer
* jQuery code to enable the add/remove buttons on the Update Lineup page was derived from
 a tutorial published at Design Chemical: http://www.designchemical.com/blog/index.php/jquery/create-add-remove-select-lists-using-jquery/
