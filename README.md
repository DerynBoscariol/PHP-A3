# Welcome to CineBase
CineBase is a Laravel based CMS that manages actors, films and the relationships between them. Clone this repo and run `php artisan serve` in the root folder to explore the project.

## Database Schema

### Actor Properties
- Unique identification key (integer id)
- Actor's first name (string fname)
- Actor's last name (string lname)
- Actor's country of origin (string country)

### Film Properties
- Unique identification key (integer id)
- Title of film (string title)
- Year of film's release (string year)
- Genre of film (string genre)

## Features

### Actors
- Add a new actor
- Associate an actor with films
- Unassociate an actor with films
- Update an actor's information
- Trash an actor
- Restore an actor from trashed actors
- Permanently delete an actor

### Films
- Add a new actor 
- Associate a film with actors
- Unassociate a film with actors
- Update a film's information
- Trash a film
- Restore a film from trashed films
- Permanently delete a film

## Future Improvements

In this project I was unable to complete the admin/authentication funtionality because I ran into a problem while trying to download. I was prsented with options that were very different from the provided tutorial and while trying to select and make different options works, I was unnable to integrate the downloaded content into my existing code and recieved many errors.

## Reflection on Laravel

I really enjoyed learning about Laravel and found it much more intuitave than plain php. I would have liked a little more focus on relating entities to each other and presenting that in a view as that was one thing I initally struggled to figure out. I also am unsure of how one would seed those connections in a database.